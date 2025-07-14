<h2>Hello {{ $user->name }},</h2>
<p>Thank you for your order. Here are the details:</p>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cart as $item)
        <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['quantity'] }}</td>
            <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<p><strong>Total:</strong> ${{ number_format($total, 2) }}</p>
<p>We’ll notify you when your order ships.</p>

<br>
<hr>
<p><strong>Please choose an option:</strong></p>
<div style="margin-top: 10px;">
    <a href="{{ url('/order/redirect-to-payment?order_id=' . $order->order_id) }}"
    style="display: inline-block; padding: 10px 16px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px; margin-right: 10px;">
        Confirm Order
    </a>

    <a href="{{ url('/order/cancel?order_id=' . $order->order_id) }}"
       style="display: inline-block; padding: 10px 16px; background-color: #dc3545; color: white; text-decoration: none; border-radius: 5px;">
        Cancel Order
    </a>
</div>
