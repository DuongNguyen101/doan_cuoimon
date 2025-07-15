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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=person" />

    <!-- All CSS files -->
    <link rel="stylesheet" href="{{url('user')}}/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('user')}}/css/vendor/classic.css">
    <link rel="stylesheet" href="{{url('user')}}/css/vendor/classic.date.css">

    <link rel="stylesheet" href="{{url('user')}}/css/app.css">

</head>

<body class="tt-smooth-scroll">


    <!-- Main Wrapper Start -->
    <div id="scroll-container">
        <!-- Header Menu Start -->
        <header>
            <div class="header-section">
                <div class="header-top bg-color-primary">
                    <div class="header-start d-lg-block d-none">
                        <p class="fw-500 white">Welcome to Worldwide Electronic Store</p>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_7572_706)">
                                            <path d="M22.4042 12.3108C22.3076 12.1133 22.3076 11.8867 22.4042 11.6891L23.2993 9.85799C23.7977 8.83841 23.4028 7.62319 22.4003 7.0913L20.5999 6.13599C20.4056 6.03296 20.2724 5.84959 20.2344 5.63307L19.8823 3.62548C19.6862 2.5077 18.6523 1.75658 17.5288 1.91553L15.5107 2.201C15.2929 2.23175 15.0775 2.16172 14.9195 2.00886L13.4546 0.591743C12.6389 -0.197346 11.3611 -0.197393 10.5455 0.591743L9.08059 2.009C8.92253 2.16191 8.70714 2.2318 8.48936 2.20114L6.47126 1.91567C5.34744 1.75663 4.31385 2.50784 4.11778 3.62562L3.76565 5.63312C3.72764 5.84968 3.59447 6.03301 3.40027 6.13609L1.59981 7.09139C0.597345 7.62323 0.202473 8.83855 0.700845 9.85813L1.59592 11.6892C1.69248 11.8868 1.69248 12.1134 1.59592 12.3109L0.700798 14.1421C0.202426 15.1616 0.597298 16.3769 1.59976 16.9087L3.40022 17.864C3.59447 17.9671 3.72764 18.1505 3.76565 18.367L4.11778 20.3746C4.29628 21.3921 5.1688 22.1057 6.17159 22.1056C6.27036 22.1056 6.37058 22.0987 6.47131 22.0845L8.48941 21.799C8.70705 21.7681 8.92258 21.8383 9.08064 21.9911L10.5455 23.4083C10.9534 23.8028 11.4766 24.0001 12 24C12.5233 24 13.0469 23.8027 13.4546 23.4083L14.9195 21.9911C15.0776 21.8383 15.293 21.7684 15.5107 21.799L17.5288 22.0845C18.6528 22.2435 19.6862 21.4923 19.8823 20.3745L20.2345 18.367C20.2725 18.1505 20.4057 17.9671 20.5999 17.864L22.4003 16.9087C23.4028 16.3769 23.7977 15.1616 23.2993 14.142L22.4042 12.3108ZM21.7515 15.6859L19.9511 16.6412C19.377 16.9459 18.9833 17.4876 18.8711 18.1278L18.519 20.1353C18.4526 20.5135 18.103 20.7675 17.7227 20.7138L15.7046 20.4284C15.061 20.3372 14.4242 20.5443 13.9571 20.9962L12.4921 22.4132C12.2162 22.6801 11.7839 22.6801 11.5079 22.4132L10.043 20.9961C9.64824 20.6142 9.13215 20.4073 8.59338 20.4073C8.49466 20.4073 8.39514 20.4142 8.29549 20.4283L6.27739 20.7138C5.89742 20.7675 5.5475 20.5135 5.48113 20.1353L5.12896 18.1277C5.01665 17.4876 4.62299 16.9457 4.04892 16.6412L2.24846 15.6859C1.90928 15.5059 1.77568 15.0948 1.94429 14.7498L2.83941 12.9187C3.12478 12.3348 3.12478 11.6651 2.83941 11.0813L1.94429 9.25011C1.77568 8.90516 1.90928 8.49403 2.24846 8.31407L4.04892 7.35877C4.62295 7.05413 5.01665 6.51235 5.12891 5.87223L5.48104 3.86468C5.54741 3.48649 5.897 3.23243 6.2773 3.28615L8.29539 3.57162C8.93875 3.66269 9.57582 3.45565 10.0429 3.00382L11.5079 1.58671C11.7838 1.3198 12.2161 1.3198 12.4921 1.58671L13.957 3.00382C14.4241 3.4557 15.0611 3.66269 15.7045 3.57162L17.7226 3.28615C18.1026 3.23238 18.4525 3.48649 18.5189 3.86468L18.871 5.87227C18.9833 6.5124 19.377 7.05422 19.951 7.35877L21.7515 8.31407C22.0907 8.49403 22.2243 8.90516 22.0557 9.25011L21.1605 11.0812C20.8752 11.6651 20.8752 12.3348 21.1605 12.9186L22.0557 14.7497C22.2243 15.0948 22.0907 15.506 21.7515 15.6859Z" fill="#DD3842" />
                                            <path d="M17.057 6.94288C16.7867 6.6726 16.3485 6.6726 16.0782 6.94288L6.94282 16.0783C6.67254 16.3486 6.67254 16.7868 6.94282 17.0571C7.07796 17.1922 7.2551 17.2598 7.43219 17.2598C7.60929 17.2598 7.78647 17.1923 7.92157 17.0571L17.0569 7.92172C17.3273 7.65139 17.3273 7.21321 17.057 6.94288Z" fill="#DD3842" />
                                            <path d="M9.2316 5.77103C7.83229 5.77103 6.69385 6.90947 6.69385 8.30878C6.69385 9.70808 7.83229 10.8465 9.2316 10.8465C10.6309 10.8465 11.7693 9.70808 11.7693 8.30878C11.7693 6.90947 10.6309 5.77103 9.2316 5.77103ZM9.2316 9.46227C8.59555 9.46227 8.0781 8.94482 8.0781 8.30873C8.0781 7.67269 8.59555 7.15524 9.2316 7.15524C9.86764 7.15524 10.3851 7.67269 10.3851 8.30873C10.3851 8.94482 9.86764 9.46227 9.2316 9.46227Z" fill="#DD3842" />
                                            <path d="M14.7685 13.1535C13.3692 13.1535 12.2307 14.292 12.2307 15.6913C12.2307 17.0906 13.3692 18.229 14.7685 18.229C16.1678 18.229 17.3062 17.0906 17.3062 15.6913C17.3062 14.292 16.1678 13.1535 14.7685 13.1535ZM14.7685 16.8448C14.1324 16.8448 13.6149 16.3273 13.6149 15.6913C13.6149 15.0552 14.1324 14.5378 14.7685 14.5378C15.4045 14.5378 15.922 15.0552 15.922 15.6913C15.922 16.3273 15.4045 16.8448 14.7685 16.8448Z" fill="#DD3842" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7572_706">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p class="black fw-500">Sale 12% </p>
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

            <!-- Title Banner Start -->
            <section class="title-banner">
                <div class="container-fluid">
                    <div class="banner-wrapper">
                        <h1 class="dark-black fw-600">Checkout</h1>
                    </div>
                </div>
            </section>
            <!-- Title Banner End -->

            <!-- Billing Details Start -->
            <section class="billing-detail pb-40 mt-4">
                <div class="container-fluid">
                    <div class="row row-gap-4">
                        <div class="col-xl-8">
                            <div class="title-row title-row-2 bg-white mb-16">
                                <h5>Billing Details</h5>
                            </div>
                            <div class="billing-wrapper p-24 bg-white br-10 mb-40">
                                <form action="checkout.html" method="post" class="contact-form">
                                    <div class="row g-3">
                                        <!-- Name -->
                                        <div class="col-md-12">
                                            <label for="name" class="form-label">Your Name *</label>
                                            <div class="position-relative">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Your name" value="{{ old('name', $user->name ?? '') }}" required>
                                                <span class="position-absolute end-0 top-50 translate-middle-y pe-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                                        <path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email Address *</label>
                                            <div class="position-relative">
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" value="{{ old('email', $user->email ?? '') }}" required>
                                                <span class="position-absolute end-0 top-50 translate-middle-y pe-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                                        <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Phone -->
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Phone Number *</label>
                                            <div class="position-relative">
                                                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone Number" value="{{ old('phone', $user->phone ?? '') }}" required>
                                                <span class="position-absolute end-0 top-50 translate-middle-y pe-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                                        <path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- City -->
                                        <div class="col-md-4">
                                            <label for="city" class="form-label">City *</label>
                                            <div class="position-relative">
                                                <input type="text" name="city" value="{{ old('city', $userAddress->city ?? '') }}" class="form-control">
                                                <span class="position-absolute end-0 top-50 translate-middle-y pe-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                                        <path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- District -->
                                        <div class="col-md-4">
                                            <label for="district" class="form-label">District *</label>
                                            <div class="position-relative">
                                                <input type="text" name="district" value="{{ old('district', $userAddress->district ?? '') }}" class="form-control">
                                                <span class="position-absolute end-0 top-50 translate-middle-y pe-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                                        <path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Street -->
                                        <div class="col-md-4">
                                            <label for="street" class="form-label">Street *</label>
                                            <div class="position-relative">
                                                <input type="text" name="street" value="{{ old('street', $userAddress->street ?? '') }}" class="form-control">
                                                <span class="position-absolute end-0 top-50 translate-middle-y pe-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                                        <path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Order Notes -->
                                        <div class="col-md-12">
                                            <label for="notes" class="form-label">Order notes (optional)</label>
                                            <textarea name="notes" id="notes" rows="4" class="form-control" placeholder="Note about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Payment Method -->
                            <div class="title-row title-row-2 bg-white mb-16">
                                <h5>Payments Methods</h5>
                            </div>
                            <div class="shipping-radio-container bg-white">
                                <form action="tracking.html" method="post">
                                    <div class="plans mb-40">
                                        <label class="plan basic-plan" for="bank">
                                            <input checked type="radio" name="plan" id="bank">
                                            <span class="plan-content content-2">
                                                <img src="{{url('image/checkout/vnp.png')}}" alt="" width="49px">
                                                <span class="plan-details">
                                                    <span class="h6 fw-500 dark-black">VNPAY </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <!-- Payment Method -->
                        </div>
                        <div class="col-xl-4">
                            <div class="title-row title-row-2 mb-16">
                                <h5>Order Summary</h5>
                                @php $total = 0; @endphp

                                @foreach($cart as $productId => $item)
                                @php
                                $lineTotal = $item['price'] * $item['quantity'];
                                $total += $lineTotal;
                                @endphp
                                <div class="item-container d-flex justify-content-between align-items-center mb-3 mt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('image/shoplist/' . $item['image_url']) }}"
                                            alt="{{ $item['name'] }}"
                                            width="48" height="48"
                                            class="rounded border me-3" />

                                        <div>
                                            <div class="fw-semibold">{{ $item['name'] }}</div>
                                            <div class="text-muted small">Quantity: {{ $item['quantity'] }}</div>
                                        </div>
                                    </div>

                                    <div>
                                        <span class="fw-semibold text-dark">${{ number_format($lineTotal, 2) }}</span>
                                    </div>
                                </div>
                                @endforeach

                                <div class="hr-line mb-3 mt-3"></div>

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="mb-0 color-primary">TOTAL</h5>
                                    <h5 class="mb-0 color-primary">${{ number_format($total, 2) }}</h5>
                                </div>
                                <form action="{{ url('/template/user/shop/checkout') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="total" value="{{ $total * 100 }}">
                                    <input type="hidden" name="just_message" value="1">
                                    <button type="submit" class="cus-btn active-btn">Proceed to Checkout</button>
                                </form>

                                @if(session('check_email'))
                                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                    {{ session('check_email') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
            </section>
            <!-- Billing Details End -->

            <!-- Benefits Start -->
            <footer>
                <div class="container-fluid" style="background-color: #fff;">
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
                                    <a href="" class="d-flex align-items-center gap-2">
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
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                            <path
                                                d="M12.5696 24.5995C12.4901 24.5995 12.4106 24.5995 12.3306 24.5992C10.4494 24.6038 8.71118 24.556 7.02075 24.4531C5.47095 24.3588 4.05627 23.8232 2.92944 22.9043C1.84216 22.0178 1.09967 20.819 0.722656 19.3417C0.394531 18.0555 0.377136 16.793 0.360474 15.5719C0.348389 14.6957 0.335937 13.6575 0.333374 12.6017C0.335937 11.5416 0.348389 10.5033 0.360474 9.62719C0.377136 8.40624 0.394531 7.14373 0.722656 5.85742C1.09967 4.38012 1.84216 3.18133 2.92944 2.29473C4.05627 1.37591 5.47095 0.840326 7.02093 0.746026C8.71136 0.643304 10.4499 0.595331 12.3352 0.599908C14.217 0.59588 15.9546 0.643304 17.6451 0.746026C19.1949 0.840326 20.6096 1.37591 21.7364 2.29473C22.8238 3.18133 23.5662 4.38012 23.9432 5.85742C24.2713 7.14355 24.2887 8.40624 24.3054 9.62719C24.3174 10.5033 24.3301 11.5416 24.3325 12.5973V12.6017C24.3301 13.6575 24.3174 14.6957 24.3054 15.5719C24.2887 16.7928 24.2715 18.0553 23.9432 19.3417C23.5662 20.819 22.8238 22.0178 21.7364 22.9043C20.6096 23.8232 19.1949 24.3588 17.6451 24.4531C16.0262 24.5516 14.3633 24.5995 12.5696 24.5995ZM12.3306 23.1127C14.1813 23.1171 15.8805 23.0702 17.5312 22.9699C18.7031 22.8987 20.0854 22.13 20.9178 21.4512C21.6872 20.8237 22.2171 19.958 22.4927 18.878C22.7658 17.8074 22.7816 16.6579 22.7968 15.5463C22.8087 14.676 22.8211 13.6451 22.8237 12.5995C22.8211 11.5538 22.8087 10.5231 22.7968 9.65282C22.7816 8.54119 22.7658 7.39166 22.4927 6.32086C22.2171 5.2409 21.6872 4.37518 20.9178 3.74767C20.0854 3.06909 18.7031 2.32292 17.5312 2.2517C15.8805 2.15117 14.1813 2.10485 12.335 2.10887C10.4847 2.10448 8.78534 2.15667 7.13464 2.2572C5.96277 2.32843 4.70864 2.83101 3.87624 3.50959C3.10683 4.1371 2.43443 5.2409 2.15885 6.32086C1.88566 7.39166 1.86991 8.54101 1.85472 9.65282C1.84281 10.5239 1.83036 11.5553 1.8278 12.6017C1.83036 13.6436 1.84281 14.6752 1.85472 15.5463C1.86991 16.6579 1.88566 17.8074 2.15885 18.878C2.43443 19.958 2.96434 20.8237 3.73374 21.4512C4.56614 22.1298 5.96277 22.8987 7.13464 22.9699C8.78534 23.0704 10.4851 23.1173 12.3306 23.1127ZM12.2859 18.4589C9.05523 18.4589 6.42657 15.8304 6.42657 12.5995C6.42657 9.36864 9.05523 6.74017 12.2859 6.74017C15.5168 6.74017 18.1453 9.36864 18.1453 12.5995C18.1453 15.8304 15.5168 18.4589 12.2859 18.4589ZM12.335 8.1045C9.70055 8.1045 7.84651 9.95854 7.84651 12.5973C7.84651 14.7942 9.50773 17.1126 12.3091 17.1126C14.5062 17.1126 16.7904 15.0312 16.7904 12.5973C16.7904 10.4004 15.1143 8.1045 12.335 8.1045ZM18.8016 4.86517C18.025 4.86517 17.3953 5.49468 17.3953 6.27142C17.3953 7.04815 18.025 7.67767 18.8016 7.67767C19.5783 7.67767 20.2078 7.04815 20.2078 6.27142C20.2078 5.49468 19.5783 4.86517 18.8016 4.86517Z"
                                                fill="#0C0C0D" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
    <script src="{{url('user')}}/js/vendor/picker.js"></script>
    <script src="{{url('user')}}/js/vendor/picker.date.js"></script>
    <script src="{{url('user')}}/js/date.js"></script>
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