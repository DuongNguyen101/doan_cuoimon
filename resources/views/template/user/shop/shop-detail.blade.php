<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Accessory-Store">

    <title>Accessory Store</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('user')}}/media/favicon.png">

    <!-- All CSS files -->
    <link rel="stylesheet" href="{{url('user')}}/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('user')}}/css/vendor/slick-slider.css">
    <link rel="stylesheet" href="{{url('user')}}/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body class="tt-smooth-scroll">


    <!-- Main Wrapper Start -->
    <div id="scroll-container">
        <!-- Header Menu Start -->
        <header>
            <div class="header-section">
                <div class="header-top bg-color-primary">
                    <div class="header-start d-lg-block d-none">
                        <p class="fw-500 white">Welcome to Spices Store</p>
                    </div>
                    <div class="header-end">
                        <a href="{{asset('template/user/contact/index')}}" class="top-bar-links d-sm-flex d-none align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M9.51246 19.7391C9.62113 19.9021 9.8041 20 10 20C10.1959 20 10.3789 19.9021 10.4875 19.7391C11.8742 17.6591 13.9167 15.0903 15.34 12.4778C16.478 10.3889 17.0312 8.60727 17.0312 7.03125C17.0312 3.15422 13.877 0 10 0C6.12297 0 2.96875 3.15422 2.96875 7.03125C2.96875 8.60727 3.52199 10.3889 4.66004 12.4778C6.08227 15.0883 8.12863 17.6634 9.51246 19.7391ZM10 1.17188C13.2309 1.17188 15.8594 3.80039 15.8594 7.03125C15.8594 8.40641 15.3529 10.0046 14.3109 11.9171C13.0841 14.1691 11.3334 16.4534 10 18.3738C8.66684 16.4537 6.91602 14.1692 5.6891 11.9171C4.64715 10.0046 4.14062 8.40641 4.14062 7.03125C4.14062 3.80039 6.76914 1.17188 10 1.17188Z"
                                    fill="#FAFAFA" />
                                <path
                                    d="M10 10.5469C11.9385 10.5469 13.5156 8.96977 13.5156 7.03125C13.5156 5.09273 11.9385 3.51562 10 3.51562C8.06148 3.51562 6.48438 5.09273 6.48438 7.03125C6.48438 8.96977 8.06148 10.5469 10 10.5469ZM10 4.6875C11.2923 4.6875 12.3438 5.73891 12.3438 7.03125C12.3438 8.32359 11.2923 9.375 10 9.375C8.70766 9.375 7.65625 8.32359 7.65625 7.03125C7.65625 5.73891 8.70766 4.6875 10 4.6875Z"
                                    fill="#FAFAFA" />
                            </svg>
                            <div>
                                <p class="fw-500 white">Store Locator</p>
                            </div>
                        </a>
                        <a href="{{asset('template/user/myaccount/index')}}" class="top-bar-links d-sm-flex d-none align-items-center gap-2">
                            @auth
                            <div>
                                <p class="fw-500 white">My Account</p>
                            </div>
                            @endauth
                        </a>
                        <div class="d-sm-block d-none">
                            <a href="{{asset('template/user/about/index')}}"><span class="fw-500 top-bar-links">About Us</span></a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="header-center">
                        <a href="{{asset('template/user/home/index')}}" class="header-logo">
                            <img src="{{url('image/homepage/logo.png')}}" alt="" width="284px" height="43px">
                        </a>
                        <div class="mixin-container d-xl-flex d-none">
                            <div class="drop-container">
                                <div id="dropdown3">
                                    <span class="selected-display black fw-500" id="destination3">All Categories</span>
                                </div>
                            </div>
                            <div class="vr-line vr-line-2"></div>
                            <form id="searchRedirectForm">
                                <div class="input-field d-flex">
                                    <input type="text" name="search" id="searchInput" class="form-control me-2"
                                        placeholder="Search for products..." required>
                                    <button type="submit" class="cus-btn">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="header-buttons d-flex align-items-center gap-3">

                            @if(Auth::check())
                            <div class="d-flex align-items-center gap-2">
                                @php
                                $imagePath = 'uploads/avatar/' . Auth::user()->image;
                                $image = Auth::user()->image && file_exists(public_path($imagePath))
                                ? asset($imagePath)
                                : asset('image/vietnam.png');
                                @endphp

                                <img
                                    src="{{ $image }}"
                                    alt="User"
                                    class="user rounded-circle"
                                    width="40" height="40"
                                    style="object-fit: cover;">

                                <div class="text-start">
                                    <h6 class="mb-0 fw-bold" style="color: #006937;">{{ Auth::user()->name }}</h6>

                                    <button type="button" class="btn btn-sm btn-outline-danger py-0 px-2 mt-1" style="font-size: 13px;" onclick="showLogoutConfirm()">
                                        Logout
                                    </button>

                                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            @else
                            <a href="{{ url('template/user/pages/login') }}" class="d-flex align-items-center gap-2 text-decoration-none">
                                <img src="{{ url('user') }}/media/users/user-3.png" alt="User" class="user rounded-circle" width="40" height="40">
                                <div class="text-start">
                                    <p class="mb-0 text-muted" style="font-size: 13px;">Login</p>
                                    <h6 class="mb-0 fw-bold" style="color: #006937;">Account</h6>
                                </div>
                            </a>
                            @endif

                            <!-- Wishlist -->
                            <a href="{{ url('template/user/shop/wishlist') }}" class="button-block d-sm-flex d-none">
                                <i class="fa-regular fa-heart"></i>
                            </a>

                            <!-- Cart -->
                            <a href="{{asset('template/user/shop/cart')}}" class="button-block d-sm-flex d-none cart-button">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>
                    </div>
                    <div class="header-bottom-area">
                        <nav class="navigation d-flex align-items-center justify-content-between">
                            <!-- Categories Dropdown -->
                            <div class="nav-container">
                                <nav class="all-category-nav">
                                    <label class="open-menu-all" for="open-menu-all">
                                        <input class="input-menu-all" id="open-menu-all" type="checkbox" name="menu-open">

                                        <span class="all-navigator">
                                            <i class="fa-solid fa-bars"></i>
                                            <span>Browse All Categories</span>
                                        </span>

                                        <span class="all-category-list list-unstyled">
                                            @foreach ($categories as $category)
                                            <span class="all-category-list-item">
                                                <a href="{{ route('shop.category', ['id' => $category->category_id]) }}"
                                                    class="all-category-list-link dark-black fw-500">
                                                    {{ $category->name }}
                                                </a>
                                            </span>
                                            @endforeach
                                        </span>
                                    </label>
                                </nav>
                            </div>
                            <!-- Categories Dropdown -->
                            <div class="menu-button-right">
                                <div class="main-menu__nav">
                                    <ul class="main-menu__list">
                                        <li>
                                            <a href="{{asset('template/user/home/index')}}" class="active">Home Page</a>
                                        </li>

                                        <!--  -->
                                        <li class="dropdown">
                                            <a href="javascript:void(0);">Shop</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{ route('shop.category', ['id' => 1]) }}">Shop List</a>
                                                </li>
                                                <li><a href="{{asset('template/user/shop/wishlist')}}">Wishlist</a></li>
                                                <li><a href="{{asset('template/user/shop/cart')}}">Cart</a></li>
                                                <li><a href="{{asset('template/user/shop/checkout')}}">Checkout</a></li>
                                            </ul>
                                        </li>

                                        <!--  -->
                                        <li>
                                            <a href="{{asset('template/user/blog/blog-grid')}}">Blogs</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="javascript:void(0);">Pages</a>
                                            <ul>
                                                <li><a href="{{asset('template/user/pages/login')}}">Login</a></li>
                                                <li><a href="{{asset('template/user/pages/register')}}">Register</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{asset('template/user/about/index')}}">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{asset('template/user/contact/index')}}">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="main-menu__right">
                                <div class="d-sm-flex d-none gap-2">
                                </div>
                                <a href="#" class="main-menu__toggler mobile-nav__toggler">
                                    <img src="{{url('user')}}/media/icons/menu-2.png" alt="">
                                    Menu
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Menu End -->

        <!-- Main Sections -->
        <main class="main-wrapper bg-lightest-gray">
            <!-- Shop Detail Start -->
            <section class="shop-detail py-40">
                <div class="container-fluid">
                    <div class="detail-wrapper">
                        <div class="row row-gap-3">
                            <div class="col-xl-6">
                                <div class="product-image-container container-2 bg-white">
                                    <div class="product-slider slider-2">
                                        <div class="detail-image detail-2">
                                            <img src="{{ asset('image/shoplist/' . $product->image_url) }}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="product-text-container bg-white br-20">
                                    @if(isset($product))
                                    <h3>{{ $product->name }}</h3>
                                    <p class="light-gray mb-24">
                                        {!! $product->description !!}
                                    </p>
                                    <div class="d-flex align-items-center gap-24 mb-24">
                                        <h6>Stock:</h6>
                                        <div class="drop-container bg-lightest-gray p-8-12 br-5">
                                            <p class="text-muted">{{ $product->stock }}</p>
                                        </div>
                                    </div>
                                    <div class="hr-line mb-24"></div>
                                    <div class="function-bar mb-20">
                                        <div class="quantity quantity-wrap">
                                            <div class="input-area quantity-wrap">
                                                <input class="decrement" type="button" value="-">
                                                <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                                    class="number">
                                                <input class="increment" type="button" value="+">
                                            </div>
                                        </div>
                                        <div class="cart-btn w-100">
                                            <a href="cart.html" class="cus-btn-2 w-100">ADD TO CART</a>
                                        </div>
                                        <div class="side-icons">
                                            <ul class="list-unstyled m-0">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22"
                                                            viewBox="0 0 24 22" fill="none">
                                                            <path
                                                                d="M12 21.6648C11.6583 21.6648 11.3289 21.541 11.0722 21.3162C10.1026 20.4684 9.16789 19.6717 8.34318 18.9689L8.33897 18.9653C5.92107 16.9048 3.83312 15.1254 2.38037 13.3725C0.756407 11.4129 0 9.55493 0 7.52521C0 5.55316 0.676207 3.73383 1.90393 2.4021C3.1463 1.05463 4.851 0.3125 6.70458 0.3125C8.08995 0.3125 9.35869 0.750488 10.4754 1.6142C11.039 2.05017 11.5499 2.58374 12 3.20612C12.4502 2.58374 12.9609 2.05017 13.5247 1.6142C14.6415 0.750488 15.9102 0.3125 17.2956 0.3125C19.149 0.3125 20.8538 1.05463 22.0962 2.4021C23.3239 3.73383 24 5.55316 24 7.52521C24 9.55493 23.2437 11.4129 21.6198 13.3723C20.167 15.1254 18.0793 16.9046 15.6617 18.9649C14.8355 19.6688 13.8993 20.4667 12.9276 21.3165C12.6711 21.541 12.3415 21.6648 12 21.6648ZM6.70458 1.71838C5.24834 1.71838 3.91058 2.29956 2.93737 3.35498C1.9497 4.42633 1.4057 5.90729 1.4057 7.52521C1.4057 9.2323 2.04016 10.759 3.4627 12.4755C4.83764 14.1346 6.88274 15.8774 9.25065 17.8954L9.25505 17.899C10.0829 18.6046 11.0213 19.4044 11.998 20.2584C12.9805 19.4027 13.9204 18.6016 14.7498 17.895C17.1176 15.877 19.1625 14.1346 20.5374 12.4755C21.9598 10.759 22.5943 9.2323 22.5943 7.52521C22.5943 5.90729 22.0503 4.42633 21.0626 3.35498C20.0896 2.29956 18.7516 1.71838 17.2956 1.71838C16.2288 1.71838 15.2494 2.0575 14.3846 2.7262C13.6139 3.32239 13.077 4.07605 12.7622 4.60339C12.6004 4.87457 12.3155 5.03644 12 5.03644C11.6845 5.03644 11.3996 4.87457 11.2377 4.60339C10.9231 4.07605 10.3863 3.32239 9.6154 2.7262C8.75059 2.0575 7.77116 1.71838 6.70458 1.71838Z"
                                                                fill="#141516" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hr-line mb-24"></div>
                                    <div class="d-flex align-items-center gap-16 mb-16">
                                        <h6>Category:</h6>
                                        <p class="light-gray">
                                            {{ $product->category->name ?? 'No Category' }}
                                        </p>
                                    </div>
                                    <div class="hr-line mb-24"></div>
                                    <div class="d-flex align-items-center gap-16 mb-24">
                                        <h6>Share:</h6>
                                        <ul class="list-unstyled social-link m-0">
                                            <li>
                                                <a href="https://www.facebook.com/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none">
                                                        <g clip-path="url(#clip0_7951_48369)">
                                                            <path
                                                                d="M11.75 3.75018C12.0087 3.75018 12.2188 3.54018 12.2188 3.28143V0.468933C12.2188 0.210183 12.0087 0.000183105 11.75 0.000183105H8.9375C7.12812 0.000183105 5.65625 1.47206 5.65625 3.28143V5.62518H4.25C3.99125 5.62518 3.78125 5.83518 3.78125 6.09393V8.90643C3.78125 9.16518 3.99125 9.37518 4.25 9.37518H5.65625V15.5314C5.65625 15.7902 5.86625 16.0002 6.125 16.0002H8.9375C9.19625 16.0002 9.40625 15.7902 9.40625 15.5314V9.37518H11.2812C11.5103 9.37518 11.7059 9.20956 11.7438 8.98362L12.2125 6.17112C12.235 6.03518 12.1969 5.89612 12.1078 5.79081C12.0188 5.68581 11.8878 5.62518 11.75 5.62518H9.40625V3.75018H11.75ZM8.9375 6.56268H11.1966L10.8841 8.43768H8.9375C8.67875 8.43768 8.46875 8.64768 8.46875 8.90643V15.0627H6.59375V8.90643C6.59375 8.64768 6.38375 8.43768 6.125 8.43768H4.71875V6.56268H6.125C6.38375 6.56268 6.59375 6.35268 6.59375 6.09393V3.28143C6.59375 1.98925 7.64531 0.937683 8.9375 0.937683H11.2812V2.81268H8.9375C8.67875 2.81268 8.46875 3.02268 8.46875 3.28143V6.09393C8.46875 6.35268 8.67875 6.56268 8.9375 6.56268Z"
                                                                fill="#FAFAFA" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_7951_48369">
                                                                <rect width="16" height="16" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://x.com/account/access">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none">
                                                        <g clip-path="url(#clip0_7951_48371)">
                                                            <path
                                                                d="M9.4932 6.77509L15.3215 0.000183105H13.9404L8.87967 5.88274L4.83771 0.000183105H0.175781L6.28802 8.89565L0.175781 16.0002H1.55698L6.9012 9.788L11.1698 16.0002H15.8317L9.49287 6.77509H9.4932ZM7.60147 8.97402L6.98217 8.08823L2.05464 1.03992H4.17607L8.15265 6.72814L8.77195 7.61392L13.941 15.0077H11.8196L7.60147 8.97436V8.97402Z"
                                                                fill="#006937" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_7951_48371">
                                                                <rect width="16" height="16" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none">
                                                        <g clip-path="url(#clip0_7951_48373)">
                                                            <path
                                                                d="M8.15747 16.0002C8.10449 16.0002 8.05151 16.0002 7.99817 16C6.74402 16.003 5.5852 15.9711 4.45825 15.9025C3.42505 15.8397 2.48193 15.4826 1.73071 14.8701C1.00586 14.279 0.510864 13.4798 0.259521 12.4949C0.0407715 11.6375 0.0291748 10.7959 0.0180664 9.98177C0.0100097 9.39766 0.00170898 8.70552 0 8.00166C0.00170898 7.29488 0.0100097 6.60274 0.0180664 6.01863C0.0291748 5.20467 0.0407715 4.36299 0.259521 3.50545C0.510864 2.52058 1.00586 1.72139 1.73071 1.13033C2.48193 0.517777 3.42505 0.160722 4.45837 0.0978555C5.58533 0.0293741 6.74438 -0.00260836 8.00122 0.000443394C9.25574 -0.00224215 10.4142 0.0293741 11.5411 0.0978555C12.5743 0.160722 13.5175 0.517777 14.2687 1.13033C14.9936 1.72139 15.4885 2.52058 15.7399 3.50545C15.9586 4.36287 15.9702 5.20467 15.9813 6.01863C15.9894 6.60274 15.9978 7.29488 15.9994 7.99873V8.00166C15.9978 8.70552 15.9894 9.39766 15.9813 9.98177C15.9702 10.7957 15.9587 11.6374 15.7399 12.4949C15.4885 13.4798 14.9936 14.279 14.2687 14.8701C13.5175 15.4826 12.5743 15.8397 11.5411 15.9025C10.4619 15.9682 9.35327 16.0002 8.15747 16.0002ZM7.99817 15.009C9.23193 15.0119 10.3647 14.9807 11.4652 14.9138C12.2465 14.8663 13.168 14.3538 13.7229 13.9013C14.2359 13.483 14.5891 12.9058 14.7729 12.1859C14.955 11.4721 14.9655 10.7058 14.9756 9.96468C14.9835 9.38448 14.9918 8.69722 14.9936 8.0002C14.9918 7.30305 14.9835 6.61592 14.9756 6.03572C14.9655 5.29463 14.955 4.52828 14.7729 3.81441C14.5891 3.09444 14.2359 2.51729 13.7229 2.09895C13.168 1.64656 12.2465 1.14912 11.4652 1.10164C10.3647 1.03462 9.23193 1.00373 8.0011 1.00642C6.76758 1.00349 5.63464 1.03829 4.53418 1.1053C3.75293 1.15279 2.91684 1.48784 2.36191 1.94023C1.84897 2.35857 1.4007 3.09444 1.21699 3.81441C1.03486 4.52828 1.02436 5.29451 1.01423 6.03572C1.00629 6.61641 0.997993 7.30403 0.996284 8.00166C0.997993 8.69624 1.00629 9.38399 1.01423 9.96468C1.02436 10.7058 1.03486 11.4721 1.21699 12.1859C1.4007 12.9058 1.75397 13.483 2.26691 13.9013C2.82185 14.3537 3.75293 14.8663 4.53418 14.9138C5.63464 14.9808 6.76782 15.012 7.99817 15.009ZM7.96838 11.9064C5.81457 11.9064 4.06213 10.1541 4.06213 8.0002C4.06213 5.84627 5.81457 4.09395 7.96838 4.09395C10.1223 4.09395 11.8746 5.84627 11.8746 8.0002C11.8746 10.1541 10.1223 11.9064 7.96838 11.9064ZM8.0011 5.0035C6.24478 5.0035 5.00876 6.23953 5.00876 7.99873C5.00876 9.46333 6.11624 11.0089 7.98382 11.0089C9.44854 11.0089 10.9713 9.6213 10.9713 7.99873C10.9713 6.53413 9.85398 5.0035 8.0011 5.0035ZM12.3121 2.84395C11.7944 2.84395 11.3746 3.26363 11.3746 3.78145C11.3746 4.29927 11.7944 4.71895 12.3121 4.71895C12.83 4.71895 13.2496 4.29927 13.2496 3.78145C13.2496 3.26363 12.83 2.84395 12.3121 2.84395Z"
                                                                fill="#006937" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_7951_48373">
                                                                <rect width="16" height="16" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none">
                                                        <g clip-path="url(#clip0_7951_48375)">
                                                            <path
                                                                d="M3.76245 5.02094H0.75C0.491089 5.02094 0.28125 5.2309 0.28125 5.48969V15.5314C0.28125 15.7903 0.491089 16.0002 0.75 16.0002H3.76245C4.02136 16.0002 4.2312 15.7903 4.2312 15.5314V5.48969C4.2312 5.2309 4.02136 5.02094 3.76245 5.02094ZM3.2937 15.0627H1.21875V5.95844H3.2937V15.0627Z"
                                                                fill="#006937" />
                                                            <path
                                                                d="M2.25635 0.000183105C1.16724 0.000183105 0.28125 0.886169 0.28125 1.97504C0.28125 3.06415 1.16724 3.95001 2.25635 3.95001C3.34534 3.95001 4.2312 3.06403 4.2312 1.97504C4.2312 0.886169 3.34534 0.000183105 2.25635 0.000183105ZM2.25635 3.01251C1.6842 3.01251 1.21875 2.54718 1.21875 1.97504C1.21875 1.40302 1.6842 0.937683 2.25635 0.937683C2.82837 0.937683 3.2937 1.40302 3.2937 1.97504C3.2937 2.54718 2.82837 3.01251 2.25635 3.01251Z"
                                                                fill="#006937" />
                                                            <path
                                                                d="M11.2941 4.95465C10.5815 4.95465 9.87927 5.1264 9.25037 5.44769C9.229 5.20856 9.0282 5.02094 8.78345 5.02094H5.77075C5.51196 5.02094 5.302 5.2309 5.302 5.48969V15.5314C5.302 15.7903 5.51196 16.0002 5.77075 16.0002H8.78345C9.04236 16.0002 9.2522 15.7903 9.2522 15.5314V10.0085C9.2522 9.29803 9.83032 8.72003 10.5408 8.72003C11.2512 8.72003 11.8291 9.29803 11.8291 10.0085V15.5314C11.8291 15.7903 12.0391 16.0002 12.2979 16.0002H15.3104C15.5693 16.0002 15.7792 15.7903 15.7792 15.5314V9.43976C15.7792 6.96661 13.7672 4.95465 11.2941 4.95465ZM14.8417 15.0627H12.7667V10.0085C12.7667 8.78107 11.7682 7.78253 10.5409 7.78253C9.31335 7.78253 8.3147 8.78107 8.3147 10.0085V15.0627H6.23962V5.95844H8.3147V6.30475C8.3147 6.48505 8.41809 6.64935 8.58069 6.72736C8.74316 6.80536 8.93604 6.78314 9.07678 6.67047C9.71155 6.16132 10.4784 5.89215 11.2941 5.89215C13.2502 5.89215 14.8417 7.48358 14.8417 9.43976V15.0627Z"
                                                                fill="#006937" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_7951_48375">
                                                                <rect width="16" height="16" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hr-line"></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Shop Detail End -->

            <!-- Product Description Start -->
            <section class="product-description pb-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="description-wrapper bg-white br-20">
                            <nav class="mb-32">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info"
                                        type="button" role="tab" aria-controls="nav-info" aria-selected="true">Additional
                                        Information</button>

                                    <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review"
                                        aria-selected="false">Reviews ({{ $product->reviews->count() }})</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade active show" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                                    <h5 class="mb-32">Product Information</h5>

                                    @if ($product->nutritional_info)
                                    <div class="specs-chart mb-32">
                                        <h6 class="color-primary mb-16">Nutritional Info</h6>
                                                    <p class="category light-gray">{!! $product->nutritional_info !!}</p>
                                    </div>
                                    @endif

                                    @if ($product->usage_instructions)
                                    <div class="specs-chart mb-32">
                                        <h6 class="color-primary mb-16">Usage Instructions</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="brand-block">
                                                    <p class="category light-gray">{!! $product->usage_instructions !!}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif

                                    @if ($product->packaging)
                                    <div class="specs-chart mb-32">
                                        <h6 class="color-primary mb-16">Packaging</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="brand-block">
                                                    <p class="category light-gray">{{ $product->packaging }}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif

                                    @if ($product->origin)
                                    <div class="specs-chart mb-32">
                                        <h6 class="color-primary mb-16">Origin</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="brand-block">
                                                    <p class="category light-gray">{{ $product->origin }}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif
                                </div>

                                <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                                    <div class="comments-sec mb-48">
                                        <h5 class="mb-48">
                                            ({{ $product->reviews->count() }}) Reviews For {{ $product->title }}
                                        </h5>

                                        {{-- Vòng lặp review --}}
                                        @foreach($product->reviews as $review)
                                        <div class="comment-box mb-24">
                                            <img src="{{ asset('user/media/users/user.png') }}" alt="" class="br-5" width="60">
                                            <div class="block">
                                                <div class="top-row mb-16">
                                                    <div class="info">
                                                        <h5 class="light-black">{{ $review->user->name }}</h5>
                                                    </div>
                                                    <h5 class="color-sec">
                                                        @for($i = 1; $i <= 5; $i++)
                                                            @if($i <=$review->rating)
                                                            ★
                                                            @else
                                                            <span class="light-gray">★</span>
                                                            @endif
                                                            @endfor
                                                    </h5>
                                                </div>
                                                <p class="light-gray">{{ $review->comment }}</p>
                                            </div>
                                        </div>
                                        @if(!$loop->last)
                                        <div class="hr-line mb-24"></div>
                                        @endif
                                        @endforeach
                                    </div>

                                    {{-- FORM GỬI ĐÁNH GIÁ --}}
                                    <div class="review-form">
                                        @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                        @endif

                                        @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif

                                        <form method="POST" action="{{ route('reviews.store') }}">

                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                            <div class="row">
                                                <div class="col-sm-12 mb-24">
                                                    <label class="fw-500 mb-8">Your Rating</label>
                                                    <div id="star-rating" class="text-warning fs-4">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <i class="bi bi-star" data-value="{{ $i }}"></i>
                                                            @endfor
                                                    </div>
                                                    <input type="hidden" name="rating" id="rating" value="{{ old('rating') }}">
                                                </div>


                                                <div class="col-sm-12">
                                                    <div class="input-block mb-24">
                                                        <label for="comment" class="fw-500 mb-8">Your Review</label>
                                                        <textarea class="form-control" name="comment" id="comment"
                                                            rows="4" placeholder="Write Your Review here..." required>{{ old('comment') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="cus-btn-3 w-25">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Product Description End -->

        <!-- Recommended Product Start -->
        <section class="recommended-product bg-lightest-gray pb-40">
            <div class="container-fluid">
                <div class="top-bar mb-16">
                    <h5>Recommended Products</h5>
                    <a href="/template/user/shop/category/1" class="cus-btn-arrow"> Show All
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                            <path
                                d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                stroke="#0C0C0D" stroke-width="2" />
                        </svg>
                    </a>
                </div>
                <div class="row row-gap-4">
                    @foreach($relatedProducts as $related)
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 d-flex">
                        <div class="featured-product-card bg-white br-10 d-flex flex-column w-100 h-100 p-3">
                            {{-- Hình ảnh --}}
                            <div class="image-box mb-3 position-relative">
                                @if ($related->discount_percent)
                                <span class="sale-label position-absolute top-0 start-0 bg-danger text-white px-2 py-1 rounded-end">-{{ $related->discount_percent }}%</span>
                                @endif
                                <a href="{{ route('shopdetail', $related->product_id) }}">
                                    <img src="{{ asset('image/shoplist/' . $related->image_url) }}" class="product-image w-100" style="aspect-ratio: 1/1; object-fit: cover;" alt="{{ $related->name }}">
                                </a>
                            </div>

                            {{-- Nội dung --}}
                            <div class="product-desc d-flex flex-column flex-grow-1">
                                <h6 class="product-title mb-2" style="min-height: 48px;">
                                    <a href="{{ route('shopdetail', $related->product_id) }}" class="text-dark text-decoration-none">
                                        {{ Str::limit($related->name, 40) }}
                                    </a>
                                </h6>

                                <div class="text mb-2" style="min-height: 60px;">
                                    <p class="text-muted small mb-0">{{ Str::limit($related->description, 80) }}</p>
                                </div>

                                <div class="rating-star mb-2">
                                    <div class="d-flex align-items-center gap-2">
                                        @php
                                        $avgRating = round($related->reviews_avg_rating ?? 0);
                                        $reviewCount = $related->reviews_count ?? 0;
                                        @endphp

                                        {{-- Hiển thị sao --}}
                                        <span class="text-warning">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <=$avgRating)
                                                ★
                                                @else
                                                <span class="text-muted">★</span>
                                        @endif
                                        @endfor
                                        </span>

                                        {{-- Hiển thị số lượt đánh giá --}}
                                        <span class="text-muted small">({{ $reviewCount }})</span>
                                    </div>

                                    {{-- Hiển thị giá --}}
                                    <div>
                                        <h6 class="mb-0">
                                            @if ($related->old_price)
                                            <span class="text-decoration-line-through text-muted">${{ $related->old_price }}</span>
                                            @endif
                                            &nbsp;${{ $related->price }}
                                        </h6>
                                    </div>
                                </div>

                                {{-- Button --}}
                                <div class="mt-auto">
                                    <a href="cart.html" class="cus-btn-2 w-100 text-center">ADD TO CART</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Recommended Product End -->

        <!-- Benefits Start -->
        <footer>
            <div class="container-fluid">
                <div class="hr-line"></div>
                <div class="footer-wrapper pt-40 mb-32 justify-content-center
                    ">
                    <div class="store-desc">
                        <a href="{{asset('template/user/home/index')}}"><img src="{{url('image/homepage/logo.png')}}" alt="" width="284px" height="43px"></a>
                        <p class="light-gray mb-xl-32 mb-lg-0 mb-32">
                            Northwest specialties bring the bold flavors of the mountains: smoked buffalo meat, mak khen pepper, cham cheo dipping sauce... Simple yet rich in highland cultural identity.
                        </p>
                        <p class="d-xl-none d-lg-block d-none light-gray mb-32">
                            amet consectetur. Eu dolor faucibus <br>
                            sit fames elit ac ultrices morbi faucibus.
                        </p>
                        <a href="tel:123456789" class="d-flex align-items-center gap-3">
                            <div class="icon-box">
                                <img src="{{url('user')}}/media/icons/user-icon.png" alt="">
                            </div>
                            <div>
                                <p class="light-gray mb-4p">
                                    Call us 24/7
                                </p>
                                <h5 class="color-primary">088 8899 3639</h5>
                            </div>
                        </a>
                    </div>
                    <div class="footer-link-block">
                        <h6 class="fw-600 mb-24">All Categories</h6>
                        <ul class="list-unstyled m-0">
                            @foreach($categories as $category)
                            <li class="mb-8">
                                <a href="{{ url('/template/user/shop/category/' . $category->	category_id  . $category->slug) }}" class="light-gray">{{ $category->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="footer-link-block">
                        <h6 class="fw-600 mb-24">Quick Link</h6>
                        <ul class="list-unstyled m-0">
                            <li class="mb-8"><a href="{{asset('template/user/home/index')}}" class="light-gray">Home Page</a></li>
                            <li class="mb-8"><a href="{{asset('template/user/shop/category/1')}}" class="light-gray">Shop Now</a></li>
                            <li class="mb-8"><a href="{{asset('/template/user/blog/blog-grid')}}" class="light-gray">Blogs</a></li>
                            <li class="mb-8"><a href="{{asset('/template/user/about/index')}}" class="light-gray">About Us</a></li>
                            <li class="mb-8"><a href="{{asset('/template/user/pages/login')}}" class="light-gray">login</a></li>
                            <li class="mb-8"><a href="{{asset('/template/user/pages/register')}}" class="light-gray">Register</a></li>
                            <li class="mb-8"><a href="{{asset('/template/user/contact/index')}}" class="light-gray">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-block">
                        <ul class="list-unstyled mb-16">
                            <li class="mb-12 footer-link">
                                <a href="/template/user/contact/index" class="d-flex align-items-center gap-2">
                                    <div class="img-box">
                                        <img src="{{url('user')}}/media/icons/location.png" alt="">
                                    </div>
                                    <p class="light-gray">Group 3 Aptech</p>
                                </a>
                            </li>
                            <li class="mb-12 footer-link">
                                <a href="mailto:info@example.com" class="d-flex align-items-center gap-2">
                                    <div class="img-box">
                                        <img src="{{url('user')}}/media/icons/mail-sm.png" alt="">
                                    </div>
                                    <p class="color-primary">Test@gmail.com</p>
                                </a>
                            </li>
                        </ul>
                        <p class="fw-500 mb-16">Follow Us!</p>
                        <ul class="list-unstyled social-link">
                            <li>
                                <a href="https://www.instagram.com/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                        <path
                                            d="M12.5696 24.5995C12.4901 24.5995 12.4106 24.5995 12.3306 24.5992C10.4494 24.6038 8.71118 24.556 7.02075 24.4531C5.47095 24.3588 4.05627 23.8232 2.92944 22.9043C1.84216 22.0178 1.09967 20.819 0.722656 19.3417C0.394531 18.0555 0.377136 16.793 0.360474 15.5719C0.348389 14.6957 0.335937 13.6575 0.333374 12.6017C0.335937 11.5416 0.348389 10.5033 0.360474 9.62719C0.377136 8.40624 0.394531 7.14373 0.722656 5.85742C1.09967 4.38012 1.84216 3.18133 2.92944 2.29473C4.05627 1.37591 5.47095 0.840326 7.02093 0.746026C8.71136 0.643304 10.4499 0.595331 12.3352 0.599908C14.217 0.59588 15.9546 0.643304 17.6451 0.746026C19.1949 0.840326 20.6096 1.37591 21.7364 2.29473C22.8238 3.18133 23.5662 4.38012 23.9432 5.85742C24.2713 7.14355 24.2887 8.40624 24.3054 9.62719C24.3174 10.5033 24.3301 11.5416 24.3325 12.5973V12.6017C24.3301 13.6575 24.3174 14.6957 24.3054 15.5719C24.2887 16.7928 24.2715 18.0553 23.9432 19.3417C23.5662 20.819 22.8238 22.0178 21.7364 22.9043C20.6096 23.8232 19.1949 24.3588 17.6451 24.4531C16.0262 24.5516 14.3633 24.5995 12.5696 24.5995ZM12.3306 23.1127C14.1813 23.1171 15.8805 23.0702 17.5312 22.9699C18.7031 22.8987 20.0854 22.13 20.9178 21.4512C21.6872 20.8237 22.2171 19.958 22.4927 18.878C22.7658 17.8074 22.7816 16.6579 22.7968 15.5463C22.8087 14.676 22.8211 13.6451 22.8237 12.5995C22.8211 11.5538 22.8087 10.5231 22.7968 9.65282C22.7816 8.54119 22.7658 7.39166 22.4927 6.32086C22.2171 5.2409 21.6872 4.37518 20.9178 3.74767C20.0854 3.06909 18.7031 2.32292 17.5312 2.2517C15.8805 2.15117 14.1813 2.10485 12.335 2.10887C10.4847 2.10448 8.78534 2.15667 7.13464 2.2572C5.96277 2.32843 4.70864 2.83101 3.87624 3.50959C3.10683 4.1371 2.43443 5.2409 2.15885 6.32086C1.88566 7.39166 1.86991 8.54101 1.85472 9.65282C1.84281 10.5239 1.83036 11.5553 1.8278 12.6017C1.83036 13.6436 1.84281 14.6752 1.85472 15.5463C1.86991 16.6579 1.88566 17.8074 2.15885 18.878C2.43443 19.958 2.96434 20.8237 3.73374 21.4512C4.56614 22.1298 5.96277 22.8987 7.13464 22.9699C8.78534 23.0704 10.4851 23.1173 12.3306 23.1127ZM12.2859 18.4589C9.05523 18.4589 6.42657 15.8304 6.42657 12.5995C6.42657 9.36864 9.05523 6.74017 12.2859 6.74017C15.5168 6.74017 18.1453 9.36864 18.1453 12.5995C18.1453 15.8304 15.5168 18.4589 12.2859 18.4589ZM12.335 8.1045C9.70055 8.1045 7.84651 9.95854 7.84651 12.5973C7.84651 14.7942 9.50773 17.1126 12.3091 17.1126C14.5062 17.1126 16.7904 15.0312 16.7904 12.5973C16.7904 10.4004 15.1143 8.1045 12.335 8.1045ZM18.8016 4.86517C18.025 4.86517 17.3953 5.49468 17.3953 6.27142C17.3953 7.04815 18.025 7.67767 18.8016 7.67767C19.5783 7.67767 20.2078 7.04815 20.2078 6.27142C20.2078 5.49468 19.5783 4.86517 18.8016 4.86517Z"
                                            fill="#0C0C0D" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                        <g clip-path="url(#clip0_5950_10656)">
                                            <path
                                                d="M17.9584 6.22461C18.3465 6.22461 18.6615 5.90961 18.6615 5.52148V1.30273C18.6615 0.914609 18.3465 0.599609 17.9584 0.599609H13.7396C11.0256 0.599609 8.81775 2.80742 8.81775 5.52148V9.03711H6.70837C6.32025 9.03711 6.00525 9.35211 6.00525 9.74023V13.959C6.00525 14.3471 6.32025 14.6621 6.70837 14.6621H8.81775V23.8965C8.81775 24.2846 9.13275 24.5996 9.52087 24.5996H13.7396C14.1277 24.5996 14.4427 24.2846 14.4427 23.8965V14.6621H17.2552C17.5988 14.6621 17.8923 14.4137 17.949 14.0748L18.6521 9.85602C18.6859 9.65211 18.6287 9.44352 18.4951 9.28555C18.3615 9.12805 18.1651 9.03711 17.9584 9.03711H14.4427V6.22461H17.9584ZM13.7396 10.4434H17.1282L16.6595 13.2559H13.7396C13.3515 13.2559 13.0365 13.5709 13.0365 13.959V23.1934H10.224V13.959C10.224 13.5709 9.909 13.2559 9.52087 13.2559H7.4115V10.4434H9.52087C9.909 10.4434 10.224 10.1284 10.224 9.74023V5.52148C10.224 3.5832 11.8013 2.00586 13.7396 2.00586H17.2552V4.81836H13.7396C13.3515 4.81836 13.0365 5.13336 13.0365 5.52148V9.74023C13.0365 10.1284 13.3515 10.4434 13.7396 10.4434Z"
                                                fill="#0C0C0D" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5950_10656">
                                                <rect width="24" height="24" fill="white" transform="translate(0.333374 0.599609)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://x.com/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                        <g clip-path="url(#clip0_5950_10659)">
                                            <path
                                                d="M14.5746 10.762L23.3171 0.599609H21.2454L13.6543 9.42345L7.5914 0.599609H0.598511L9.76688 13.9428L0.598511 24.5996H2.6703L10.6866 15.2813L17.0896 24.5996H24.0825L14.5741 10.762H14.5746ZM11.737 14.0604L10.8081 12.7317L3.4168 2.15922H6.59895L12.5638 10.6915L13.4928 12.0202L21.2464 23.1109H18.0642L11.737 14.0609V14.0604Z"
                                                fill="#0C0C0D" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5950_10659">
                                                <rect width="24" height="24" fill="white" transform="translate(0.333374 0.599609)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                        <g clip-path="url(#clip0_5950_10662)">
                                            <path
                                                d="M5.97705 8.13074H1.45837C1.07001 8.13074 0.755249 8.44568 0.755249 8.83386V23.8965C0.755249 24.2849 1.07001 24.5996 1.45837 24.5996H5.97705C6.36542 24.5996 6.68018 24.2849 6.68018 23.8965V8.83386C6.68018 8.44568 6.36542 8.13074 5.97705 8.13074ZM5.27393 23.1934H2.1615V9.53699H5.27393V23.1934Z"
                                                fill="#0C0C0D" />
                                            <path
                                                d="M3.7179 0.599609C2.08423 0.599609 0.755249 1.92859 0.755249 3.56189C0.755249 5.19556 2.08423 6.52435 3.7179 6.52435C5.35138 6.52435 6.68018 5.19537 6.68018 3.56189C6.68018 1.92859 5.35138 0.599609 3.7179 0.599609ZM3.7179 5.1181C2.85968 5.1181 2.1615 4.4201 2.1615 3.56189C2.1615 2.70386 2.85968 2.00586 3.7179 2.00586C4.57593 2.00586 5.27393 2.70386 5.27393 3.56189C5.27393 4.4201 4.57593 5.1181 3.7179 5.1181Z"
                                                fill="#0C0C0D" />
                                            <path
                                                d="M17.2745 8.03131C16.2057 8.03131 15.1523 8.28894 14.2089 8.77087C14.1769 8.41217 13.8757 8.13074 13.5085 8.13074H8.9895C8.60132 8.13074 8.28638 8.44568 8.28638 8.83386V23.8965C8.28638 24.2849 8.60132 24.5996 8.9895 24.5996H13.5085C13.8969 24.5996 14.2117 24.2849 14.2117 23.8965V15.6121C14.2117 14.5464 15.0789 13.6794 16.1445 13.6794C17.2102 13.6794 18.077 14.5464 18.077 15.6121V23.8965C18.077 24.2849 18.392 24.5996 18.7802 24.5996H23.299C23.6874 24.5996 24.0021 24.2849 24.0021 23.8965V14.759C24.0021 11.0493 20.9842 8.03131 17.2745 8.03131ZM22.5959 23.1934H19.4835V15.6121C19.4835 13.7709 17.9857 12.2731 16.1447 12.2731C14.3034 12.2731 12.8054 13.7709 12.8054 15.6121V23.1934H9.69281V9.53699H12.8054V10.0565C12.8054 10.3269 12.9605 10.5734 13.2044 10.6904C13.4481 10.8074 13.7374 10.774 13.9485 10.605C14.9007 9.84131 16.051 9.43756 17.2745 9.43756C20.2087 9.43756 22.5959 11.8247 22.5959 14.759V23.1934Z"
                                                fill="#0C0C0D" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5950_10662">
                                                <rect width="24" height="24" fill="white" transform="translate(0.333374 0.599609)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hr-line"></div>
                <div class="footer-bottom-bar py-24">
                    <p class="light-gray text-sm-left text-center">Group 3 Aptech</p>
                    <div class="payment-cards d-flex align-items-center gap-16">
                        <p class="fw-500 light-gray d-sm-flex d-none">Payment Mathods:</p>
                        <div class="card-block">
                            <img src="{{url('image/checkout/vnp.png')}}" alt="" width="48px" height="33px">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Benefits End -->
        </main>
        <!-- Main Sections -->
    </div>
    <!-- Main Wrapper End -->

    <!-- Back To Top Start -->
    <a href="#main-wrapper" id="backto-top" class="back-to-top"><i class="fas fa-angle-up"></i></a>

    <!-- Jquery Js -->
    <script src="{{url('user')}}/js/vendor/bootstrap.min.js"></script>
    <script src="{{url('user')}}/js/vendor/jquery-3.6.3.min.js"></script>
    <script src="{{url('user')}}/js/vendor/jquery-validator.js"></script>
    <script src="{{url('user')}}/js/vendor/slick.min.js"></script>
    <script src="{{url('user')}}/js/user.js"></script>

    <script src="{{url('user')}}/js/app.js"></script>

    <div id="logoutConfirmBox" style="display:none; position: fixed; z-index: 9999; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);">
        <div style="background-color: #fff; padding: 20px; border-radius: 10px; width: 300px; margin: 15% auto; text-align: center;">
            <h5>Are you sure you want to log in?</h5>
            <div class="mt-3 d-flex justify-content-center gap-2">
                <button onclick="submitLogout()" class="btn btn-danger">Sign out</button>
                <button onclick="hideLogoutConfirm()" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>
</body>

</html>