<?php

namespace App\Mail;
use App\Models\EmailUser;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
// https://laravel.com/docs/8.x/mail

class ReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$mail)
    {
        //
        $this->data = $data;
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
 
       // EmailUser::where('email',$this->mail)->update(['answ'=>1]);
        DB::table('email_users')->where('email', $this->mail)->update(['answ'=>1]);
        return $this->from('bxlgameur@gmail.com')->subject('Reply To Your Email')
            ->view('emails.replyToUser')->with('data', $this->data);
    }
}
