<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PlainMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $page;
    public $data = [];

    /**
     * Create a new message instance.
     *
     * @param string $subject
     * @param string $email
     * @param string $page
     * @param array $data
     * @return void
     */
    public function __construct($subject, $email, $page, $data = [])
    {
        $this->subject = $subject;
        $this->email = $email;
        $this->data = $data;
        $this->page = $page;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            to: $this->email,
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.' . $this->page,
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
