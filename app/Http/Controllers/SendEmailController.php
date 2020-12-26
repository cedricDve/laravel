<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;

use Mail;

class SendEmailController extends Controller
{
    //

    public function index(){
        return view('contact.send_email');
    }
    //-----------------------------------------------------------------------------------------------
    /* Able to send the email -> function send 
                              -> request 
                              -> validate data
                              -> pass the data, send Mail
    */
    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'subject'     =>  'required',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'email'  =>  $request->email,
            'subject'     =>  $request->subject,
            'message'   =>   $request->message
           
        );

     Mail::to('bxlgameur@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
