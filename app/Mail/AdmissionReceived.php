<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdmissionReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Form data

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('New Admission Application')
                    ->view('emails.admission-received');
    }
}
