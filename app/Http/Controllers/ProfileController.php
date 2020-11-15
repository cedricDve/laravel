<?php

namespace App\Http\Controllers;
use  App\Models\User;

use  App\Models\Post;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index($user)
    {
        // dd($user);
        // to get our user 
     $a = (User::find($user));
     $b = (Post::where("user_id" , "=",  $a->id))->get();
      
        return view('profile.index', [
            'user' => $a,
            'posts' => $b,
        ]);
    }
}
