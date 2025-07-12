<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\OrderDetails;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmationMail;
use App\Models\UserAddress;

class PaymentController extends Controller
{
    public function vnpay_payment(Request $request)
    {
        $data = $request->all();
        $code_cart = rand(100000, 999999);

        $user = auth()->user();
        $usdAmount = $data['total'];
        $exchangeRate = 26110;
        $vndAmount = round($usdAmount * $exchangeRate);

        $address = '';
        if ($user) {
            $userAddress = \App\Models\UserAddress::where('user_id', $user->id)->latest()->first();
            if ($userAddress) {
                $address = implode(', ', array_filter([
                    $userAddress->street,
                    $userAddress->district,
                    $userAddress->city,
                ]));
            }
        }

        Orders::create([
            'order_id' => $code_cart,
            'user_id' => $user->id,
            'order_date' => now(),
            'total_amount' => $vndAmount,
            'status' => 'pending',
            'address' => $address,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $cart = session('cart', []);
        foreach ($cart as $productId => $item) {
            OrderDetails::create([
                'order_id' => $code_cart,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'unit_price' => $item['price'],
                'subtotal' => $item['quantity'] * $item['price'],
            ]);
        }

        $order = Orders::where('order_id', $code_cart)->first();
        $orderDetails = OrderDetails::with('product')->where('order_id', $code_cart)->get();

        try {
            Mail::to($user->email)->send(new OrderConfirmationMail($user, $order, $orderDetails));
        } catch (\Exception $e) {
            \Log::error('Lỗi gửi mail: ' . $e->getMessage());
        }

        if ($request->has('just_message')) {
            return back()->with('check_email', 'Your order has been received. Please check your email for confirmation!');
        }

        $vnp_TmnCode = "TMOQACY3";
        $vnp_HashSecret = "XKDDC9QWAARKDVUKXNNRQDNU8U1LRMRX";
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('vnpay.return');
        $vnp_Amount = $vndAmount * 100;
        $vnp_TxnRef = $code_cart;

        $inputData = [
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $_SERVER['REMOTE_ADDR'],
            "vnp_Locale" => 'vn',
            "vnp_OrderInfo" => 'Thanh toán đơn hàng #' . $code_cart,
            "vnp_OrderType" => 'billpayment',
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        ];

        ksort($inputData);
        $query = '';
        $hashdata = '';
        $i = 0;
        foreach ($inputData as $key => $value) {
            $hashdata .= ($i ? '&' : '') . urlencode($key) . "=" . urlencode($value);
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
            $i++;
        }

        $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
        $vnp_Url .= '?' . $query . 'vnp_SecureHash=' . $vnpSecureHash;

        return redirect()->away($vnp_Url);
    }

public function vnpay_return(Request $request)
{
    $vnp_HashSecret = "XKDDC9QWAARKDVUKXNNRQDNU8U1LRMRX";
    $inputData = $request->except('vnp_SecureHash');
    $vnp_SecureHash = $request->vnp_SecureHash;

    ksort($inputData);
    $hashData = '';
    $i = 0;
    foreach ($inputData as $key => $value) {
        if ($i == 1) {
            $hashData .= '&' . urlencode($key) . "=" . urlencode($value);
        } else {
            $hashData .= urlencode($key) . "=" . urlencode($value);
            $i = 1;
        }
    }

    $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);

    if ($secureHash === $vnp_SecureHash) {
        if ($request->vnp_ResponseCode == '00') {
            $order = Orders::where('order_id', $request->vnp_TxnRef)->first();
            if ($order) {
                $order->status = Orders::STATUS_RESOLVED; // ✅ dùng hằng số an toàn
                $order->updated_at = now();
                $order->save();
            }

            $categories = Categories::all();
            return view('template.user.shop.success', [
                'txnRef' => $request->vnp_TxnRef,
                'amount' => number_format($request->vnp_Amount / 100, 0),
                'time' => $request->vnp_PayDate,
                'categories' => $categories,
            ]);
        } else {
            return redirect('template/user/shop/checkout')->with('error', 'Transaction cancelled or failed.');
        }
    } else {
        return redirect('template/user/shop/checkout')->with('error', 'Invalid signature!');
    }
}


    public function redirectToVnpay(Request $request)
    {
        $orderId = $request->query('order_id');
        $order = Orders::where('order_id', $orderId)->first();

        if (!$order) {
            return redirect('/')->with('error', 'Không tìm thấy đơn hàng.');
        }

        $requestData = new Request();
        $requestData->replace([
            'total' => $order->total_amount / 26110, 
        ]);

        return $this->vnpay_payment($requestData);
    }

}
