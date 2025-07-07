@extends('layout.user')
@section('content')
<!-- HERO BANNER START -->
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
                            <a href="shop-list-1.html" class="cus-btn-3 sec">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="d-xl-block d-sm-flex gap-16">
                    <div class="banner-right mb-16">
                        <div class="banner-content-right v-2">
                            <div class="text-box">
                                <h5 class="fw-500 mb-16"><a href="shop-detail.html" class="white">Dry Spices<br> <span class="color-ter">Rich Flavor&nbsp;</span>for Every Meal</a></h5>
                                <p class="white fw-500">Today Only: Online Exclusive!</p>
                            </div>
                        </div>
                    </div>
                    <div class="banner-right">
                        <div class="banner-content-right v-3">
                            <div class="text-box">
                                <h5 class="fw-500 mb-16"><a href="shop-detail.html" class="white">Organic Spices <br> <span class="color-ter">Flavorful &nbsp;</span>Herbs & Seasoning Mix</a></h5>
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
                            style="width: 100px; height:85px; object-fit: cover; border-radius: 50%;">
                        @else
                        <img src="{{ asset('images/default-category.png') }}"
                            alt="No Image"
                            style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
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
                <a href="shop-grid-2.html" class="main-card text-center">
                    <h4 class="fw-500 white mb-32">Special Offer</h4>
                    <div class="image mb-32">
                        <img src="{{ url('/image/shoplist/bay-leaves-no-phong.png') }}" alt="">
                    </div>
                    <h5 class="fw-500 white mb-20 text-center">Aero Control Pro Joysticks</h5>
                    <h5 class="fw-500 white text-center">$120.00</h5>
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
                                        <span class="sale-label position-absolute top-0 start-0 m-2">-12%</span>
                                        <a href="{{ route('shopdetail', $product->product_id) }}">
                                            <img
                                                src="{{ asset('image/shoplist/' . $product->image_url) }}"
                                                class="w-100 h-100 object-fit-cover"
                                                alt="{{ $product->name }}">
                                        </a>
                                        <div class="side-icons position-absolute top-0 end-0 m-2">
                                            <ul class="list-unstyled d-flex flex-column gap-2">
                                                <li><a href="#"><img src="{{ url('user/media/icons/heart.png') }}" alt="Wishlist"></a></li>
                                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#productQuickView"><img src="{{ url('user/media/icons/eye.png') }}" alt="Quick View"></a></li>
                                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#comparepopup"><img src="{{ url('user/media/icons/compare.png') }}" alt="Compare"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    {{-- Content --}}
                                    <div class="product-desc d-flex flex-column flex-grow-1 p-3">
                                        <h6 class="product-title mb-2 text-dark fw-semibold">
                                            <a href="{{ route('shopdetail', $product->product_id) }}" class="text-decoration-none text-dark">
                                                {{ Str::limit($product->name, 45) }}
                                            </a>
                                        </h6>
                                        <p class="light-gray small flex-grow-1 mb-3" style="min-height: 72px;">
                                            {{ Str::limit($product->short_description, 150) }}
                                        </p>
                                        <div class="mb-3">
                                            <h6 class="fw-bold mb-0">
                                                <span class="text-decoration-line-through light-gray me-2">
                                                    ${{ number_format($product->price * 1.1, 2) }}
                                                </span>
                                                <span class="text-danger">
                                                    ${{ number_format($product->price, 2) }}
                                                </span>
                                            </h6>
                                        </div>
                                        <a href="#" class="cus-btn-2 w-100 text-center mt-auto">Add to Cart</a>
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
                                <span class="sale-label">-12%</span>
                                <a href="{{ route('shopdetail', $product->product_id) }}">
                                    <img src="{{ asset('image/shoplist/' . $product->image_url) }}"
                                        class="product-image w-100 h-100 object-fit-cover" alt="{{ $product->name }}">
                                </a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li><a href="javascript:void(0)"><img src="{{ url('user') }}/media/icons/heart.png" alt="Wishlist"></a></li>
                                        <li><a href="javascript:void(0)" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView"><img src="{{ url('user') }}/media/icons/eye.png" alt="Quick View"></a></li>
                                        <li><a href="javascript:void(0)" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup"><img src="{{ url('user') }}/media/icons/compare.png" alt="Compare"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc d-flex flex-column flex-grow-1">
                                <h6 class="product-title mb-8">
                                    <a href="{{ route('shopdetail', $product->product_id) }}">{{ $product->name }}</a>
                                </h6>
                                <div class="text mb-12 flex-grow-1">
                                    <p class="light-gray" style="min-height: 72px;">{{ Str::limit($product->short_description, 150) }}</p>
                                </div>
                                <div class="mb-16">
                                    <h6>
                                        <span class="text-decoration-line-through light-gray">${{ number_format($product->price * 1.1, 2) }}</span>
                                        &nbsp;&nbsp;${{ number_format($product->price, 2) }}
                                    </h6>
                                </div>
                                <a href="javascript:void(0)" class="cus-btn-2 w-100 mt-auto">Add to Cart</a>
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
                        <span class="sale-label">-12%</span>
                        <a href="{{ route('shopdetail', $product->product_id) }}">
                            <img src="{{ asset('image/shoplist/' . $product->image_url) }}"
                                class="product-image w-100 h-100 object-fit-cover" alt="{{ $product->name }}">
                        </a>
                        <div class="side-icons">
                            <ul class="list-unstyled">
                                <li><a href="javascript:void(0)"><img src="{{ url('user') }}/media/icons/heart.png" alt="Wishlist"></a></li>
                                <li><a href="javascript:void(0)" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView"><img src="{{ url('user') }}/media/icons/eye.png" alt="Quick View"></a></li>
                                <li><a href="javascript:void(0)" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup"><img src="{{ url('user') }}/media/icons/compare.png" alt="Compare"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-desc d-flex flex-column flex-grow-1">
                        <h6 class="product-title mb-8">
                            <a href="{{ route('shopdetail', $product->product_id) }}">{{ $product->name }}</a>
                        </h6>
                        <div class="text mb-12 flex-grow-1">
                            <p class="light-gray" style="min-height: 72px;">{{ Str::limit($product->short_description, 150) }}</p>
                        </div>
                        <div class="mb-16">
                            <h6>
                                <span class="text-decoration-line-through light-gray">${{ number_format($product->price * 1.1, 2) }}</span>
                                &nbsp;&nbsp;${{ number_format($product->price, 2) }}
                            </h6>
                        </div>
                        <a href="javascript:void(0)" class="cus-btn-2 w-100 mt-auto">Add to Cart</a>
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
<section class="blog-section bg-lightest-gray py-40">
    <div class="container-fluid">
        <div class="top-bar mb-16">
            <h5>Latest Blogs</h5>
            <div class="slider-arrow">
                <button class="arrow btn-prev" data-slide="blog-slider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                        <path d="M12.8057 23C12.8057 20 10.0057 16 6.80566 16M6.80566 16C8.639 16 12.8057 15 12.8057 9M6.80566 16H25.8057" stroke="#1B1918" stroke-width="2"></path>
                    </svg>
                </button>
                <button class="arrow btn-next" data-slide="blog-slider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M19.3545 23C19.3545 20 22.1545 16 25.3545 16M25.3545 16C23.5212 16 19.3545 15 19.3545 9M25.3545 16H6.35449" stroke="#1B1918" stroke-width="2"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="blog-slider" data-parent="blog-slider">
            <a href="blog-detail.html" class="blog-block bg-white">
                <div class="blog-image">
                    <img src="{{url('user')}}/media/blogs/blog-1.png" alt="">
                </div>
                <div class="blog-content">
                    <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                    <h6 class="mb-16 fw-600">Headphone Heroes: Elevating Your Experience Quality Sound</h6>
                    <div class="d-flex align-items-center justify-content-between mb-16">
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/users/user-1.png" alt="">
                            <p class="light-gray">By <span class="color-primary">Emily</span></p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-1.png" alt="">
                            <p class="light-gray">Comments</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-2.png" alt="">
                            <p class="light-gray">Views</p>
                        </div>
                    </div>
                    <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis aliquet amet vestibulum maecenas ac.</p>
                    <div class="cus-btn-arrow">Read More
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                            <path d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                stroke="#0C0C0D" stroke-width="2" />
                        </svg>
                    </div>
                </div>
            </a>
            <a href="blog-detail.html" class="blog-block bg-white">
                <div class="blog-image">
                    <img src="{{url('user')}}/media/blogs/blog-2.png" alt="">
                </div>
                <div class="blog-content">
                    <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                    <h6 class="mb-16 fw-600">Gizmo Galore: Exploring the Coolest Gadgets on the Market</h6>
                    <div class="d-flex align-items-center justify-content-between mb-16">
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/users/user-1.png" alt="">
                            <p class="light-gray">By <span class="color-primary">Emily</span></p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-1.png" alt="">
                            <p class="light-gray">Comments</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-2.png" alt="">
                            <p class="light-gray">Views</p>
                        </div>
                    </div>
                    <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis aliquet amet vestibulum maecenas ac.</p>
                    <div class="cus-btn-arrow">Read More
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                            <path d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                stroke="#0C0C0D" stroke-width="2" />
                        </svg>
                    </div>
                </div>
            </a>
            <a href="blog-detail.html" class="blog-block bg-white">
                <div class="blog-image">
                    <img src="{{url('user')}}/media/blogs/blog-3.png" alt="">
                </div>
                <div class="blog-content">
                    <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                    <h6 class="mb-16 fw-600">The 4K Perspective: Gaining Insights into Ultra HD Entertainment</h6>
                    <div class="d-flex align-items-center justify-content-between mb-16">
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/users/user-1.png" alt="">
                            <p class="light-gray">By <span class="color-primary">Emily</span></p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-1.png" alt="">
                            <p class="light-gray">Comments</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-2.png" alt="">
                            <p class="light-gray">Views</p>
                        </div>
                    </div>
                    <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis aliquet amet vestibulum maecenas ac.</p>
                    <div class="cus-btn-arrow">Read More
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                            <path d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                stroke="#0C0C0D" stroke-width="2" />
                        </svg>
                    </div>
                </div>
            </a>
            <a href="blog-detail.html" class="blog-block bg-white">
                <div class="blog-image">
                    <img src="{{url('user')}}/media/blogs/blog-4.png" alt="">
                </div>
                <div class="blog-content">
                    <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                    <h6 class="mb-16 fw-600">Gaming Grasp: Navigating the World of Game Controllers</h6>
                    <div class="d-flex align-items-center justify-content-between mb-16">
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/users/user-1.png" alt="">
                            <p class="light-gray">By <span class="color-primary">Emily</span></p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-1.png" alt="">
                            <p class="light-gray">Comments</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-2.png" alt="">
                            <p class="light-gray">Views</p>
                        </div>
                    </div>
                    <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis aliquet amet vestibulum maecenas ac.</p>
                    <div class="cus-btn-arrow">Read More
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                            <path d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                stroke="#0C0C0D" stroke-width="2" />
                        </svg>
                    </div>
                </div>
            </a>
            <a href="blog-detail.html" class="blog-block bg-white">
                <div class="blog-image">
                    <img src="{{url('user')}}/media/blogs/blog-1.png" alt="">
                </div>
                <div class="blog-content">
                    <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                    <h6 class="mb-16 fw-600">Headphone Heroes: Elevating Your Experience Quality Sound</h6>
                    <div class="d-flex align-items-center justify-content-between mb-16">
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/users/user-1.png" alt="">
                            <p class="light-gray">By <span class="color-primary">Emily</span></p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-1.png" alt="">
                            <p class="light-gray">Comments</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-2.png" alt="">
                            <p class="light-gray">Views</p>
                        </div>
                    </div>
                    <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis aliquet amet vestibulum maecenas ac.</p>
                    <div class="cus-btn-arrow">Read More
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                            <path d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                stroke="#0C0C0D" stroke-width="2" />
                        </svg>
                    </div>
                </div>
            </a>
            <a href="blog-detail.html" class="blog-block bg-white">
                <div class="blog-image">
                    <img src="{{url('user')}}/media/blogs/blog-2.png" alt="">
                </div>
                <div class="blog-content">
                    <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                    <h6 class="mb-16 fw-600">Gizmo Galore: Exploring the Coolest Gadgets on the Market</h6>
                    <div class="d-flex align-items-center justify-content-between mb-16">
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/users/user-1.png" alt="">
                            <p class="light-gray">By <span class="color-primary">Emily</span></p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-1.png" alt="">
                            <p class="light-gray">Comments</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-2.png" alt="">
                            <p class="light-gray">Views</p>
                        </div>
                    </div>
                    <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis aliquet amet vestibulum maecenas ac.</p>
                    <div class="cus-btn-arrow">Read More
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                            <path d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                stroke="#0C0C0D" stroke-width="2" />
                        </svg>
                    </div>
                </div>
            </a>
            <a href="blog-detail.html" class="blog-block bg-white">
                <div class="blog-image">
                    <img src="{{url('user')}}/media/blogs/blog-3.png" alt="">
                </div>
                <div class="blog-content">
                    <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                    <h6 class="mb-16 fw-600">The 4K Perspective: Gaining Insights into Ultra HD Entertainment</h6>
                    <div class="d-flex align-items-center justify-content-between mb-16">
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/users/user-1.png" alt="">
                            <p class="light-gray">By <span class="color-primary">Emily</span></p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-1.png" alt="">
                            <p class="light-gray">Comments</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-2.png" alt="">
                            <p class="light-gray">Views</p>
                        </div>
                    </div>
                    <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis aliquet amet vestibulum maecenas ac.</p>
                    <div class="cus-btn-arrow">Read More
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                            <path d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                stroke="#0C0C0D" stroke-width="2" />
                        </svg>
                    </div>
                </div>
            </a>
            <a href="blog-detail.html" class="blog-block bg-white">
                <div class="blog-image">
                    <img src="{{url('user')}}/media/blogs/blog-4.png" alt="">
                </div>
                <div class="blog-content">
                    <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                    <h6 class="mb-16 fw-600">Gaming Grasp: Navigating the World of Game Controllers</h6>
                    <div class="d-flex align-items-center justify-content-between mb-16">
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/users/user-1.png" alt="">
                            <p class="light-gray">By <span class="color-primary">Emily</span></p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-1.png" alt="">
                            <p class="light-gray">Comments</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{url('user')}}/media/icons/icon-2.png" alt="">
                            <p class="light-gray">Views</p>
                        </div>
                    </div>
                    <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis aliquet amet vestibulum maecenas ac.</p>
                    <div class="cus-btn-arrow">Read More
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                            <path d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                stroke="#0C0C0D" stroke-width="2" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- Blog Section End -->

@endsection