<?php

namespace App\Mail;

use App\Models\Inquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Support\Facades\Auth;

class ClientInquiries extends Mailable
{
    use Queueable, SerializesModels;

    public $subject,$body,$senderMail;

    /**
     * Create a new message instance.
     */
    public function __construct($subject,$body,$senderMail)
    {

        $this->subject = $subject;
        $this->body = $body;
        $this->senderMail = $senderMail;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $user = Auth::user();

        return new Envelope(
            from: new Address($user->email, $user->firstName),
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.inquiryMail',
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
