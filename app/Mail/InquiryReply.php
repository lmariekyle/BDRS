<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Mailables\Address;

class InquiryReply extends Mailable
{
    use Queueable, SerializesModels;

    public $subject,$body,$clientName;
    /**
     * Create a new message instance.
     */
    public function __construct($subject,$body, $clientName)
    {
        $this->subject = $subject;
        $this->body = $body;
        $this->clientName = $clientName;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $user = Auth::user();

        return new Envelope(
            from: new Address($user->email),
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.inquiryReply',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
