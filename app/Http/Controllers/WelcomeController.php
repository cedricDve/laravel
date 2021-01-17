<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;

class WelcomeController extends Controller
{
    //------------------------------------------------------------------------------------------------------------------------------------------------
    // On the home page I will show some posts and popular authors, this functions will be re-grouped in the futur to avoid code duplication
     public function index(){
        $all_posts = Post::all();
        $authors = DB::table('users')->inRandomOrder()->limit(5)->get();
        return view('index' , [
            'posts' => $all_posts,
            'authors' => $authors,
        ]);
    }
}
