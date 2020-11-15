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
    public function index()
    {
        $user = Auth()->user()->avatar;
        $id = Auth()->user()->id;
        return view('home', [
            'avatar'=> $user,
            'id' => $id,
        ]);
    }
    public function info()
    {
        return view('info.index');
    }

}
