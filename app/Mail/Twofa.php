<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Twofa extends Mailable
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
        $template = $preferredLanguage  === 'es' ? 'emails.es.2fa' : 'emails.2fa';
        return $this->markdown($template)->subject($this->demo->subject);
    }
}
