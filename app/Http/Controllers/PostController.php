<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use DB;

class PostController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=> 'index' , 'show']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cu = auth()->user();
        if($cu == null)
        $cu_id=0;
        else
        $cu_id= $cu->id;
        //dd($cu->email);
        //show all posts
        $posts = Post::all();
        return view('posts.index',[
            'posts' => $posts,
            'id'=>$cu_id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //        
        return view('posts.createPost');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //data validator
        $validatedData = $request->validate([
            'title' => ['required', 'unique:posts', 'max:255'],
            'content' => ['required'],
            'post_image' => ['file', 'image'],
        ]);
        // dd($request);
       $post = new Post;
       $post->title = $request->title;
       $post->content = $request->content;
       $post->user_id = Auth::user()->id;
  
 
       if( request()->hasFile('post_image'))
       {
           //php artisan storage:link  make it accessible -> storage/post_images/../..
           //request -> global helper           config file systems
           $post_image = request()->file('post_image')->getClientOriginalName();
           request()->file('post_image')->storeAs('post_images', $post->user_id . '/' . $post_image, '' );
          // $post->update(['post_image' => $post_image]);
          $post->post_image = $post_image;
       }
       $post->save();
      // dd($post->id);
       return redirect('/posts/'. $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //         dd($post->id);
      
  

        $post_title = $post->title;
       $user = User::find($post->user_id);
       $user_name = $user->name;
       $id = $user->id;
       
       $post_image = $post->post_image;
      
       
        $post_content = $post->content;
        return view('posts.post',[
            'id' => $id ,
            'postId' => $post->id,
            'title' =>  $post_title ,
            'content' => $post_content,
            'image' => $post_image,
            'user_name' => $user_name,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {     
        $post = Post::find($id);
        $postId= $post->id;
        //dd($post->id);
               
        $request->validate([
           'title' => [ 'string', 'max:255',],          
           'content' => [ 'string'],
       ]);
     
       $userUpdate=[
           'title' => $request->title,
           'content' => $request->content,           
       ];       
    
      DB::table('posts')->where('id', $postId)->update($userUpdate);
       return redirect()->back()->withErrors('Successfully updated!');;
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
    //Forms do not support the DELETE method so you need to use the Laravel @method helper to tell Laravel you want to use the DELETE verb.
        $post->delete();
        return redirect()->back()->withErrors('Successfully deleted!');
    }
}
