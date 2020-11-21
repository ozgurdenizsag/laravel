<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemandeDevis extends Mailable
{
    use Queueable, SerializesModels;

    public $reqMail;
    public $reqMsg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail,$msg)
    {
        $this->reqMail = $mail;
        $this->reqMsg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.devisaenvoyer');
    }
}
