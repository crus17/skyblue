<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class endplan extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @var Demo
     */
    public $demo;

    public function __construct($demo)
    {
        $this->demo = $demo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $preferredLanguage = $this->demo->user_language ?? 'en';
        $template = $preferredLanguage === 'es' ? 'emails.es.endplan' : 'emails.endplan';
        return $this->markdown($template)->subject($this->demo->subject);
    }
}
