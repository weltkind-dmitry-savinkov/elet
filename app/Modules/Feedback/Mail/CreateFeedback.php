<?php

namespace App\Modules\Feedback\Mail;

use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

class CreateFeedback extends Mailable
{
    use Queueable, SerializesModels;

    public $feedback;

    public function __construct($feedback)
    {
        $this->feedback = $feedback;
    }

    public function build()
    {
        return $this
            ->from($this->feedback->email)
            ->subject('Новый отзыв')
            ->view('feedback::emails.notify')
            ->with(['entity' => $this->feedback]);
    }
}