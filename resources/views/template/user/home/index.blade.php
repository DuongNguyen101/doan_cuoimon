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
                            <h2 class="white fw-600 mb-8">4K LCD <br> <span class="color-ter">Quantum&nbsp;</span>Vision LCD</h2>
                            <h6 class="white mb-32">Limited Time: Online Only!</h6>
                            <a href="shop-list-1.html" class="cus-btn-3 sec">Shop Now</a>
                        </div>
                        <div class="image-area">
                            <img src="{{url('user')}}/media/banner/banner-sub-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="d-xl-block d-sm-flex gap-16">
                    <div class="banner-right mb-16">
                        <div class="banner-content-right v-2">
                            <div class="text-box">
                                <h5 class="fw-500 mb-16"><a href="shop-detail.html" class="white">Mobile <br> <span class="color-ter">Nexus&nbsp;</span>Mobile Pro 256GB</a></h5>
                                <p class="white fw-500">Limited Time: Online Only!</p>
                            </div>
                            <div class="image-area">
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/banner/banner-sub-2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-right">
                        <div class="banner-content-right v-3">
                            <div class="text-box">
                                <h5 class="fw-500 mb-16"><a href="shop-detail.html" class="white">iPadMini <br> <span class="color-ter">10 Inch&nbsp;</span>iPad Mini Pro</a></h5>
                                <p class="white fw-500">Limited Time: Online Only!</p>
                            </div>
                            <div class="image-area">
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/banner/banner-sub-3.png" alt=""></a>
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
            <div class="categories-wrapper">
                <a href="shop-grid-sidebar-1.html" class="category-block">
                    <div class="image-box mb-12">
                        <img src="{{url('user')}}/media/images/tab-1.png" alt="">
                    </div>
                    <p class="fw-500 mb-4p">Headphones</p>
                    <p class="dark-gray">8 Product</p>
                </a>
                <a href="shop-grid-sidebar-1.html" class="category-block">
                    <div class="image-box mb-12">
                        <img src="{{url('user')}}/media/images/tab-2.png" alt="">
                    </div>
                    <p class="fw-500 mb-4p">Gaming Mouse</p>
                    <p class="dark-gray">4 Product</p>
                </a>
                <a href="shop-grid-sidebar-1.html" class="category-block">
                    <div class="image-box mb-12">
                        <img src="{{url('user')}}/media/images/tab-3.png" alt="">
                    </div>
                    <p class="fw-500 mb-4p">MacBook/PCs</p>
                    <p class="dark-gray">6 Product</p>
                </a>
                <a href="shop-grid-sidebar-1.html" class="category-block">
                    <div class="image-box mb-12">
                        <img src="{{url('user')}}/media/images/tab-4.png" alt="">
                    </div>
                    <p class="fw-500 mb-4p">RGB Keyboard</p>
                    <p class="dark-gray">7 Product</p>
                </a>
                <a href="shop-grid-sidebar-1.html" class="category-block">
                    <div class="image-box mb-12">
                        <img src="{{url('user')}}/media/images/tab-5.png" alt="">
                    </div>
                    <p class="fw-500 mb-4p">Playstation</p>
                    <p class="dark-gray">8 Product</p>
                </a>
                <a href="shop-grid-sidebar-1.html" class="category-block">
                    <div class="image-box mb-12">
                        <img src="{{url('user')}}/media/images/tab-6.png" alt="">
                    </div>
                    <p class="fw-500 mb-4p">Gaming Headphones</p>
                    <p class="dark-gray">3 Product</p>
                </a>
                <a href="shop-grid-sidebar-1.html" class="category-block">
                    <div class="image-box mb-12">
                        <img src="{{url('user')}}/media/images/tab-7.png" alt="">
                    </div>
                    <p class="fw-500 mb-4p">Apple LED</p>
                    <p class="dark-gray">2 Product</p>
                </a>
                <a href="shop-grid-sidebar-1.html" class="category-block">
                    <div class="image-box mb-12">
                        <img src="{{url('user')}}/media/images/tab-8.png" alt="">
                    </div>
                    <p class="fw-500 mb-4p">Samsung Phone</p>
                    <p class="dark-gray">12 Product</p>
                </a>
                <a href="shop-grid-sidebar-1.html" class="category-block">
                    <div class="image-box mb-12">
                        <img src="{{url('user')}}/media/images/tab-10.png" alt="">
                    </div>
                    <p class="fw-500 mb-4p">Earbuds</p>
                    <p class="dark-gray">4 Product</p>
                </a>
                <a href="shop-grid-sidebar-1.html" class="category-block">
                    <div class="image-box mb-12">
                        <img src="{{url('user')}}/media/images/tab-9.png" alt="">
                    </div>
                    <p class="fw-500 mb-4p">Ipad Min</p>
                    <p class="dark-gray">8 Product</p>
                </a>
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
                        <img src="{{url('user')}}/media/products/main-image.png" alt="">
                    </div>
                    <h5 class="fw-500 white mb-20 text-center">Aero Control Pro Joysticks</h5>
                    <h5 class="fw-500 white text-center">$120.00</h5>
                </a>
            </div>
            <div class="col-xl-9">
                <div class="top-bar mb-16">
                    <h5>Feature Products</h5>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                                type="button" role="tab" aria-controls="all" aria-selected="true">All Products </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="laptop-tab" data-bs-toggle="tab" data-bs-target="#laptop" type="button"
                                role="tab" aria-controls="laptop" aria-selected="false">Laptop</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="keyboard-tab" data-bs-toggle="tab" data-bs-target="#keyboard" type="button"
                                role="tab" aria-controls="keyboard" aria-selected="false">Keyboard</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="mouse-tab" data-bs-toggle="tab" data-bs-target="#mouse" type="button"
                                role="tab" aria-controls="mouse" aria-selected="false">Mouse</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="headphone-tab" data-bs-toggle="tab" data-bs-target="#headphone" type="button"
                                role="tab" aria-controls="headphone" aria-selected="false">Headphone</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content " id="myTabContent">
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <div class="row row-gap-3">
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10 ">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-1.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Elite Audio Gear</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$85.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-2.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Bright LCD</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-4.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Nexus Mobile Pro 256GB</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 d-xxl-block d-lg-none">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-5b.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Tech Book Plus</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $1350.00</span>&nbsp;&nbsp;$$1250.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="laptop" role="tabpanel" aria-labelledby="laptop-tab">
                        <div class="row row-gap-3">
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10 ">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-1.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Elite Audio Gear</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$85.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-2.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Bright LCD</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-4.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Nexus Mobile Pro 256GB</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 d-xxl-block d-lg-none">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-5b.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Tech Book Plus</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $1350.00</span>&nbsp;&nbsp;$$1250.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="keyboard" role="tabpanel" aria-labelledby="keyboard-tab">
                        <div class="row row-gap-3">
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10 ">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-1.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Elite Audio Gear</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$85.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-2.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Bright LCD</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-4.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Nexus Mobile Pro 256GB</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 d-xxl-block d-lg-none">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-5b.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Tech Book Plus</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $1350.00</span>&nbsp;&nbsp;$$1250.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mouse" role="tabpanel" aria-labelledby="mouse-tab">
                        <div class="row row-gap-3">
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10 ">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-1.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Elite Audio Gear</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$85.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-2.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Bright LCD</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-4.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Nexus Mobile Pro 256GB</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 d-xxl-block d-lg-none">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-5b.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Tech Book Plus</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $1350.00</span>&nbsp;&nbsp;$$1250.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="headphone" role="tabpanel" aria-labelledby="headphone-tab">
                        <div class="row row-gap-3">
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10 ">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-1.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Elite Audio Gear</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$85.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-2.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Bright LCD</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-4.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Nexus Mobile Pro 256GB</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 d-xxl-block d-lg-none">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <span class="sale-label">-12%</span>
                                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-5b.png" class="product-image" alt=""></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Tech Book Plus</a></h6>
                                        <div class="text mb-12">
                                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                        </div>
                                        <div class="rating-star mb-16 bg-white">
                                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                            <h6><span class="text-decoration-line-through light-gray"> $1350.00</span>&nbsp;&nbsp;$$1250.00</h6>
                                        </div>
                                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
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
            <ul class="nav nav-tabs" id="myProduct" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-product-tab" data-bs-toggle="tab" data-bs-target="#all-product"
                        type="button" role="tab" aria-controls="all-product" aria-selected="true">All Products </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="laptop-pro-tab" data-bs-toggle="tab" data-bs-target="#laptop-pro" type="button"
                        role="tab" aria-controls="laptop-pro" aria-selected="false">Laptop</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="keyboard-pro-tab" data-bs-toggle="tab" data-bs-target="#keyboard-pro" type="button"
                        role="tab" aria-controls="keyboard-pro" aria-selected="false">Keyboard</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="mouse-pro-tab" data-bs-toggle="tab" data-bs-target="#mouse-pro" type="button"
                        role="tab" aria-controls="mouse-pro" aria-selected="false">Mouse</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="headphone-pro-tab" data-bs-toggle="tab" data-bs-target="#headphone-pro" type="button"
                        role="tab" aria-controls="headphone-pro" aria-selected="false">Headphone</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="myProductContent">
            <div class="tab-pane fa de show active" id="all-product" role="tabpanel" aria-labelledby="all-product-tab">
                <div class="row row-gap-3">
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-1b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Radiant View LCD</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-2b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Pure Bass Headphones</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-3b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Supreme Tech Phone</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-10.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Aero Pro Joysticks</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-3.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Hyper Glide Mouse</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-4b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">iPad Standard Plus</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="laptop-pro" role="tabpanel" aria-labelledby="laptop-pro-tab">
                <div class="row row-gap-3">
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-1b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Radiant View LCD</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-2b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Pure Bass Headphones</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-3b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Supreme Tech Phone</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-10.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Aero Pro Joysticks</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-3.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Hyper Glide Mouse</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-4b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">iPad Standard Plus</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="keyboard-pro" role="tabpanel" aria-labelledby="keyboard-pro-tab">
                <div class="row row-gap-3">
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-1b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Radiant View LCD</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-2b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Pure Bass Headphones</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-3b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Supreme Tech Phone</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-10.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Aero Pro Joysticks</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-3.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Hyper Glide Mouse</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-4b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">iPad Standard Plus</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="mouse-pro" role="tabpanel" aria-labelledby="mouse-pro-tab">
                <div class="row row-gap-3">
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-1b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Radiant View LCD</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-2b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Pure Bass Headphones</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-3b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Supreme Tech Phone</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-10.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Aero Pro Joysticks</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-3.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Hyper Glide Mouse</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-4b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">iPad Standard Plus</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="headphone-pro" role="tabpanel" aria-labelledby="headphone-pro-tab">
                <div class="row row-gap-3">
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-1b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Radiant View LCD</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-2b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Pure Bass Headphones</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-3b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Supreme Tech Phone</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-10.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Aero Pro Joysticks</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-3.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Hyper Glide Mouse</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-4b.png" class="product-image" alt=""></a>
                                <div class="side-icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-8"><a href="shop-detail.html">iPad Standard Plus</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-16 bg-white">
                                    <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                    <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                </div>
                                <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
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
                <img src="{{url('user')}}/media/images/banner-image-1.png" alt="">
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
            <a href="shop-grid-sidebar-1.html" class="cus-btn-arrow"> Show All
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                    <path
                        d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                        stroke="#0C0C0D" stroke-width="2" />
                </svg>
            </a>
        </div>
        <div class="row row-gap-3">
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="featured-product-card bg-white br-10">
                    <div class="image-box mb-16">
                        <span class="sale-label">-12%</span>
                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/rec-1.png" class="product-image" alt=""></a>
                        <div class="side-icons">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="wishlist.html">
                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-desc">
                        <h6 class="product-title mb-8"><a href="shop-detail.html">White Earbuds</a></h6>
                        <div class="text mb-12">
                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                        </div>
                        <div class="rating-star mb-16 bg-white">
                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                        </div>
                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="featured-product-card bg-white br-10">
                    <div class="image-box mb-16">
                        <span class="sale-label">-12%</span>
                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/rec-2.png" class="product-image" alt=""></a>
                        <div class="side-icons">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="wishlist.html">
                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-desc">
                        <h6 class="product-title mb-8"><a href="shop-detail.html">Gaming RBG Mouse</a></h6>
                        <div class="text mb-12">
                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                        </div>
                        <div class="rating-star mb-16 bg-white">
                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                        </div>
                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="featured-product-card bg-white br-10">
                    <div class="image-box mb-16">
                        <span class="sale-label">-12%</span>
                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/rec-3.png" class="product-image" alt=""></a>
                        <div class="side-icons">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="wishlist.html">
                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-desc">
                        <h6 class="product-title mb-8"><a href="shop-detail.html">Key Master Elite</a></h6>
                        <div class="text mb-12">
                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                        </div>
                        <div class="rating-star mb-16 bg-white">
                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                        </div>
                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="featured-product-card bg-white br-10">
                    <div class="image-box mb-16">
                        <span class="sale-label">-12%</span>
                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/rec-4.png" class="product-image" alt=""></a>
                        <div class="side-icons">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="wishlist.html">
                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-desc">
                        <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Sport Watch</a></h6>
                        <div class="text mb-12">
                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                        </div>
                        <div class="rating-star mb-16 bg-white">
                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                        </div>
                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="featured-product-card bg-white br-10">
                    <div class="image-box mb-16">
                        <span class="sale-label">-12%</span>
                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/rec-5.png" class="product-image" alt=""></a>
                        <div class="side-icons">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="wishlist.html">
                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-desc">
                        <h6 class="product-title mb-8"><a href="shop-detail.html">Radiant View LCD</a></h6>
                        <div class="text mb-12">
                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                        </div>
                        <div class="rating-star mb-16 bg-white">
                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                        </div>
                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="featured-product-card bg-white br-10">
                    <div class="image-box mb-16">
                        <span class="sale-label">-12%</span>
                        <a href="shop-detail.html"><img src="{{url('user')}}/media/products/rec-6.png" class="product-image" alt=""></a>
                        <div class="side-icons">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="wishlist.html">
                                        <img src="{{url('user')}}/media/icons/heart.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                        <img src="{{url('user')}}/media/icons/eye.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                        <img src="{{url('user')}}/media/icons/compare.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-desc">
                        <h6 class="product-title mb-8"><a href="shop-detail.html">Wired Head Free</a></h6>
                        <div class="text mb-12">
                            <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                        </div>
                        <div class="rating-star mb-16 bg-white">
                            <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                            <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                        </div>
                        <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Recommended Product End -->

<!-- Brand Slider Start -->
<div class="brand-sec">
    <div class="brand-slider">
        <div class="brand-block">
            <img src="{{url('user')}}/media/icons/logo-1.png" alt="">
        </div>
        <div class="brand-block">
            <img src="{{url('user')}}/media/icons/logo-2.png" alt="">
        </div>
        <div class="brand-block">
            <img src="{{url('user')}}/media/icons/logo-3.png" alt="">
        </div>
        <div class="brand-block">
            <img src="{{url('user')}}/media/icons/logo-4.png" alt="">
        </div>
        <div class="brand-block">
            <img src="{{url('user')}}/media/icons/logo-5.png" alt="">
        </div>
        <div class="brand-block">
            <img src="{{url('user')}}/media/icons/logo-6.png" alt="">
        </div>
        <div class="brand-block">
            <img src="{{url('user')}}/media/icons/logo-1.png" alt="">
        </div>
        <div class="brand-block">
            <img src="{{url('user')}}/media/icons/logo-2.png" alt="">
        </div>
        <div class="brand-block">
            <img src="{{url('user')}}/media/icons/logo-3.png" alt="">
        </div>
        <div class="brand-block">
            <img src="{{url('user')}}/media/icons/logo-4.png" alt="">
        </div>
        <div class="brand-block">
            <img src="{{url('user')}}/media/icons/logo-5.png" alt="">
        </div>
        <div class="brand-block">
            <img src="{{url('user')}}/media/icons/logo-6.png" alt="">
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

<!-- Inner Banner Start -->
<section class="inner-banner">
    <div class="container-fluid">
        <div class="inner-content v-2">
            <div class="inner-text">
                <h2 class="white"><span class="color-ter">Hurry up!</span>&nbsp;Offer ends in</h2>
            </div>
            <div class="coming-soon-cd">
                <ul class="unstyled countdown">
                    <li>
                        <h2 class="h5">365</h2>
                        <h6 class="fw-500">Days</h6>
                    </li>
                    <li>
                        <h2 class="h5">24</h2>
                        <h6 class="fw-500">Hrs</h6>
                    </li>
                    <li>
                        <h2 class="h5">60</h2>
                        <h6 class="fw-500">Min</h6>
                    </li>
                    <li>
                        <h2 class="h5">60</h2>
                        <h6 class="fw-500">Secs</h6>
                    </li>
                </ul>
            </div>
            <div class="inner-image-2">
                <img src="{{url('user')}}/media/images/banner-image-3.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Inner Banner End -->

<!-- Newsletter Start -->
<section class="newsletter-section bg-lightest-gray py-40">
    <div class="container-fluid">
        <div class="row row-gap-3">
            <div class="col-xl-6 col-lg-6">
                <div class="newsletter-container bg-white br-10">
                    <div class="newsletter-image m-auto">
                        <img src="{{url('user')}}/media/icons/mail.png" alt="">
                    </div>
                    <h3 class="dark-black mb-16 mt-24">Subscribe to our Newslatter</h3>
                    <p class="light-gray mb-24">
                        Subscribe now to unlock a 20% discount code and receive exclusive natural beauty offers directly to your inbox.
                        Don't miss out – join now!
                    </p>
                    <form action="index.html" method="post">
                        <input type="email" name="email" id="mail" class="form-control" placeholder="exampleinfo@gmail.com">
                        <button class="cus-btn">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="newsletter-container bg-white br-10">
                    <div class="newsletter-image m-auto">
                        <img src="{{url('user')}}/media/icons/phone.png" alt="">
                    </div>
                    <h3 class="dark-black mb-16 mt-24">SMS Signup</h3>
                    <p class="light-gray mb-24">
                        Subscribe now to unlock a 20% discount code and receive exclusive natural beauty offers directly to your inbox.
                        Don't miss out – join now!
                    </p>
                    <form action="index.html" method="post">
                        <input type="tel" name="phone" id="mobile" class="form-control w-100" placeholder="+01 123 456 789">
                        <button class="cus-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter End -->
@endsection