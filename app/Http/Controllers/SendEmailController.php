<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\Mail\ReplyMail;
use App\Models\EmailUser;

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
    function reply(Request $request)
    {       
        
     $this->validate($request, [
      'message' =>  'required',
      'mail' => 'required'
     ]);

        $data =   $request->message;
        $d  = $request->mail;
    
     Mail::to($request->mail)->send(new ReplyMail($data,$d));
     return back()->with('success', 'Thanks for contacting us!');

    }
    function deleteMail( $mail)
    {
        $id= DB::table('email_users')->where('email', $mail->email)->get('id');
        DB::table('email_users')->where('id', $id)->delete();
    }
}
