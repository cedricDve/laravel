<?php

namespace App\Http\Controllers;
use  App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index($user)
    {
        // dd($user);
        // to get our user 
     $a = (User::find($user));
     //dd($a);
      
        return view('profile.index', [
            'user' => $a,
        ]);
    }
}
