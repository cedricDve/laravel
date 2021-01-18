<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // When the user loggs in he will be redirected to welcome page
    public function index(){
        return view('welcome');
    }
    public function info(){
        return view('info.index');
    }
}
