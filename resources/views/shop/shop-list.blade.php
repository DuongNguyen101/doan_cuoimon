@extends('layout.user')
@section('content')
<section class="title-banner">
    <div class="container-fluid">
        <div class="banner-wrapper">
            <img src="{{url('user')}}/media/banner/left-image.png" alt="" class="banner-image1">
            <h1 class="dark-black fw-600">Shop</h1>
            <img src="{{url('user')}}/media/banner/right-image.png" alt="" class="banner-image2">
        </div>
    </div>
</section>

<section class="featured-product-sec py-40 bg-lightest-gray">
    <div class="container-fluid">
        <div class="row row-gap-3">
            <div class="col-xl-3">
                <div class="sidebar bg-white">
                    <form action="shop-grid-1.html" class="mb-24">
                        <input type="text" name="search" id="searchBar" class="form-control" placeholder="Search Here...">
                        <button>
                            <i class="fa-light fa-magnifying-glass"></i>
                        </button>
                    </form>
                    <div class="hr-line mb-24"></div>
                    <div class="category-block box-1 mb-24">
                        <div class="title mb-24" data-count="1">
                            <h6>Product Categories</h6>
                            <span>
                                <i class="far fa-horizontal-rule"></i>
                            </span>
                        </div>
                        <div class="content-block">
                            <ul class="list-unstyled">
                                <li class="checkbox-group">
                                    <div class="arrow-block d-flex align-items-center justify-content-between mb-16">
                                        <div class="check-block">
                                            <input type="checkbox" id="cable-check" class="sub-check-box">
                                            <label for="checkbox">Cables &amp; Connectors</label>
                                        </div>
                                        <i class="fa-thin fa-chevron-down fw-500 light-gray"></i>
                                    </div>
                                    <ul class="sub-checkboxes pl-16 mb-16" style="display: none;">
                                        <li class="d-flex align-items-center gap-2 mb-12">
                                            <div class="check-block">
                                                <input type="checkbox" id="hdmi-check">
                                                <label for="hdmi-check">HDMI Cables</label>
                                            </div>
                                            <p class="light-gray fw-400">(20)</p>
                                        </li>
                                        <li class="d-flex align-items-center gap-2 mb-12">
                                            <div class="check-block">
                                                <input type="checkbox" id="ethernet-check">
                                                <label for="ethernet-check">Ethernet Cables</label>
                                            </div>
                                            <p class="light-gray fw-400">(20)</p>
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <div class="check-block">
                                                <input type="checkbox" id="usb-check">
                                                <label for="usb-check">USB Cables</label>
                                            </div>
                                            <p class="light-gray fw-400">(20)</p>
                                        </li>
                                    </ul>
                                </li>
                                <li class="checkbox-group">
                                    <div class="arrow-block d-flex align-items-center justify-content-between mb-16">
                                        <div class="check-block">
                                            <input type="checkbox" id="cases-check" class="sub-check-box">
                                            <label for="cases-check">Cases &amp; Covers</label>
                                        </div>
                                        <i class="fa-thin fa-chevron-down fw-500 light-gray"></i>
                                    </div>
                                    <ul class="sub-checkboxes pl-16 mb-16" style="display: none;">
                                        <li class="d-flex align-items-center gap-2 mb-12">
                                            <div class="check-block">
                                                <input type="checkbox" id="cover-check">
                                                <label for="cover-check">Back Covers </label>
                                            </div>
                                            <p class="light-gray fw-400">(20)</p>
                                        </li>
                                        <li class="d-flex align-items-center gap-2 mb-12">
                                            <div class="check-block">
                                                <input type="checkbox" id="mobile-check">
                                                <label for="mobile-check">Mobile Cases</label>
                                            </div>
                                            <p class="light-gray fw-400">(20)</p>
                                        </li>
                                    </ul>
                                </li>
                                <li class="checkbox-group">
                                    <div class="arrow-block d-flex align-items-center justify-content-between mb-16">
                                        <div class="check-block">
                                            <input type="checkbox" id="screen-check" class="sub-check-box">
                                            <label for="screen-check">Screen Protector &amp; Guards</label>
                                        </div>
                                        <i class="fa-thin fa-chevron-down fw-500 light-gray"></i>
                                    </div>
                                    <ul class="sub-checkboxes pl-16 mb-16" style="display: none;">
                                        <li class="d-flex align-items-center gap-2 mb-12">
                                            <div class="check-block">
                                                <input type="checkbox" id="glass-check">
                                                <label for="glass-check">Glass Protector</label>
                                            </div>
                                            <p class="light-gray fw-400">(20)</p>
                                        </li>
                                        <li class="d-flex align-items-center gap-2 mb-12">
                                            <div class="check-block">
                                                <input type="checkbox" id="gorilla-check">
                                                <label for="gorilla-check">Gorilla Glass</label>
                                            </div>
                                            <p class="light-gray fw-400">(20)</p>
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <div class="check-block">
                                                <input type="checkbox" id="matte-check">
                                                <label for="matte-check">Matte Gel Paper</label>
                                            </div>
                                            <p class="light-gray fw-400">(20)</p>
                                        </li>
                                    </ul>
                                </li>

                                <li class="checkbox-group">
                                    <div class="arrow-block d-flex align-items-center justify-content-between mb-16">
                                        <div class="check-block">
                                            <input type="checkbox" id="charger-check" class="sub-check-box">
                                            <label for="charger-check">Chargers &amp; Adapters</label>
                                        </div>
                                        <i class="fa-thin fa-chevron-down fw-500 light-gray"></i>
                                    </div>
                                    <ul class="sub-checkboxes pl-16 mb-16" style="display: none;">
                                        <li class="d-flex align-items-center gap-2 mb-12">
                                            <div class="check-block">
                                                <input type="checkbox" id="adaptor-check">
                                                <label for="adaptor-check">Fast Charger</label>
                                            </div>
                                            <p class="light-gray fw-400">(20)</p>
                                        </li>
                                        <li class="d-flex align-items-center gap-2 mb-12">
                                            <div class="check-block">
                                                <input type="checkbox" id="rapid-check">
                                                <label for="rapid-check">Rapid Adaptor</label>
                                            </div>
                                            <p class="light-gray fw-400">(20)</p>
                                        </li>
                                    </ul>
                                </li>

                                <li class="checkbox-group">
                                    <div class="arrow-block d-flex align-items-center justify-content-between mb-16">
                                        <div class="check-block">
                                            <input type="checkbox" id="headphone-check" class="sub-check-box">
                                            <label for="headphone-check">Headphones &amp; Earphone</label>
                                        </div>
                                        <i class="fa-thin fa-chevron-down fw-500 light-gray"></i>
                                    </div>
                                    <ul class="sub-checkboxes pl-16 mb-16" style="display: none;">
                                        <li class="d-flex align-items-center gap-2 mb-12">
                                            <div class="check-block">
                                                <input type="checkbox" id="earbuds-check">
                                                <label for="earbuds-check">Premium Earbuds</label>
                                            </div>
                                            <p class="light-gray fw-400">(20)</p>
                                        </li>
                                        <li class="d-flex align-items-center gap-2 mb-12">
                                            <div class="check-block">
                                                <input type="checkbox" id="handfree-check">
                                                <label for="handfree-check">Wireless Handfree</label>
                                            </div>
                                            <p class="light-gray fw-400">(20)</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="hr-line mb-24"> </div>
                    <div class="category-block box-2 mb-24">
                        <div class="title mb-32" data-count="2">
                            <h6>Filter By Price</h6>
                            <span>
                                <i class="far fa-horizontal-rule"></i>
                            </span>
                        </div>
                        <div class="content-block">
                            <div class="wrapper">
                                <div class="price-input mb-24">
                                    <div class="field">
                                        <div class="fw-500 mb-4p">Low</div>
                                        <input type="number" class="input-min" value="2500">
                                    </div>
                                    <div class="field">
                                        <div class="fw-500 mb-4p">High</div>
                                        <input type="number" class="input-max" value="7500">
                                    </div>
                                </div>
                                <div class="slider">
                                    <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                    <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                    <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-line mb-24"></div>
                    <div class="category-block box-3 mb-24">
                        <div class="title mb-32" data-count="3">
                            <h6>Filter By Storage</h6>
                            <span>
                                <i class="far fa-horizontal-rule"></i>
                            </span>
                        </div>
                        <div class="content-block">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center justify-content-between mb-12">
                                    <div class="check-block">
                                        <input type="checkbox" id="check-64">
                                        <label for="check-64">64GB</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-12">
                                    <div class="check-block">
                                        <input type="checkbox" id="check-128">
                                        <label for="check-128">128GB</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-12">
                                    <div class="check-block">
                                        <input type="checkbox" id="check-256">
                                        <label for="check-256">256GB</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-12">
                                    <div class="check-block">
                                        <input type="checkbox" id="check-512">
                                        <label for="check-512">512GB</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-12">
                                    <div class="check-block">
                                        <input type="checkbox" id="check-1tb">
                                        <label for="check-1tb">1TB</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-12">
                                    <div class="check-block">
                                        <input type="checkbox" id="check-2tb">
                                        <label for="check-2tb">2TB Cables</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="hr-line mb-24"></div>
                    <div class="category-block box-4 mb-24">
                        <div class="title mb-32" data-count="4">
                            <h6>Filter By Colors</h6>
                            <span>
                                <i class="far fa-horizontal-rule"></i>
                            </span>
                        </div>
                        <div class="content-block">
                            <div class="product-color">
                                <ul class="unstyled list">
                                    <li>
                                        <label for="muhRadio9" class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                            <input type="radio" id="muhRadio9" name="muhRadio" class="radio-1" value="muhRadio1">
                                        </label>
                                    </li>
                                    <li>
                                        <label for="muhRadio8" class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                            <input type="radio" id="muhRadio8" name="muhRadio" class="radio-2" value="muhRadio2">
                                        </label>
                                    </li>
                                    <li>
                                        <label for="muhRadio7" class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                            <input type="radio" id="muhRadio7" name="muhRadio" class="radio-3" value="muhRadio3">
                                        </label>
                                    </li>
                                    <li>
                                        <label for="muhRadio1" class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                            <input type="radio" id="muhRadio1" name="muhRadio" class="radio-4" value="muhRadio1">
                                        </label>
                                    </li>
                                    <li>
                                        <label for="muhRadio2" class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                            <input type="radio" id="muhRadio2" name="muhRadio" class="radio-5" value="muhRadio2">
                                        </label>
                                    </li>
                                    <li>
                                        <label for="muhRadio3" class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                            <input type="radio" id="muhRadio3" name="muhRadio" class="radio-6" value="muhRadio3">
                                        </label>
                                    </li>
                                    <li>
                                        <label for="muhRadio4" class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                            <input type="radio" id="muhRadio4" name="muhRadio" class="radio-7" value="muhRadio4">
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="hr-line mb-24"></div>
                    <div class="category-block box-5 mb-24">
                        <div class="title mb-24" data-count="5">
                            <h6>Filter By Storage</h6>
                            <span>
                                <i class="far fa-horizontal-rule"></i>
                            </span>
                        </div>
                        <div class="content-block">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center justify-content-between mb-12">
                                    <div class="check-block">
                                        <input type="checkbox" id="infinix">
                                        <label for="infinix">Infinix</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-12">
                                    <div class="check-block">
                                        <input type="checkbox" id="oppo">
                                        <label for="oppo">Oppo</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-12">
                                    <div class="check-block">
                                        <input type="checkbox" id="vivo">
                                        <label for="vivo">Vivo</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-12">
                                    <div class="check-block">
                                        <input type="checkbox" id="samsung">
                                        <label for="samsung">Samsung</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-12">
                                    <div class="check-block">
                                        <input type="checkbox" id="oneplus">
                                        <label for="oneplus">One Plus</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-12">
                                    <div class="check-block">
                                        <input type="checkbox" id="Nokia">
                                        <label for="Nokia">Nokia</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="hr-line mb-24"></div>
                    <div class="category-block box-6 mb-24">
                        <div class="title mb-24" data-count="6">
                            <h6>Filter By Reviews</h6>
                            <span>
                                <i class="far fa-horizontal-rule"></i>
                            </span>
                        </div>
                        <div class="content-block">
                            <div class="d-flex justify-content-between align-items-center mb-16">
                                <div class="star-rating">
                                    <input type="radio" id="1-star" checked="" name="rating" value="1">
                                    <label for="1-star" class="star">★</label>
                                    <input type="radio" id="2-stars" name="rating" value="2">
                                    <label for="2-stars" class="star">★</label>
                                    <input type="radio" id="3-stars" name="rating" value="3">
                                    <label for="3-stars" class="star">★</label>
                                    <input type="radio" id="4-stars" name="rating" value="4">
                                    <label for="4-stars" class="star">★</label>
                                    <input type="radio" id="5-stars" name="rating" value="5">
                                    <label for="5-stars" class="star">★</label>
                                </div>
                                <p class="light-gray fw-400">(20)</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-16">
                                <div class="star-rating">
                                    <input type="radio" id="11-star" name="rating2" value="11">
                                    <label for="11-star" class="star">★</label>
                                    <input type="radio" id="12-stars" checked="" name="rating2" value="12">
                                    <label for="12-stars" class="star">★</label>
                                    <input type="radio" id="13-stars" name="rating2" value="13">
                                    <label for="13-stars" class="star">★</label>
                                    <input type="radio" id="14-stars" name="rating2" value="14">
                                    <label for="14-stars" class="star">★</label>
                                    <input type="radio" id="15-stars" name="rating2" value="15">
                                    <label for="15-stars" class="star">★</label>
                                </div>
                                <p class="light-gray fw-400">(20)</p>

                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-16">
                                <div class="star-rating ">
                                    <input type="radio" id="21-star" name="rating3" value="21">
                                    <label for="21-star" class="star">★</label>
                                    <input type="radio" id="22-stars" name="rating3" value="22">
                                    <label for="22-stars" class="star">★</label>
                                    <input type="radio" id="23-stars" checked="" name="rating3" value="23">
                                    <label for="23-stars" class="star">★</label>
                                    <input type="radio" id="24-stars" name="rating3" value="24">
                                    <label for="24-stars" class="star">★</label>
                                    <input type="radio" id="25-stars" name="rating3" value="25">
                                    <label for="25-stars" class="star">★</label>
                                </div>
                                <p class="light-gray fw-400">(20)</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-16">
                                <div class="star-rating ">
                                    <input type="radio" id="31-star" name="rating4" value="31">
                                    <label for="31-star" class="star">★</label>
                                    <input type="radio" id="32-stars" name="rating4" value="32">
                                    <label for="32-stars" class="star">★</label>
                                    <input type="radio" id="33-stars" name="rating4" value="33">
                                    <label for="33-stars" class="star">★</label>
                                    <input type="radio" id="34-stars" checked="" name="rating4" value="34">
                                    <label for="34-stars" class="star">★</label>
                                    <input type="radio" id="35-stars" name="rating4" value="35">
                                    <label for="35-stars" class="star">★</label>
                                </div>
                                <p class="light-gray fw-400">(20)</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-16">
                                <div class="star-rating">
                                    <input type="radio" id="41-star" name="rating5" value="41">
                                    <label for="41-star" class="star">★</label>
                                    <input type="radio" id="42-stars" name="rating5" value="42">
                                    <label for="42-stars" class="star">★</label>
                                    <input type="radio" id="43-stars" name="rating5" value="43">
                                    <label for="43-stars" class="star">★</label>
                                    <input type="radio" id="44-stars" name="rating5" value="44">
                                    <label for="44-stars" class="star">★</label>
                                    <input type="radio" id="45-stars" checked="" name="rating5" value="45">
                                    <label for="45-stars" class="star">★</label>
                                </div>
                                <p class="light-gray fw-400">(20)</p>
                            </div>
                        </div>
                    </div>
                    <div class="hr-line mb-24"></div>
                    <div class="category-block box-7 mb-24">
                        <div class="title mb-24" data-count="7">
                            <h6>Feature Products</h6>
                            <span>
                                <i class="far fa-horizontal-rule"></i>
                            </span>
                        </div>
                        <div class="content-block">
                            <a href="shop-list-1.html" class="d-flex gap-24 align-items-center mb-24">
                                <div class="image-box d-flex flex-shrink-0">
                                    <img src="{{url('user')}}/media/images/sidebar-1.png" alt="">
                                </div>
                                <div>
                                    <p class="mb-8">Samsung Galaxy S20 FE 8GB/256GB Blue</p>
                                    <p class="color-primary"><span class="light-gray text-decoration-line-through">$700.00</span>&nbsp;$650.00</p>
                                </div>
                            </a>
                            <div class="hr-line mb-24"></div>
                            <a href="shop-list-1.html" class="d-flex gap-24 align-items-center mb-24">
                                <div class="image-box d-flex flex-shrink-0">
                                    <img src="{{url('user')}}/media/images/sidebar-2.png" alt="">
                                </div>
                                <div>
                                    <p class="mb-8">Beats Studio Wireless Noise Cancelling Over-Ear</p>
                                    <p class="color-primary">$650.00</p>
                                </div>
                            </a>
                            <div class="hr-line mb-24"></div>
                            <a href="shop-list-1.html" class="d-flex gap-24 align-items-center">
                                <div class="image-box d-flex flex-shrink-0">
                                    <img src="{{url('user')}}/media/images/sidebar-3.png" alt="">
                                </div>
                                <div>
                                    <p class="mb-8">Logitech F710 Wireless Gamepad - 940-000119</p>
                                    <p class="color-primary"><span class="light-gray text-decoration-line-through">$700.00</span>&nbsp;$650.00</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="hr-line mb-24"></div>
                    <a href="" class="main-card">
                        <h4 class="fw-500 white mb-32">Special Offer</h4>
                        <div class="image mb-32">
                            <img src="{{url('user')}}/media/products/main-image.png" alt="">
                        </div>
                        <h5 class="fw-500 white mb-16 text-center">Gamepad Game Controller</h5>
                        <h5 class="fw-500 white text-center">$90.00</h5>
                    </a>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="shop-grid-topbar mb-16">
                    <div class="first-block">
                        <div class="visual-btns">
                            <a href="shop-grid-sidebar-1.html" class="visual-box active">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_7819_28489)">
                                        <path d="M8.28713 0H2.77537C1.24505 0 0 1.24505 0 2.77538V8.28712C0 9.81745 1.24505 11.0625 2.77537 11.0625H8.28713C9.81745 11.0625 11.0625 9.81745 11.0625 8.28712V2.77538C11.0625 1.24505 9.81745 0 8.28713 0ZM9.57841 8.28712C9.57841 9.12359 9.06189 9.55049 8.28713 9.55049H2.77537C1.97667 9.55049 1.51201 9.03237 1.51201 8.28712V2.77538C1.51201 2.05357 1.88548 1.5539 2.77537 1.5539H8.3007C9.21393 1.5539 9.57841 1.87112 9.57841 2.77538V8.28712Z" fill="#92949F"></path>
                                        <path d="M21.2246 0H15.7129C14.1825 0 12.9375 1.24505 12.9375 2.77538V8.28712C12.9375 9.81745 14.1825 11.0625 15.7129 11.0625H21.2246C22.755 11.0625 24 9.81745 24 8.28712V2.77538C24 1.24505 22.755 0 21.2246 0ZM22.5159 8.28712C22.5159 9.12359 21.9994 9.55049 21.2246 9.55049H15.7129C14.9142 9.55049 14.4495 9.03237 14.4495 8.28712V2.77538C14.4495 2.05357 14.823 1.5539 15.7129 1.5539H21.2382C22.1514 1.5539 22.5159 1.87112 22.5159 2.77538V8.28712Z" fill="#92949F"></path>
                                        <path d="M8.28713 12.9375H2.77537C1.24505 12.9375 0 14.1825 0 15.7129V21.2246C0 22.755 1.24505 24 2.77537 24H8.28713C9.81745 24 11.0625 22.755 11.0625 21.2246V15.7129C11.0625 14.1825 9.81745 12.9375 8.28713 12.9375ZM9.57841 21.2246C9.57841 22.0611 9.06189 22.488 8.28713 22.488H2.77537C1.97667 22.488 1.51201 21.9699 1.51201 21.2246V15.7129C1.51201 14.9911 1.88548 14.4914 2.77537 14.4914H8.3007C9.21393 14.4914 9.57841 14.8086 9.57841 15.7129V21.2246Z" fill="#92949F"></path>
                                        <path d="M21.2246 12.9375H15.7129C14.1825 12.9375 12.9375 14.1825 12.9375 15.7129V21.2246C12.9375 22.755 14.1825 24 15.7129 24H21.2246C22.755 24 24 22.755 24 21.2246V15.7129C24 14.1825 22.755 12.9375 21.2246 12.9375ZM22.5159 21.2246C22.5159 22.0611 21.9994 22.488 21.2246 22.488H15.7129C14.9142 22.488 14.4495 21.9699 14.4495 21.2246V15.7129C14.4495 14.9911 14.823 14.4914 15.7129 14.4914H21.2382C22.1514 14.4914 22.5159 14.8086 22.5159 15.7129V21.2246Z" fill="#92949F"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_7819_28489">
                                            <rect width="24" height="24" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="shop-list-sidebar-1.html" class="visual-box">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_7819_28490)">
                                        <path d="M1.5 4.5C2.32837 4.5 3 3.82844 3 3C3 2.17156 2.32837 1.5 1.5 1.5C0.671631 1.5 0 2.17156 0 3C0 3.82844 0.671631 4.5 1.5 4.5Z" fill="#92949F"></path>
                                        <path d="M6.75 2.25C6.33545 2.25 6 2.58579 6 3C6 3.41421 6.33545 3.75 6.75 3.75H23.25C23.6646 3.75 24 3.41421 24 3C24 2.58579 23.6646 2.25 23.25 2.25H6.75Z" fill="#92949F"></path>
                                        <path d="M1.5 13.5C2.32843 13.5 3 12.8284 3 12C3 11.1716 2.32843 10.5 1.5 10.5C0.671573 10.5 0 11.1716 0 12C0 12.8284 0.671573 13.5 1.5 13.5Z" fill="#92949F"></path>
                                        <path d="M6.75 11.25C6.33579 11.25 6 11.5858 6 12C6 12.4142 6.33579 12.75 6.75 12.75H23.25C23.6642 12.75 24 12.4142 24 12C24 11.5858 23.6642 11.25 23.25 11.25H6.75Z" fill="#92949F"></path>
                                        <path d="M3 21C3 21.8284 2.32843 22.5 1.5 22.5C0.671573 22.5 0 21.8284 0 21C0 20.1716 0.671573 19.5 1.5 19.5C2.32843 19.5 3 20.1716 3 21Z" fill="#92949F"></path>
                                        <path d="M6 21C6 20.5858 6.33579 20.25 6.75 20.25H23.25C23.6642 20.25 24 20.5858 24 21C24 21.4142 23.6642 21.75 23.25 21.75H6.75C6.33579 21.75 6 21.4142 6 21Z" fill="#92949F"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_7819_28490">
                                            <rect width="24" height="24" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="results d-lg-block d-none">
                            <p class="dark-gray">Showing 01 - 09 of 30 Results</p>
                        </div>
                    </div>
                    <div class="second-block">
                        <div class="grid-icons">
                            <a href="shop-list-1.html" class="grid-dots">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="30" viewBox="0 0 22 30" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 6C4.65685 6 6 4.65685 6 3C6 1.34315 4.65685 0 3 0C1.34315 0 0 1.34315 0 3C0 4.65685 1.34315 6 3 6ZM11 6C12.6569 6 14 4.65685 14 3C14 1.34315 12.6569 0 11 0C9.34315 0 8 1.34315 8 3C8 4.65685 9.34315 6 11 6ZM22 3C22 4.65685 20.6569 6 19 6C17.3431 6 16 4.65685 16 3C16 1.34315 17.3431 0 19 0C20.6569 0 22 1.34315 22 3ZM3 14C4.65685 14 6 12.6569 6 11C6 9.34315 4.65685 8 3 8C1.34315 8 0 9.34315 0 11C0 12.6569 1.34315 14 3 14ZM14 11C14 12.6569 12.6569 14 11 14C9.34315 14 8 12.6569 8 11C8 9.34315 9.34315 8 11 8C12.6569 8 14 9.34315 14 11ZM19 14C20.6569 14 22 12.6569 22 11C22 9.34315 20.6569 8 19 8C17.3431 8 16 9.34315 16 11C16 12.6569 17.3431 14 19 14ZM6 19C6 20.6569 4.65685 22 3 22C1.34315 22 0 20.6569 0 19C0 17.3431 1.34315 16 3 16C4.65685 16 6 17.3431 6 19ZM11 22C12.6569 22 14 20.6569 14 19C14 17.3431 12.6569 16 11 16C9.34315 16 8 17.3431 8 19C8 20.6569 9.34315 22 11 22ZM22 19C22 20.6569 20.6569 22 19 22C17.3431 22 16 20.6569 16 19C16 17.3431 17.3431 16 19 16C20.6569 16 22 17.3431 22 19ZM3 30C4.65685 30 6 28.6569 6 27C6 25.3431 4.65685 24 3 24C1.34315 24 0 25.3431 0 27C0 28.6569 1.34315 30 3 30ZM14 27C14 28.6569 12.6569 30 11 30C9.34315 30 8 28.6569 8 27C8 25.3431 9.34315 24 11 24C12.6569 24 14 25.3431 14 27ZM19 30C20.6569 30 22 28.6569 22 27C22 25.3431 20.6569 24 19 24C17.3431 24 16 25.3431 16 27C16 28.6569 17.3431 30 19 30Z" fill="#006937"></path>
                                </svg>
                            </a>
                            <a href="shop-list-sidebar-1.html" class="grid-dots active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 6C4.65685 6 6 4.65685 6 3C6 1.34315 4.65685 0 3 0C1.34315 0 0 1.34315 0 3C0 4.65685 1.34315 6 3 6ZM11 6C12.6569 6 14 4.65685 14 3C14 1.34315 12.6569 0 11 0C9.34315 0 8 1.34315 8 3C8 4.65685 9.34315 6 11 6ZM22 3C22 4.65685 20.6569 6 19 6C17.3431 6 16 4.65685 16 3C16 1.34315 17.3431 0 19 0C20.6569 0 22 1.34315 22 3ZM27 6C28.6569 6 30 4.65685 30 3C30 1.34315 28.6569 0 27 0C25.3431 0 24 1.34315 24 3C24 4.65685 25.3431 6 27 6ZM6 11C6 12.6569 4.65685 14 3 14C1.34315 14 0 12.6569 0 11C0 9.34315 1.34315 8 3 8C4.65685 8 6 9.34315 6 11ZM11 14C12.6569 14 14 12.6569 14 11C14 9.34315 12.6569 8 11 8C9.34315 8 8 9.34315 8 11C8 12.6569 9.34315 14 11 14ZM22 11C22 12.6569 20.6569 14 19 14C17.3431 14 16 12.6569 16 11C16 9.34315 17.3431 8 19 8C20.6569 8 22 9.34315 22 11ZM27 14C28.6569 14 30 12.6569 30 11C30 9.34315 28.6569 8 27 8C25.3431 8 24 9.34315 24 11C24 12.6569 25.3431 14 27 14ZM6 19C6 20.6569 4.65685 22 3 22C1.34315 22 0 20.6569 0 19C0 17.3431 1.34315 16 3 16C4.65685 16 6 17.3431 6 19ZM11 22C12.6569 22 14 20.6569 14 19C14 17.3431 12.6569 16 11 16C9.34315 16 8 17.3431 8 19C8 20.6569 9.34315 22 11 22ZM22 19C22 20.6569 20.6569 22 19 22C17.3431 22 16 20.6569 16 19C16 17.3431 17.3431 16 19 16C20.6569 16 22 17.3431 22 19ZM27 22C28.6569 22 30 20.6569 30 19C30 17.3431 28.6569 16 27 16C25.3431 16 24 17.3431 24 19C24 20.6569 25.3431 22 27 22ZM6 27C6 28.6569 4.65685 30 3 30C1.34315 30 0 28.6569 0 27C0 25.3431 1.34315 24 3 24C4.65685 24 6 25.3431 6 27ZM11 30C12.6569 30 14 28.6569 14 27C14 25.3431 12.6569 24 11 24C9.34315 24 8 25.3431 8 27C8 28.6569 9.34315 30 11 30ZM22 27C22 28.6569 20.6569 30 19 30C17.3431 30 16 28.6569 16 27C16 25.3431 17.3431 24 19 24C20.6569 24 22 25.3431 22 27ZM27 30C28.6569 30 30 28.6569 30 27C30 25.3431 28.6569 24 27 24C25.3431 24 24 25.3431 24 27C24 28.6569 25.3431 30 27 30Z" fill="#EAEAEC"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="last-block">
                        <div class="d-lg-flex d-none align-items-center gap-8">
                            <p class="dark-gray">Short by:</p>
                            <div class="drop-container ">
                                <div class="wrapper-dropdown dark-black" id="dropdown12">
                                    <span class="selected-display" id="destination12">Price:</span>
                                    <svg id="drp-arrow1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow transition-all ml-auto rotate-180">
                                        <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <ul class="topbar-dropdown bg-light-gray">
                                        <li class="item dark-black">Price: low to high</li>
                                        <li class="item dark-black">high to low</li>
                                        <li class="item dark-black">Average Rating</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="drop-container ">
                            <div class="wrapper-dropdown dark-black" id="dropdown21">
                                <span class="selected-display" id="destination21">Show:</span>
                                <svg id="drp-arrow-02" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow transition-all ml-auto rotate-180">
                                    <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <ul class="topbar-dropdown bg-light-gray">
                                    <li class="item dark-black">Show:9</li>
                                    <li class="item dark-black">Show:5</li>
                                    <li class="item dark-black">Show:4</li>
                                    <li class="item dark-black">Show:3</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-gap-3">
                    <div class="col-xl-12 d-sm-flex d-none">
                        <div class="featured-product-list bg-white br-10">
                            <div class="image-box">
                                <span class="sale-label">-12%</span>
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
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/list-1.png" class="product-image" alt=""></a>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-12"><a href="shop-detail.html">Elite Audio Gear</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-24 bg-white">
                                    <h5 class="color-sec">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                </div>
                                <ul class="m-0">
                                    <li class="mb-8 light-gray">Screen Size 10.9 inch</li>
                                    <li class="mb-8 light-gray">Screen Size 10.9 inch</li>
                                    <li class="light-gray">Screen Size 10.9 inch</li>
                                </ul>
                            </div>
                            <div class="button-box">
                                <div>
                                    <h6>$10.00&nbsp;&nbsp;<span class="text-decoration-line-through light-gray mb-24">$12.00</span></h6>
                                    <a href="cart.html" class="cus-btn-2">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 d-sm-flex d-none">
                        <div class="featured-product-list bg-white br-10">
                            <div class="image-box">
                                <span class="sale-label">-12%</span>
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
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/list-2.png" class="product-image" alt=""></a>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-12"><a href="shop-detail.html">Ultra Bright LCD</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-24 bg-white">
                                    <h5 class="color-sec">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                </div>
                                <ul class="m-0">
                                    <li class="mb-8 light-gray">Screen Size 10.9 inch</li>
                                    <li class="mb-8 light-gray">Screen Size 10.9 inch</li>
                                    <li class="light-gray">Screen Size 10.9 inch</li>
                                </ul>
                            </div>
                            <div class="button-box">
                                <div>
                                    <h6>$10.00&nbsp;&nbsp;<span class="text-decoration-line-through light-gray mb-24">$12.00</span></h6>
                                    <a href="cart.html" class="cus-btn-2">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 d-sm-flex d-none">
                        <div class="featured-product-list bg-white br-10">
                            <div class="image-box">
                                <span class="sale-label">-12%</span>
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
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/list-3.png" class="product-image" alt=""></a>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-12"><a href="shop-detail.html">Hyper Glide Mouse</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-24 bg-white">
                                    <h5 class="color-sec">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                </div>
                                <ul class="m-0">
                                    <li class="mb-8 light-gray">Screen Size 10.9 inch</li>
                                    <li class="mb-8 light-gray">Screen Size 10.9 inch</li>
                                    <li class="light-gray">Screen Size 10.9 inch</li>
                                </ul>
                            </div>
                            <div class="button-box">
                                <div>
                                    <h6>$10.00&nbsp;&nbsp;<span class="text-decoration-line-through light-gray mb-24">$12.00</span></h6>
                                    <a href="cart.html" class="cus-btn-2">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 d-sm-flex d-none">
                        <div class="featured-product-list bg-white br-10">
                            <div class="image-box">
                                <span class="sale-label">-12%</span>
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
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/list-4.png" class="product-image" alt=""></a>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-12"><a href="shop-detail.html">Nexus Mobile Pro 256GB</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-24 bg-white">
                                    <h5 class="color-sec">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                </div>
                                <ul class="m-0">
                                    <li class="mb-8 light-gray">Screen Size 10.9 inch</li>
                                    <li class="mb-8 light-gray">Screen Size 10.9 inch</li>
                                    <li class="light-gray">Screen Size 10.9 inch</li>
                                </ul>
                            </div>
                            <div class="button-box">
                                <div>
                                    <h6>$10.00&nbsp;&nbsp;<span class="text-decoration-line-through light-gray mb-24">$12.00</span></h6>
                                    <a href="cart.html" class="cus-btn-2">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 d-sm-flex d-none">
                        <div class="featured-product-list bg-white br-10">
                            <div class="image-box">
                                <span class="sale-label">-12%</span>
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
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/list-5.png" class="product-image" alt=""></a>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-12"><a href="shop-detail.html">Silent Touch Pro</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-24 bg-white">
                                    <h5 class="color-sec">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                </div>
                                <ul class="m-0">
                                    <li class="mb-8 light-gray">Screen Size 10.9 inch</li>
                                    <li class="mb-8 light-gray">Screen Size 10.9 inch</li>
                                    <li class="light-gray">Screen Size 10.9 inch</li>
                                </ul>
                            </div>
                            <div class="button-box">
                                <div>
                                    <h6>$10.00&nbsp;&nbsp;<span class="text-decoration-line-through light-gray mb-24">$12.00</span></h6>
                                    <a href="cart.html" class="cus-btn-2">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 d-sm-flex d-none">
                        <div class="featured-product-list bg-white br-10">
                            <div class="image-box">
                                <span class="sale-label">-12%</span>
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
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/list-6.png" class="product-image" alt=""></a>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-12"><a href="shop-detail.html">Gaming RBG Mouse</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-24 bg-white">
                                    <h5 class="color-sec">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                </div>
                                <ul class="m-0">
                                    <li class="mb-8 light-gray">Screen Size 10.9 inch</li>
                                    <li class="mb-8 light-gray">Screen Size 10.9 inch</li>
                                    <li class="light-gray">Screen Size 10.9 inch</li>
                                </ul>
                            </div>
                            <div class="button-box">
                                <div>
                                    <h6>$10.00&nbsp;&nbsp;<span class="text-decoration-line-through light-gray mb-24">$12.00</span></h6>
                                    <a href="cart.html" class="cus-btn-2">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 d-sm-flex d-none">
                        <div class="featured-product-list bg-white br-10">
                            <div class="image-box">
                                <span class="sale-label">-12%</span>
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
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/list-7.png" class="product-image" alt=""></a>
                            </div>
                            <div class="product-desc">
                                <h6 class="product-title mb-12"><a href="shop-detail.html">Quantum Vision LCD</a></h6>
                                <div class="text mb-12">
                                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                </div>
                                <div class="rating-star mb-24 bg-white">
                                    <h5 class="color-sec">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                </div>
                                <ul class="m-0">
                                    <li class="mb-8 light-gray">Screen Size 10.9 inch</li>
                                    <li class="mb-8 light-gray">Screen Size 10.9 inch</li>
                                    <li class="light-gray">Screen Size 10.9 inch</li>
                                </ul>
                            </div>
                            <div class="button-box">
                                <div>
                                    <h6>$10.00&nbsp;&nbsp;<span class="text-decoration-line-through light-gray mb-24">$12.00</span></h6>
                                    <a href="cart.html" class="cus-btn-2">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Show on Mobile Screen -->
                    <div class="col-xl-4 col-lg-4 col-md-6 d-sm-none d-block">
                        <div class="featured-product-card bg-white br-10">
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
                                <div class="text mb-16">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 d-sm-none d-block">
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
                                <div class="text mb-16">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 d-sm-none d-block">
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
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Hyper Glide Mouse</a></h6>
                                <div class="text mb-16">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 d-sm-none d-block">
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
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Hyper Glide Mouse</a></h6>
                                <div class="text mb-16">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 d-sm-none d-block">
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
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Silent Touch Pro</a></h6>
                                <div class="text mb-16">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 d-sm-none d-block">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-5.png" class="product-image" alt=""></a>
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
                                <div class="text mb-16">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 d-sm-none d-block">
                        <div class="featured-product-card bg-white br-10">
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
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Quantum Vision LCD</a></h6>
                                <div class="text mb-16">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 d-sm-none d-block">
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
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Tech Book Plus</a></h6>
                                <div class="text mb-16">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 d-sm-none d-block">
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
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Wired Head Free</a></h6>
                                <div class="text mb-16">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 d-sm-none d-block">
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
                                <div class="text mb-16">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 d-sm-none d-block">
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
                                <h6 class="product-title mb-8"><a href="shop-detail.html">Pure Bass Headphones</a></h6>
                                <div class="text mb-16">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 d-sm-none d-block">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <span class="sale-label">-12%</span>
                                <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-5.png" class="product-image" alt=""></a>
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
                                <div class="text mb-16">
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
                    <!-- Show on Mobile Screen -->
                </div>
                <div class="pagination pt-40">
                    <ul id="border-pagination">
                        <li><a href="" class="active">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                    <path d="M20.1953 22.9995C20.1953 19.9995 22.9953 15.9995 26.1953 15.9995M26.1953 15.9995C24.362 15.9995 20.1953 14.9995 20.1953 8.99951M26.1953 15.9995H7.19531" stroke="#282525" stroke-width="2"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection