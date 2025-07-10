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
                                <th>Stock</th>
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
                                                <img src="{{ asset('image/shoplist/' . $item['image_url']) }}" alt="{{ $item['name'] }}" width="64px" height="auto" class="rounded">
                                            </a>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">
                                                <a href="{{ route('shopdetail', $productId) }}">{{ $item['name'] }}</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>

                                {{-- 2. Stock --}}
                                <td>
                                    <span class="text-muted small" style="margin-left: 20px;">In stock: {{ $item['stock'] }}</span>
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
                                            class="form-control text-center"
                                            style="width: 80px;"
                                            data-product-id="{{ $productId }}" />
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
      <div class="bottom-box">
        <div class="title-price mb-16">
          <h6>Subtotal</h6>
          <h6 class="light-gray" id="subtotal-value">${{ number_format($total,2) }}</h6>
        </div>
        <div class="hr-line mb-16"></div>

        {{-- Ẩn phí & giảm giá để JS dùng --}}
        <div style="display:none">
          <span id="shipping-value">{{ $shipping }}</span>
          <span id="discount-value">{{ $discount }}</span>
        </div>

        <div class="title-price mb-16">
          <h5 class="color-primary">TOTAL</h5>
          <h5 class="color-primary" id="total-value">${{ number_format($grandTotal,2) }}</h5>
        </div>
        <div class="hr-line mb-16"></div>
        <div class="text-end">
          <a href="checkout.html" class="cus-btn active-btn">PROCEED TO CHECKOUT</a>
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