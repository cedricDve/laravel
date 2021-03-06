<?php

namespace App\Mail;
use App\Models\EmailUser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
// https://laravel.com/docs/8.x/mail

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        EmailUser::create(
            [

                "name"=> $this->data['name'],
                "email"=> $this->data['email'],
                "subject"=>$this->data['subject'],
                "message"=> $this->data['message'],
                "answ"=> 0, 
            ]
            );
        return $this->from('bxlgameur@gmail.com')->subject('New Customer Contact-Us')
            ->view('emails.dynamic_email_template')->with('data', $this->data);
    }
}
