<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReviewsProduct extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $reviewData;

    public function __construct($reviewData)
    {
        // dd($reviewData);
        $this->reviewData = $reviewData;
   
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Đánh giá sản phẩm: ' . $this->reviewData['reviewData']['sku'] ,
        );
    }

    /**
     * Get the message content definition.
     */
 
    public function content(): Content
    {
        return new Content(
            view: 'emails.review',
            with: [
             'reviewData' => $this->reviewData
            ]
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
