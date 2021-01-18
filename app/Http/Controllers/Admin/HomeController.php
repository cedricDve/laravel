<?php

namespace App\Http\Controllers\Admin;
use App\Models\EmailUser;
use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //
    public function index(){
  
        return view('admin.home');
    }
    public function showMails(){
        $emails = EmailUser::select("*")
        ->where("answ", "=", 0)
        ->get();              
        return view('admin.mails')->with('emails', $emails); 
    }
    public function showMail($id){
        $email = EmailUser::select("*")
        ->where("id", "=", $id)
        ->get();
               
        return view('admin.mail')->with('email', $email); 
    }
    public function manageUsers(){
        $users = User::get();
        return view('admin.manage')->with('users',$users);
    }
    public function managePosts(){
        $post = Post::get();
        return view('admin.managePosts')->with('posts',$post);
    }
    public function isAdmin($id){
        $user = User::find($id);
        if($user->admin == 0)
        $userUpdate=[
            'admin' => 1,                     
        ]; 
        else    
        $userUpdate=[
            'admin' => 0,                     
        ]; 
       DB::table('users')->where('id', $id)->update($userUpdate);
        return redirect()->back();
    }
    public function destroy($id)
    {    
        $user = User::find($id);
    //Forms do not support the DELETE method so you need to use the Laravel @method helper to tell Laravel you want to use the DELETE verb.
        $user->delete();
        return redirect()->back()->withErrors('Successfully deleted!');
    }
}
