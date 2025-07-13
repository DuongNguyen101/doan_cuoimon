<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class OrderController extends Controller
{
    public function confirm(Request $request)
    {
        $orderId = $request->query('order_id');
        $order = Orders::where('order_id', $orderId)->first();

        if (!$order) {
            return redirect('/')->with('error', 'Order not found.');
        }

        if ($order->status !== 'pending') {
            return redirect('/')->with('info', 'Order already processed.');
        }

        $order->status = 'confirmed'; 
        $order->save();

        return redirect('/')->with('success', 'You have confirmed your order successfully!');
    }

    public function cancel(Request $request)
    {
        $orderId = $request->query('order_id');
        $order = Orders::where('order_id', $orderId)->first();

        if (!$order) {
            return redirect('/')->with('error', 'Order not found.');
        }

        if ($order->status !== 'pending') {
            return redirect('/')->with('info', 'Order already processed.');
        }

        $order->status = 'cancelled'; 
        $order->save();

        return redirect('/')->with('success', 'You have cancelled your order.');
    }
}
