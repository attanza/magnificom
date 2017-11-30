<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Inbox;

class ResumeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $inbox;

    public function __construct(Inbox $inbox)
    {
        $this->inbox = $inbox;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $attachement = public_path().'/attachment/dani_lesmiadi_cv.pdf';
        return $this->subject('Dani Lesmiadi ~ Web Developer')
        ->view('mails.resume')
        ->attach($attachement, [
            'as' => 'dani_lesmiadi_web_developer.pdf',
            'mime' => 'application/pdf',
        ]);
    }
}
