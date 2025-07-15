@extends('layout.user')
@section('content')


<section class="title-banner">
    <div class="container-fluid">
        <div class="banner-wrapper">
            <h1 class="dark-black fw-600">Shopping Cart</h1>
        </div>
    </div>
</section>
<section class="cart py-40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8">
                <div class="d-lg-block d-none">
                    <table class="cart-table mb-16">
                        <thead>
                            <tr>
                                <th>Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                    </table>
                    <table class="cart-table">
                        <tbody>
                            @php
                            $total = 0;
                            foreach ($cart as $item) {
                            $total += $item['price'] * $item['quantity'];
                            }
                            @endphp

                            @forelse ($cart as $productId => $item)
                            <tr class="table-row align-middle">
                                {{-- 1. Product --}}
                                <td class="pd" style="width: 370px">
                                    <div class="product-detail-box d-flex align-items-center">
                                        <a href="{{ route('cart.remove', $productId) }}" class="text-danger me-2">
                                            <i class="fa-solid fa-xmark"></i>
                                        </a>
                                        <div class="img-block me-2">
                                            <a href="{{ route('shopdetail', $productId) }}">
                                        @if(isset($item['image_url']))
                                            <img src="{{ asset('image/shoplist/' . $item['image_url']) }}"
                                                alt="{{ $item['name'] }}"
                                                width="48"
                                                height="48"
                                                class=" rounded border" />
                                        @endif
                                            </a>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">
                                                <a href="{{ route('shopdetail', $productId) }}">{{ $item['name'] }}</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>

                                {{-- 3. Price --}}
                                <td>
                                    <p class="fw-500 mb-0">${{ number_format($item['price'], 2) }}</p>
                                </td>

                                {{-- 4. Quantity --}}
                                <td>
                                    <div class="quantity-controller quantity-wrap d-flex justify-content-center" data-price="{{ $item['price'] }}">
                                        <input
                                            type="number"
                                            name="quantity"
                                            value="{{ $item['quantity'] }}"
                                            min="1"
                                            max="{{ $item['stock'] }}"
                                            data-price="{{ $item['price'] }}"
                                            data-product-id="{{ $productId }}"
                                            class="form-control text-center"
                                            style="width: 80px;" />
                                    </div>
                                </td>

                                {{-- 5. Subtotal --}}
                                <td>
                                    <p class="fw-500 mb-0 subtotal" style="margin-left: 20px;">${{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">Your cart is empty.</td>
                            </tr>
                            @endforelse
                        </tbody>

                    </table>

                </div>

                <div class="table-bottom-row bg-white">
                    <div class="table-bottom-row bg-white">
                        <a href="{{ url('/template/user/shop/category/1') }}" class="cus-btn">Continue Shopping</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                @php
                // Tính tổng tiền
                $total = 0;
                foreach ($cart as $item) {
                $total += $item['price'] * $item['quantity'];
                }
                $shipping = 5;
                $discount = 5;
                $grandTotal = $total + $shipping - $discount;
                @endphp

                <div class="checkout-box bg-semi-white mt-xl-0 mt-48">
                    <div class="checkout-title text-center mb-16">
                        <h5>Cart Total</h5>
                    </div>

                    {{-- Danh sách sản phẩm --}}
                    @php
                    $cartItems = session('cart', []);
                    @endphp

                    <div class="mb-16">
                        <h6 class="mb-2">Products</h6>
                        <ul class="list-group mb-3">
                            @forelse($cartItems as $item)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{-- Cột trái: ảnh + tên + số lượng --}}
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('image/shoplist/' . $item['image_url']) }}"
                                        alt="{{ $item['name'] }}"
                                        width="48"
                                        height="48"
                                        class="me-3 rounded border" />

                                    <div>
                                        <div class="fw-500">{{ $item['name'] }}</div>
                                        <div class="text-muted small">
                                            x <span class="preview-number" data-product-id="{{ $item['product_id'] }}">{{ $item['quantity'] }}</span>
                                        </div>
                                    </div>
                                </div>

                                {{-- Cột phải: thành tiền --}}
                                <div>
                                    <p class="fw-500 mb-0 subtotal" style="margin-left: 20px;">${{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                                </div>
                            </li>
                            @empty
                            <li class="list-group-item text-muted">No products in cart.</li>
                            @endforelse
                        </ul>

                    </div>

                    <div class="bottom-box">
                        <div class="title-price mb-16">
                            <h6>Subtotal</h6>
                            <h6 class="light-gray" id="subtotal-value">${{ number_format($total, 2) }}</h6>
                        </div>

                        <div class="hr-line mb-16"></div>

                        {{-- Ẩn phí & giảm giá để JS xử lý --}}
                        <div style="display:none">
                            <span id="shipping-value">{{ $shipping }}</span>
                            <span id="discount-value">{{ $discount }}</span>
                        </div>

                        <div class="title-price mb-16">
                            <h5 class="color-primary">TOTAL</h5>
                            <h5 class="color-primary" id="total-value">${{ number_format($grandTotal, 2) }}</h5>
                        </div>

                        <div class="hr-line mb-16"></div>
                        <div class="text-end">
                            <a href="{{ url('template/user/shop/checkout') }}" id="proceed-checkout-btn" class="cus-btn active-btn">PROCEED TO CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<script src="{{asset('user')}}/js/cart.js"></script>


@endsection