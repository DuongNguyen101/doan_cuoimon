<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $cart;
    public $total;
    public $user;
    public $order;

    public function __construct($user, $order, $orderDetails)
    {
        $this->user = $user;
        $this->order = $order;

        $this->cart = $orderDetails->map(function ($item) {
            return [
                'name' => $item->product->name ?? 'Unknown',
                'quantity' => $item->quantity,
                'price' => $item->unit_price,
            ];
        });

        $this->total = $this->cart->sum(function ($item) {
            return $item['quantity'] * $item['price'];
        });
    }
    public function build()
    {
        return $this->subject('Order Confirmation')
            ->view('template.user.emails.order_confirmation');
    }
}
