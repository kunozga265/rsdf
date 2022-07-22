<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUSMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $msg;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$msg,$email)
    {
        $this->name=$name;
        $this->msg=$msg;
        $this->email=$email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact-us')->subject('Message from Site: '.$this->name);
    }
}
