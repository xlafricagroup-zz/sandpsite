<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class requestCallBack extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    Public $phone, $email, $service;
    public function __construct($allRequest)
    {
        $this->phone = $allRequest['phone'];
        $this->email = $allRequest['email'];
        $this->service = $allRequest['service'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Mails.requestCallBack')->subject('CALL BACK REQUEST');
    }
}
