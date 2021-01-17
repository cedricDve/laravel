<?php

namespace App\Http\Controllers;
use  App\Models\User;
use DB;

use  App\Models\Post;
use Illuminate\Http\Request;

use Input;

class ProfileController extends Controller
{
    //------------------------------------------------------------------------------------------------------------------------------------------------
    public function index($user)
    {
        // dd($user);
        // to get our user 
     $a = (User::find($user));
     $b = (Post::where("user_id" , "=",  $a->id))->get();
     $c = (Post::where("user_id" , "=",  $a->id))->limit(2)->get();
      //SELECT * FROM posts GROUP BY user-id
     $allPosts = Post::all();
     // I HAD TO CHANGE IN CONFIG FILE => MYSQL => STRICT -> FALSE
     //DB::select('select * FROM posts GROUP BY user_id');
     $uniquePosts= DB::table('posts')->select('*')->groupBy('user_id')->get();
     $authors = DB::table('users')->limit(5)->get();
        return view('project.profile', [
            'user' => $a,
            'posts' => $b,
            'posts_2' => $c,
            'all_posts' => $allPosts,
            'unique_posts' => $uniquePosts,
            'authors' => $authors,
        ]);
    }

    public function update(Request $request)
    {
        $id= auth()->id();  
      

   
         $request->validate([
            'name' => [ 'string', 'max:255'],
            //TO AVOID WHEN UPDATING THE USER GET AN ERROR => BECAUSE HIS EMAIL ALREADY EXIST
            'email' => 'required|email|unique:users,email,' . $id. ',id',
            'status' => [ 'string'],
        ]);
 
      
        $userUpdate=[
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
            'biography' =>$request->biography
        ];        
   
     
        DB::table('users')->where('id', $id)->update($userUpdate);
        return redirect()->back();
    }
   
    //------------------------------------------------------------------------------------------------------------------------------------------------
    /*This function will search for all posts and 5 Authors 
        This function should be changed in the futur To Search For popular authors -> authors with the most likes for ex..*/
    public function search(){
        $all_posts = Post::all();
        $authors = DB::table('users')->limit(5)->get();
        return view('search.search',
    [
        'posts' => $all_posts,
        'authors' => $authors,
    ]);
    }
    //------------------------------------------------------------------------------------------------------------------------------------------------
    public function search_user(){
        //$query = Input::get('search');
        //$query = $_GET['query'];
        $query = request()->query('search');  
        if($query != "")
        {           
            //search on user_name and user_EMAIL -> take only 5 
            $u = User::where('name', 'LIKE' , '%' . $query . '%')
                ->orWhere('email', 'LIKE' , '%' . $query . '%')
                ->take(5)
                ->get();
              
                if(count($u)>0)
                {
                   
                    return view('search.search',  [
                        'u' => $u,
                        'query' => $query,
                        
                    ]);
                }
        }        
        return view('search.search')->withMessage('No users found with that name or email-address');
    }
    //------------------------------------------------------------------------------------------------------------------------------------------------
    /*The ssearch is the "global search" of my website.
      This will search for Post: title and content 
                   and for User: name and email */
    public function ssearch(){
        $query = request()->query('ssearch');  
        if($query != "")
        {    //if query isnt null -> pass the data into the view   
            //search on user_name and user_EMAIL -> take only 5 
            $u = User::where('name', 'LIKE' , '%' . $query . '%')
                ->orWhere('email', 'LIKE' , '%' . $query . '%')
                ->take(5)
                ->get();
            //search on post-content and -title -> take all
            $posts = Post::where('title','Like','%' . $query . '%')
                ->orWhere('content', 'LIKE' , '%' . $query . '%')
                ->take(5)
                ->get();                
              
            if(count($u)>0 || count($posts))
            {
                return view('search.ssearch',  [
                        'u' => $u,
                        'posts' => $posts,
                        'query' => $query,
                        
                    ]);
            }   
        }
        //if nothing found
        return view('search.ssearch')->withMessage('Nothing found');
    }
}
