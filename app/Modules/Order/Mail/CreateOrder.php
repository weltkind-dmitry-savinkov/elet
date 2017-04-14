<?php

namespace App\Modules\Order\Mail;

use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

class CreateOrder extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function build()
    {
        return $this
            ->from('no-reply@weltkind.com')
            ->subject('Новая заявка на получения кредита')
            ->view('order::emails.notify')
            ->with(['entity' => $this->order]);
    }
}