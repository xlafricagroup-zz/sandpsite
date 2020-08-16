<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    Public $phone, $email, $theMessage, $topic, $company, $fname, $lname;
    public function __construct($allRequest)
    {
        $this->phone = $allRequest['phone'];
        $this->email = $allRequest['email'];
        $this->theMessage = $allRequest['message'];
        $this->company = $allRequest['company'];
        $this->topic = $allRequest['subject'];
        $this->fname = $allRequest['fname'];
        $this->lname = $allRequest['lname'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Mails.contactForm')->subject('CONTACT FROM XL OUTSOURCING ONLINE');
    }
}
