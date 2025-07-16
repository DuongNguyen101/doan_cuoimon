@extends('template.user.shop.shop-list')

@section('list-products')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ session('info') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="row">
    @foreach ($products as $product)
        @php
            $avgRating = round($product->reviews_avg_rating ?? 0);
            $reviewCount = $product->reviews_count ?? 0;
        @endphp

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('image/shoplist/' . $product->image_url) }}"
                    class="card-img-top"
                    alt="{{ $product->name }}"
                    style="height: 350px; object-fit: cover;">

                <div class="card-body d-flex flex-column">
                    <h6 class="card-title fw-bold">{{ $product->name }}</h6>
                        {!! $product->short_description !!}

                    {{-- Hiển thị sao đánh giá và số lượng --}}
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="text-warning">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $avgRating)
                                    ★
                                @else
                                    <span class="text-muted">★</span>
                                @endif
                            @endfor
                        </span>
                        <span class="text-muted small">({{ $reviewCount }})</span>
                    </div>

                    {{-- Giá và các nút hành động --}}
                    <div class="mt-auto">
                        <span class="fw-bold text-success d-block mb-2">
                            ${{ number_format($product->price, 2) }}
                        </span>
                        <div class="d-flex gap-2">
                            <a href="{{ route('shopdetail', ['id' => $product->product_id]) }}"
                                class="btn btn-sm btn-outline-success flex-fill text-center">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('wishlist.add', $product->product_id) }}"
                                class="btn btn-sm btn-outline-danger flex-fill text-center">
                                <i class="fas fa-heart"></i>
                            </a>
                            <a href="{{ route('cart.add', $product->product_id) }}" 
                                class="btn btn-sm btn-outline-primary flex-fill text-center">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        {{-- Previous --}}
        <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $products->previousPageUrl() ?? '#' }}">Previous</a>
        </li>

        {{-- Page numbers --}}
        @for ($i = 1; $i <= $products->lastPage(); $i++)
            <li class="page-item {{ $products->currentPage() == $i ? 'active' : '' }}">
                <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
            </li>
        @endfor

        {{-- Next --}}
        <li class="page-item {{ !$products->hasMorePages() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $products->nextPageUrl() ?? '#' }}">Next</a>
        </li>
    </ul>
</nav>

</div>
@endsection
