<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->from('admin@admin.com','Admin')
//                    ->to('email@email.com', 'Name Person')
//                    ->bcc('enothe@enothe.com')
//                    ->subject('Subject line for the Email')
//            ->view('emails.orders.placed');
        return $this->to($this->order->billing_email, $this->order->billing_name)
                    ->bcc('enothe@enothe.com')
                    ->subject('Order for Laravel Ecommerce Example')
//            ->view('emails.orders.placed');
            ->markdown('emails.orders.placed');
    }
}
