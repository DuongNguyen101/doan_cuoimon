@extends('layout.user')
@section('content')

<!-- HERO BANNER START -->
@push('scripts')
    {{-- script ở trên --}}
@endpush
<section class="hero-banner py-24">
    <div class="container-fluid">
        <div class="row row-gap-3">
            <div class="col-xl-8 col-lg-12">
                <div class="banner-right">
                    <div class="banner-content-right">
                        <div class="text-box">
                            <h6 class="color-ter mb-32 d-sm-block d-none">NEW ARRIVALS</h6>
                            <h2 class="white fw-600 mb-8">Premium Dry Spices <br> <span class="color-ter">Authentic&nbsp;</span>Vietnamese Flavor </h2>
                            <h6 class="white mb-32">Limited Time: Online Only!</h6>
                            <a href="{{url('template/user/shop/category/1')}}" class="cus-btn-3 sec">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="d-xl-block d-sm-flex gap-16">
                    <div class="banner-right mb-16">
                        <div class="banner-content-right v-2">
                            <div class="text-box">
                                <h5 class="fw-500 mb-16"><p class="white" style="font-size: 19px">Dry Spices<br> <span class="color-ter">Rich Flavor&nbsp;</span>for Every Meal</p></h5>
                                <p class="white fw-500">Today Only: Online Exclusive!</p>
                            </div>
                        </div>
                    </div>
                    <div class="banner-right">
                        <div class="banner-content-right v-3">
                            <div class="text-box">
                                <h5 class="fw-500 mb-16"><p class="white" style="font-size: 19px">Organic Spices <br> <span class="color-ter">Flavorful &nbsp;</span>Herbs & Seasoning Mix</p></h5>
                                <p class="white fw-500">Freshly Packed – Limited Stock!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HERO BANNER END -->

<!-- Product Categories Start -->
<div class="categories-sec py-24">
    <div class="container-fluid">
        <div class="row">
            <div class="categories-wrapper d-flex flex-wrap gap-4">
                @foreach ($categories as $category)
                @php
                $firstProduct = $category->products->first();
                @endphp
                <a href="{{ route('shop.category', ['id' => $category->category_id]) }}" class="category-block text-center">
                    <div class="image-box mb-2">
                        @if ($firstProduct)
                        <img src="{{ asset('image/shoplist/' . $firstProduct->image_url) }}"
                            alt="{{ $category->name }}"
                            style="width: 100px; height:auto; object-fit: cover; border-radius: 50%;">
                        @endif
                    </div>
                    <p class="fw-500 mb-1">{{ $category->name }}</p>
                    <p class="dark-gray">{{ $category->products_count }} Product</p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Product Categories End -->

<!-- Featured Product Start -->
<section class="featured-product-sec py-40 bg-lightest-gray">
    <div class="container-fluid">
        <div class="row row-gap-3">
            <div class="col-xl-3">
                <a href="#" class="main-card text-center">
                    <h4 class="fw-500 white mb-32">Special Offer</h4>
                    <div class="image mb-32">
                        <img src="{{ url('/image/shoplist/bay-leaves-no-phong.png') }}" alt="">
                    </div>
                    <h5 class="fw-500 white mb-20 text-center">Aero Control Pro Joysticks</h5>
                    <h5 class="fw-500 white text-center">$6.5</h5>
                </a>
            </div>
            <div class="col-xl-9 d-flex flex-column h-100">
                <div class="top-bar mb-16">
                    <h5>Feature Products</h5>
                </div>
                <div class="tab-content" id="myProductContent">
                    <div class="tab-pane fade show active" id="all-product" role="tabpanel" aria-labelledby="all-product-tab">
                        <div class="row row-gap-3 align-items-stretch">
                            @foreach ($featuredProducts->where('category_id', 1) as $product)
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 d-flex">
                                <div class="featured-product-card bg-white br-10 shadow-sm h-100 d-flex flex-column w-100">
                                    {{-- Image Box --}}
                                    <div class="image-box position-relative" style="aspect-ratio: 4/3; overflow: hidden;">
                                        <a href="{{ route('shopdetail', $product->product_id) }}">
                                            <img
                                                src="{{ asset('image/shoplist/' . $product->image_url) }}"
                                                class="w-100 h-100 object-fit-cover"
                                                alt="{{ $product->name }}">
                                        </a>
                                    </div>

                                    {{-- Content --}}
                                    <div class="product-desc d-flex flex-column flex-grow-1 p-3">
                                        <h6 class="product-title mb-2 text-dark fw-semibold">
                                            <a href="{{ route('shopdetail', $product->product_id) }}" class="text-decoration-none text-dark">
                                                {{ Str::limit($product->name, 45) }}
                                            </a>
                                        </h6>
                                            {!! Str::limit($product->short_description, 150) !!}
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <div class="text-warning">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <=round($product->reviews_avg_rating ?? 0))
                                                    ★
                                                    @else
                                                    <span class="text-muted">★</span>
                                                    @endif
                                                    @endfor
                                            </div>
                                            <div class="text-muted small">
                                                ({{ $product->reviews_count ?? 0 }})
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <h6>
                                               
                                                &nbsp;&nbsp;${{ number_format($product->price, 2) }}
                                            </h6>
                                        </div>
                                        <a href="{{ route('cart.add', $product->product_id) }}"
                                            class="cus-btn-2 w-100 text-center mt-auto btn-add-to-cart"
                                            data-id="{{ $product->product_id }}">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Featured Product End -->

<!-- Popular Product Start -->
<section class="popular-product bg-lightest-gray pt-24 pb-40">
    <div class="container-fluid">
        <div class="top-bar mb-16">
            <h5>Popular Products</h5>
        </div>
        <div class="tab-content" id="myProductContent">
            <div class="tab-pane fa de show active" id="all-product" role="tabpanel" aria-labelledby="all-product-tab">
                <div class="row row-gap-3">
                    @foreach ($featuredProducts2->where('category_id', 2) as $product)
                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-6 d-flex">
                        <div class="featured-product-card bg-white br-10 h-100 d-flex flex-column w-100">
                            <div class="image-box mb-16" style="height: 300px; overflow: hidden;">
                                <a href="{{ route('shopdetail', $product->product_id) }}">
                                    <img src="{{ asset('image/shoplist/' . $product->image_url) }}"
                                        class="product-image w-100 h-100 object-fit-cover" alt="{{ $product->name }}">
                                </a>
                            </div>
                            <div class="product-desc d-flex flex-column flex-grow-1">
                                <h6 class="product-title mb-8">
                                    <a href="{{ route('shopdetail', $product->product_id) }}">{{ $product->name }}</a>
                                </h6>
                                <div class="text mb-12 flex-grow-1">
                                    <p class="light-gray" style="min-height: 72px;">{{ Str::limit($product->short_description, 150) }}</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="text-warning">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <=round($product->reviews_avg_rating ?? 0))
                                            ★
                                            @else
                                            <span class="text-muted">★</span>
                                            @endif
                                            @endfor
                                    </div>
                                    <div class="text-muted small">
                                        ({{ $product->reviews_count ?? 0 }})
                                    </div>
                                </div>
                                <div class="mb-16">
                                    <h6>
                                       
                                        &nbsp;&nbsp;${{ number_format($product->price, 2) }}
                                    </h6>
                                </div>
                                <a href="{{ route('cart.add', $product->product_id) }}" class="cus-btn-2 w-100 text-center mt-auto">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Popular Product End -->

<!-- Inner Banner Start -->
<section class="inner-banner">
    <div class="container-fluid">
        <div class="inner-content">
            <div class="inner-text">
                <h2 class="white">Big Saving Await! <br> <span class="color-ter">Shop Now</span>&nbsp;for Unbeatable Deals!</h2>
            </div>
            <div class="inner-image">
                <img src="{{ asset('image/shoplist/garlic-powder-no-phong.png') }}" alt="" width="177px" height="auto">
            </div>
            <div class="inner-image-2">
                <img src="{{url('user')}}/media/images/banner-image-2.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Inner Banner End -->

<!-- Recommended Product Start -->
<section class="recommended-product bg-lightest-gray py-40">
    <div class="container-fluid">
        <div class="top-bar mb-16">
            <h5>Recommended Products</h5>
        </div>
        <div class="row row-gap-3">
            @foreach ($featuredProducts3->where('category_id', 5) as $product)
            <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-6 d-flex">
                <div class="featured-product-card bg-white br-10 h-100 d-flex flex-column w-100">
                    <div class="image-box mb-16" style="height: 289px; overflow: hidden;">
                        <a href="{{ route('shopdetail', $product->product_id) }}">
                            <img src="{{ asset('image/shoplist/' . $product->image_url) }}"
                                class="product-image w-100 h-100 object-fit-cover" alt="{{ $product->name }}">
                        </a>
                    </div>
                    <div class="product-desc d-flex flex-column flex-grow-1">
                        <h6 class="product-title mb-8">
                            <a href="{{ route('shopdetail', $product->product_id) }}">{{ $product->name }}</a>
                        </h6>
                        <div class="text mb-12 flex-grow-1">
                            {!! Str::limit($product->short_description, 150) !!}
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="text-warning">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <=round($product->reviews_avg_rating ?? 0))
                                    ★
                                    @else
                                    <span class="text-muted">★</span>
                                    @endif
                                    @endfor
                            </div>
                            <div class="text-muted small">
                                ({{ $product->reviews_count ?? 0 }})
                            </div>
                        </div>
                        <div class="mb-16">
                            <h6>
                                &nbsp;&nbsp;${{ number_format($product->price, 2) }}
                            </h6>
                        </div>
                        <a href="{{ route('cart.add', $product->product_id) }}" class="cus-btn-2 w-100 text-center mt-auto">Add to Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Recommended Product End -->

<!-- Brand Slider Start -->
<div class="brand-sec">
    <div class="brand-slider">
        <div class="brand-block">
            <img src="{{asset('image/homepage/background-1.png')}}" alt="">
        </div>
        <div class="brand-block">
            <img src="{{asset('image/homepage/background-2.png')}}" alt="">
        </div>
        <div class="brand-block">
            <img src="{{asset('image/homepage/background-3.png')}}" alt="">
        </div>
        <div class="brand-block">
            <img src="{{asset('image/homepage/background-4.png')}}" alt="">
        </div>
        <div class="brand-block">
            <img src="{{asset('image/homepage/background-5.png')}}" alt="">
        </div>
        <div class="brand-block">
            <img src="{{asset('image/homepage/background-6.png')}}" alt="">
        </div>
        <div class="brand-block">
            <img src="{{asset('image/homepage/background-1.png')}}" alt="">
        </div>
        <div class="brand-block">
            <img src="{{asset('image/homepage/background-2.png')}}" alt="">
        </div>
        <div class="brand-block">
            <img src="{{asset('image/homepage/background-3.png')}}" alt="">
        </div>
        <div class="brand-block">
            <img src="{{asset('image/homepage/background-4.png')}}" alt="">
        </div>
        <div class="brand-block">
            <img src="{{asset('image/homepage/background-5.png')}}" alt="">
        </div>
        <div class="brand-block">
            <img src="{{asset('image/homepage/background-6.png')}}" alt="">
        </div>
    </div>
</div>
<!-- Brand Slider End -->

<!-- Blog Section Start -->
<div class="blog-slider" data-parent="blog-slider" style="margin: 20px;">
    @foreach($latestNews->take(6) as $news)
        <a href="{{ url('template/user/blog/blog-detail/' . $news->news_id) }}" class="blog-block bg-white">
            <div class="blog-image" style="width: 100%; height: 210px; overflow: hidden;">
                <img src="{{ asset('image/shoplist/' . $news->image_url) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="blog-content">
                <p class="mb-16 fw-500 dark-black">{{ \Carbon\Carbon::parse($news->created_at)->format('d F, Y') }}</p>
                <h6 class="mb-16 fw-600">{{ Str::limit($news->title, 70) }}</h6>
                <p class="light-gray mb-32">{{ Str::limit(strip_tags($news->content), 100) }}</p>
                <div class="cus-btn-arrow">Read More
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                        <path d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                            stroke="#0C0C0D" stroke-width="2" />
                    </svg>
                </div>
            </div>
        </a>
    @endforeach
</div>

<!-- Blog Section End -->
 @if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toastHTML = `
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center shadow" role="alert" style="min-width: 300px;">
            <svg xmlns="http://www.w3.org/2000/svg" class="bi flex-shrink-0 me-2" width="24" height="24" fill="currentColor" viewBox="0 0 16 16" role="img" aria-label="Success:">
                <path d="M16 8A8 8 0 11.001 8a8 8 0 0115.998 0zM7.002 11a.5.5 0 00.71.04L11.03 8.06a.5.5 0 00-.708-.708L7.5 9.793 5.854 8.146a.5.5 0 10-.708.708l1.856 1.854z"/>
            </svg>
            <div>{{ session('success') }}</div>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        `;
        document.getElementById('toast-alert').innerHTML = toastHTML;

        setTimeout(() => {
            const alert = bootstrap.Alert.getOrCreateInstance(document.querySelector('#toast-alert .alert'));
            alert.close();
        }, 4000);
    });
</script>
@endif

<div id="toast-alert" class="position-fixed top-0 end-0 p-3" style="z-index: 1055;">
    {{-- Thông báo sẽ được chèn bằng JS --}}
</div>
@endsection
