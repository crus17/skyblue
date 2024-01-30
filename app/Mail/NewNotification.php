<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $url, $attachment, $body, $subject, $recipient, $salutaion;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($body, $subject, $recipient, $url = null, $attachment = null, $salutaion= null)
    {
        $this->url =  $url;
        $this->attachment = $attachment;
        $this->body =  $body;
        $this->subject = $subject;
        $this->recipient = $recipient;
        $this->salutaion = $salutaion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $preferredLanguage = $this->body->user_language ?? 'en';
        $template = $preferredLanguage === 'es' ? 'emails.es.NewNotification' : 'emails.NewNotification';
        return $this->markdown($template,[
            'url' => $this->url,
            'attachment' => $this->attachment,
            'body' => $this->body,
            'recipient' => $this->recipient,
        ])
        ->subject($this->subject);
    }
}
