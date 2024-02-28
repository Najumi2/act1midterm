<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\UploadedFile;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $text;
    public $attachment;

    public function __construct($name, $email, $text, UploadedFile $attachment = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->text = $text;
        $this->attachment = $attachment;
    }

    public function build()
    {
        $mail = $this->from($this->email, $this->name)
                    ->subject('New Contact Form Submission')
                    ->markdown('emails.contact_form');

        if ($this->attachment) {
            $mail->attach($this->attachment->getRealPath(), [
                'as' => $this->attachment->getClientOriginalName(),
                'mime' => $this->attachment->getMimeType(),
            ]);
        }

        return $mail;
    }
}

