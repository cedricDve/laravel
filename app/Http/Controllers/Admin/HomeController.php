<?php

namespace App\Http\Controllers\Admin;
use App\Models\EmailUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
  
        return view('welcome');
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
}
