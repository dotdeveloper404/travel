<?php

namespace App\Mail;

use App\Models\Package;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Mail\Attachable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
class PackageBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The package instance.
     *
     * @var \App\Models\Package
     */
    public $package;
    
     protected $faqs;
     protected $itenary;
     protected  $pdf;
     
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Package $package,$itenary,$faqs,$pdf)
    {
        $this->package = $package;
        $this->itenary = $itenary;
        $this->faqs = $faqs;
        $this->pdf = $pdf;
    }
        

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Package Booking Mail',
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
            view: 'portal.mails.package-booking',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [
            Attachment::fromData(fn () => $this->pdf,'Package.pdf')->withMime('application/pdf')
        ];
    }
}