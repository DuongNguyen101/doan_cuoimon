@extends('layout.user')

@section('content')

<section class="title-banner">
    <div class="container-fluid">
        <div class="banner-wrapper">
            <h1 class="dark-black fw-600">My Wishlist</h1>
        </div>
    </div>
</section>

<section class="cart py-40">
    <div class="container-fluid">

        {{-- Hiển thị thông báo --}}
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('info'))
            <div class="alert alert-info">{{ session('info') }}</div>
        @endif

        <div class="d-lg-block d-none">
            <table class="cart-table wishlist mb-16">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Unit Price</th>
                        <th>Date Added</th>
                        <th>Available</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th></th>
                    </tr>
                </thead>
            </table>

            <table class="cart-table">
                <tbody>
                    @php
                        $wishlist = session('wishlist', []);
                    @endphp

                    @if(count($wishlist) > 0)
                        @foreach($wishlist as $id => $item)
                            @php $quantity = $item['quantity'] ?? 1; @endphp
                            <tr class="table-row wishlist-row">
                                <td class="pd">
                                    <div class="product-detail-box">
                                        <a href="{{ route('wishlist.remove', $id) }}" class="h5 dark-black">
                                            <i class="fa-solid fa-xmark"></i>
                                        </a>
                                        <div class="img-block">
                                            <a href="{{ route('shopdetail', ['id' => $item['product_id'] ?? 0]) }}">
                                                <img src="{{ asset('image/shoplist/' . ($item['image_url'] ?? 'default.jpg')) }}" alt="" style="width: 80px">
                                            </a>
                                        </div>
                                        <div class="d-block text-start">
                                            <h6>
                                                <a href="{{ route('shopdetail', ['id' => $item['product_id'] ?? 0]) }}">
                                                    {{ $item['name'] ?? 'No name' }}
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td><p class="fw-500">${{ number_format($item['price'] ?? 0, 2) }}</p></td>
                                <td><p class="fw-500">{{ $item['added_at'] ?? now()->format('d M, Y') }}</p></td>
                                <td><p class="fw-500 stock-label m-auto">In Stock</p></td>
                                <td>
                                    <div class="quantity-controller quantity-wrap">
                                        <input class="decrement" type="button" value="-">
                                        <input type="text" name="quantity" value="{{ $quantity }}" maxlength="2" size="1" class="number">
                                        <input class="increment" type="button" value="+">
                                    </div>
                                </td>
                                <td><p class="fw-500">${{ number_format(($item['price'] ?? 0) * $quantity, 2) }}</p></td>
                                <td>
                                    <a href="{{ route('cart.add', ['id' => $item['product_id'] ?? 0, 'quantity' => $quantity]) }}" class="cus-btn-3">Add to Cart</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="text-center py-5">Your wishlist is empty.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
