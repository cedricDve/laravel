<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //------------------------------------------------------------------------------------------------------------------------------------------------
    //This function will return the home-view and pass the avatar and id of the authenticated user
    public function index()
    {
        $user = Auth()->user()->avatar;
        $id = Auth()->user()->id;
        return view('home', [
            'avatar'=> $user,
            'id' => $id,
        ]);
    }
  
}
