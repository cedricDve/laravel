<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; 

class ContactController extends Controller
{
    //
    public function index(){
        return view('contact.index');
    }

    public function submitContact(Request $request)
    {
        Mail::send('emails.contactmail', [
            'contact_title' => $request->contact_title,
             'contact_desc' => $request->contact_desc, 
             'contact_name' => $request->contact_name , 
             'contact_email' => $request->contact_email , 
         ],function($mail) use($request){
             $mail->from(env('MAIL_FROM_ADDRESS'),$request->contact_name);
                $mail->to("bxlgameur@gmaim.com")->subject('Contact Us Message');
         });
         return "Successfull send ";
    }
}

        // Deprecated or just dont work
        /*     
        dd($request->contact_title);
        if(Auth::user())
        {
           
            Mail::send('emails.contactmail', [
                'contact_title' => $request->contact_title,
                'contact_desc' => $request->contact_desc, 
            ],function($mail) use($request){
                $mail->from(env('MAIL_FROM_ADDRESS'),$request->contact_title);
                $mail->to("bxlgameur@gmaim.com")->subject('Contact Us Message');
            });
        }
        else {*/
