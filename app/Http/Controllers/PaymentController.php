<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmationMail;
use App\Models\Categories;
use App\Models\OrderDetails;
use App\Models\Orders;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function vnpay_payment(Request $request)
    {
        $data = $request->all();
        $code_cart = rand(1000, 9999);

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('vnpay.return');
        $vnp_TmnCode = "TMOQACY3";
        $vnp_HashSecret = "XKDDC9QWAARKDVUKXNNRQDNU8U1LRMRX";

        $user = auth()->user();
        $usdAmount = $data['total'] ;
        $exchangeRate = 26110;
        $vndAmount = round($usdAmount * $exchangeRate);
        $vnp_Amount = $vndAmount * 100;

        $vnp_TxnRef = $code_cart;
        $vnp_OrderInfo = 'Thanh toán đơn hàng #' . $code_cart;
        $vnp_OrderType = 'billpayment';
        $vnp_Locale = 'vn';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $address = '';
        if ($user) {
            $userAddress = UserAddress::where('user_id', $user->id)->latest()->first();
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
        ]);

        $cart = session('cart', []);
        foreach ($cart as $productId => $item) {
            OrderDetails::create([
                'order_id' => $code_cart,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'unit_price' => $item['price'],
                'unit_price' => round($item['price'] * $exchangeRate),
                'subtotal' => $item['price'] * $item['quantity'],
            ]);
        }

        $order = Orders::where('order_id', $code_cart)->first();
        $orderDetails = OrderDetails::with('product')->where('order_id', $code_cart)->get();
        try {
            \Mail::to($user->email)->send(new OrderConfirmationMail($user, $order, $orderDetails));
        } catch (\Exception $e) {
            \Log::error('Lỗi gửi mail: ' . $e->getMessage());
        }

        $inputData = [
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        ];

        ksort($inputData);
        $query = '';
        $hashdata = '';
        $i = 0;
        foreach ($inputData as $key => $value) {
            $hashdata .= ($i ? '&' : '') . urlencode($key) . '=' . urlencode($value);
            $query .= urlencode($key) . '=' . urlencode($value) . '&';
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
                
                $categories = Categories::all();

                return view('template.user.shop.success', [
                    'txnRef' => $request->vnp_TxnRef,
                    'amount' => number_format($request->vnp_Amount / 100, 0),
                    'time' => $request->vnp_PayDate,
                    'categories' => $categories, 
                ]);
            } else {
                return redirect('template/user/shop/checkout')->with('error', 'Giao dịch bị huỷ hoặc thất bại.');
            }
        } else {
            return redirect('template/user/shop/checkout')->with('error', 'Chữ ký không hợp lệ!');
        }
    }


    public function redirectToVnpay(Request $request)
    {
        $orderId = $request->query('order_id');

        $order = Orders::where('order_id', $orderId)->first();
        if (!$order) {
            return redirect('/')->with('error', 'Order not found.');
        }

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('vnpay.return');
        $vnp_TmnCode = "TMOQACY3";
        $vnp_HashSecret = "XKDDC9QWAARKDVUKXNNRQDNU8U1LRMRX";

        $vnp_TxnRef = $order->order_id;
        $vnp_Amount = $order->total_amount * 100;
        $vnp_OrderInfo = 'Thanh toán đơn hàng #' . $vnp_TxnRef;
        $vnp_OrderType = 'billpayment';
        $vnp_Locale = 'vn';
        $vnp_IpAddr = $request->ip();

        $inputData = [
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        ];

        ksort($inputData);
        $hashdata = '';
        $i = 0;
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }

        $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
        $vnp_Url .= '?' . http_build_query($inputData) . '&vnp_SecureHash=' . $vnpSecureHash;

        return redirect()->away($vnp_Url);
    }

    public function cancelOrder(Request $request)
    {
        $orderId = $request->query('order_id');

        $order = Orders::where('order_id', $orderId)->first();

        if (!$order) {
            return redirect('/')->with('error', 'Order not found.');
        }

        if ($order->status === 'pending') {
            $order->status = Orders::STATUS_CANCELLED;
            $order->updated_at = now();
            $order->save();

            session()->forget('cart');

            return redirect('/')->with('info', 'Your order has been cancelled.');
        }

        return redirect('/')->with('warning', 'This order cannot be cancelled (status: ' . $order->status . ').');
    }
}
