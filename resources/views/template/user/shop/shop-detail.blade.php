
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

</head>

<body class="tt-smooth-scroll">

     <!-- Preloader -->
     <div id="preloader">
        <div class="preloader">
            <svg class="cart" role="img" aria-label="Shopping cart line animation" viewBox="0 0 128 128" width="128px" height="128px" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="8">
                    <g class="cart__track" stroke="hsla(0,10%,10%,0.1)">
                        <polyline points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80" />
                        <circle cx="43" cy="111" r="13" />
                        <circle cx="102" cy="111" r="13" />
                    </g>
                    <g class="cart__lines" stroke="currentColor">
                        <polyline class="cart__top" points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80" stroke-dasharray="338 338" stroke-dashoffset="-338" />
                        <g class="cart__wheel1" transform="rotate(-90,43,111)">
                            <circle class="cart__wheel-stroke" cx="43" cy="111" r="13" stroke-dasharray="81.68 81.68" stroke-dashoffset="81.68" />
                        </g>
                        <g class="cart__wheel2" transform="rotate(90,102,111)">
                            <circle class="cart__wheel-stroke" cx="102" cy="111" r="13" stroke-dasharray="81.68 81.68" stroke-dashoffset="81.68" />
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </div>
    <!-- Preloader -->
    
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
                        <a href="contact.html" class="top-bar-links d-sm-flex d-none align-items-center gap-2">
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
                        <a href="tracking.html" class="top-bar-links d-flex align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <g clip-path="url(#clip0_7765_205)">
                                    <path
                                        d="M5.95035 13.125H5.95008C5.73434 13.125 5.55957 13.2999 5.55957 13.5156C5.55957 13.7313 5.73461 13.9063 5.95035 13.9063C6.16609 13.9063 6.34097 13.7313 6.34097 13.5156C6.34097 13.2999 6.16609 13.125 5.95035 13.125Z"
                                        fill="#FAFAFA" />
                                    <path
                                        d="M15.7945 13.125H15.7942C15.5784 13.125 15.4037 13.2999 15.4037 13.5156C15.4037 13.7313 15.5787 13.9063 15.7945 13.9063C16.0102 13.9063 16.1851 13.7313 16.1851 13.5156C16.1851 13.2999 16.0102 13.125 15.7945 13.125Z"
                                        fill="#FAFAFA" />
                                    <path
                                        d="M18.9191 8.43752H18.7649L17.5204 5.54862C17.4587 5.40534 17.3177 5.31253 17.1617 5.31253H14.2318V4.53128C14.2318 4.31558 14.0569 4.14066 13.8412 4.14066H2.82543C2.62227 4.14066 2.45301 4.29636 2.43617 4.49886L2.30731 6.04499H1.0675C0.851761 6.04499 0.676879 6.21991 0.676879 6.43561C0.676879 6.65131 0.851761 6.82624 1.0675 6.82624H2.24219L2.14859 7.94928H1.65344C1.4377 7.94928 1.26282 8.1242 1.26282 8.33991C1.26282 8.55561 1.4377 8.73053 1.65344 8.73053H2.08352L1.98992 9.85354H0.481567C0.265825 9.85354 0.0909424 10.0285 0.0909424 10.2442C0.0909424 10.4599 0.265825 10.6348 0.481567 10.6348H1.92481L1.65488 13.8738C1.64582 13.9827 1.68274 14.0904 1.75668 14.1708C1.83067 14.2512 1.93488 14.2969 2.04414 14.2969H3.74031C4.06277 15.2063 4.93164 15.8594 5.95019 15.8594C6.96874 15.8594 7.83761 15.2063 8.16007 14.2969H13.5844C13.9069 15.2063 14.7758 15.8594 15.7943 15.8594C16.8129 15.8594 17.6817 15.2063 18.0042 14.2969H19.7004C19.9161 14.2969 20.091 14.122 20.091 13.9063V9.60943C20.0909 8.94131 19.5872 8.43752 18.9191 8.43752ZM15.9899 6.09378H16.9046L17.9142 8.43752H15.9899V6.09378ZM3.18035 9.85354H2.77387L2.86746 8.73053H5.91472C6.13046 8.73053 6.30534 8.55561 6.30534 8.33991C6.30534 8.1242 6.13046 7.94928 5.91472 7.94928H2.93258L3.02617 6.82624H4.15691C4.37265 6.82624 4.54754 6.65131 4.54754 6.43561C4.54754 6.21991 4.37265 6.04499 4.15691 6.04499H3.09125L3.18484 4.9219H13.4506V11.7578H7.49882C7.08558 11.3933 6.54323 11.1719 5.95019 11.1719C5.35714 11.1719 4.8148 11.3933 4.40156 11.7578H2.6152L2.70879 10.6348H3.18035C3.39609 10.6348 3.57097 10.4599 3.57097 10.2442C3.57097 10.0285 3.39609 9.85354 3.18035 9.85354ZM2.46871 13.5156L2.55008 12.5391H3.81969C3.68281 12.8365 3.60644 13.1673 3.60644 13.5156H2.46871ZM5.95019 15.0781C5.08863 15.0781 4.38769 14.3772 4.38769 13.5156C4.38769 12.6541 5.08863 11.9531 5.95019 11.9531C6.81175 11.9531 7.51269 12.6541 7.51269 13.5156C7.51269 14.3772 6.81175 15.0781 5.95019 15.0781ZM8.29393 13.5156C8.29393 13.1673 8.21757 12.8365 8.08069 12.5391H13.6638C13.5269 12.8365 13.4506 13.1673 13.4506 13.5156H8.29393ZM15.7943 15.0781C14.9327 15.0781 14.2318 14.3772 14.2318 13.5156C14.2318 12.6541 14.9327 11.9531 15.7943 11.9531C16.6558 11.9531 17.3568 12.6541 17.3568 13.5156C17.3568 14.3772 16.6558 15.0781 15.7943 15.0781ZM19.3097 13.5156H18.138C18.138 13.1673 18.0617 12.8365 17.9248 12.5391H19.3097V13.5156H19.3097ZM19.3097 11.7578H17.3429C16.9297 11.3933 16.3873 11.1719 15.7943 11.1719C15.2012 11.1719 14.6589 11.3933 14.2456 11.7578H14.2318V6.09378H15.2086V8.82815C15.2086 9.04385 15.3835 9.21877 15.5993 9.21877H18.9191C19.16 9.21877 19.3097 9.36846 19.3097 9.6094V11.7578Z"
                                        fill="#FAFAFA" />
                                    <path
                                        d="M7.75232 6.43561C7.75232 6.21991 7.57744 6.04499 7.3617 6.04499H5.91467C5.69893 6.04499 5.52405 6.21991 5.52405 6.43561C5.52405 6.65132 5.69893 6.82624 5.91467 6.82624H7.3617C7.57744 6.82624 7.75232 6.65132 7.75232 6.43561Z"
                                        fill="#FAFAFA" />
                                    <path
                                        d="M7.28186 8.33991C7.28186 8.55561 7.45674 8.73053 7.67248 8.73053H8.396C8.61174 8.73053 8.78662 8.55561 8.78662 8.33991C8.78662 8.1242 8.61174 7.94928 8.396 7.94928H7.67248C7.45674 7.94928 7.28186 8.12416 7.28186 8.33991Z"
                                        fill="#FAFAFA" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_7765_205">
                                        <rect width="20" height="20" fill="white" transform="translate(0.0909424)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <p class="fw-500 white"> Order Tracking</p>
                        </a>
                        <div class="d-sm-block d-none">
                            <a href="about.html"><span class="fw-500 top-bar-links">FAQs</span></a>
                        </div>
                        <div class="vr-line d-sm-block d-none">
                        </div>
                        <div class="drop-container">
                            <div class="wrapper-dropdown white" id="dropdown">
                                <span class="selected-display" id="destination">English</span>
                                <svg id="drp-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="arrow transition-all ml-auto rotate-180">
                                    <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <ul class="topbar-dropdown bg-lightest-gray">
                                    <li class="item dark-black">English</li>
                                    <li class="item dark-black">Spanish</li>
                                    <li class="item dark-black">Italian</li>
                                    <li class="item dark-black">Arabic</li>
                                </ul>
                            </div>
                        </div>
                        <div class="drop-container">
                            <div class="wrapper-dropdown white" id="dropdown2">
                                <span class="selected-display" id="destination2">USD</span>
                                <svg id="drp-arrow2" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="arrow transition-all ml-auto rotate-180">
                                    <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <ul class="topbar-dropdown bg-lightest-gray">
                                    <li class="item dark-black">USD</li>
                                    <li class="item dark-black">AED </li>
                                    <li class="item dark-black">EUR</li>
                                    <li class="item dark-black">GBP</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container-fluid">
                    <div class="header-center">
                        <a href="index.html" class="header-logo">
                            <img src="{{url('user')}}/media/logo.png" alt="">
                        </a>
                        <div class="mixin-container d-xl-flex d-none">
                            <div class="drop-container">
                                <div class="wrapper-dropdown" id="dropdown3">
                                    <span class="selected-display black fw-500" id="destination3">All Categories</span>
                                    <svg id="drp-arrow3" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="arrow transition-all ml-auto rotate-180">
                                        <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    <ul class="topbar-dropdown bg-lightest-gray box-shadow-1">
                                        <li class="item dark-black">Digital & Electronics</li>
                                        <li class="item dark-black">Camera & Photo</li>
                                        <li class="item dark-black">Computer Hardware</li>
                                        <li class="item dark-black">Gamepad & Console</li>
                                        <li class="item dark-black">Headphone & Speaker</li>
                                        <li class="item dark-black">Laptop & Computer</li>
                                        <li class="item dark-black">Smartphone & Tablet</li>
                                        <li class="item dark-black">TV & Audio</li>
                                        <li class="item dark-black">Watches & Eyewear</li>
                                        <li class="item dark-black">Fan & AC</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="vr-line vr-line-2"></div>
                            <form action="index.html" method="post">
                                <div class="input-field">
                                    <input type="text" name="search" id="searchInput" class="form-control" placeholder="Search for products...">
                                    <button type="submit" class="cus-btn">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="header-buttons">
                            <a href="register.html" class="button-block align-items-sm-unset align-items-end">
                                <img src="{{url('user')}}/media/users/user-3.png" alt="" class="user">
                                <div>
                                    <p>Login</p>
                                    <h6>Account</h6>
                                </div>
                            </a>
                            <a href="wishlist.html" class="button-block d-sm-flex d-none">
                                <img src="{{url('user')}}/media/icons/wishlist.png" alt="">
                            </a>
                            <a href="#" class="button-block d-sm-flex d-none cart-button">
                                <img src="{{url('user')}}/media/icons/cart.png" alt="">
                                <div>
                                    <p>Your Cart</p>
                                    <h6>$120.00</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mixin-container d-xl-none d-flex">
                        <div class="drop-container">
                            <div class="wrapper-dropdown" id="dropdown4">
                                <span class="selected-display black fw-500" id="destination4">All Categories</span>
                                <svg id="drp-arrow4" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="arrow transition-all ml-auto rotate-180">
                                    <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <ul class="topbar-dropdown bg-lightest-gray box-shadow-1">
                                    <li class="item dark-black">Digital & Electronics</li>
                                    <li class="item dark-black">Camera & Photo</li>
                                    <li class="item dark-black">Computer Hardware</li>
                                    <li class="item dark-black">Gamepad & Console</li>
                                    <li class="item dark-black">Headphone & Speaker</li>
                                    <li class="item dark-black">Laptop & Computer</li>
                                    <li class="item dark-black">Smartphone & Tablet</li>
                                    <li class="item dark-black">TV & Audio</li>
                                    <li class="item dark-black">Watches & Eyewear</li>
                                    <li class="item dark-black">Fan & AC</li>
                                </ul>
                            </div>
                        </div>
                        <div class="vr-line vr-line-2"></div>
                        <div class="input-field">
                            <input type="text" name="search" id="searchInput2" class="form-control" placeholder="Search for products...">
                            <button type="submit" class="cus-btn">Search</button>
                        </div>
                    </div>
                    
                    <div class="header-bottom-area">
                        <nav class="navigation d-flex align-items-center justify-content-between">
                            <!-- Categories Dropdown -->
                            <div class="nav-container">
                                <nav class="all-category-nav">
                                    <label class="open-menu-all" for="open-menu-all">
                                        <input class="input-menu-all" id="open-menu-all" type="checkbox" name="menu-open">
                                        <span class="all-navigator"><i class="fa-solid fa-bars"></i> <span>Browse All Categories</span>
                                        </span>
                                        <span class="all-category-list list-unstyled">
                                            <span class="all-category-list-item"><a href="shop-grid-1.html"
                                                    class="all-category-list-link dark-black fw-500">Value Of The Day
                                                 </a>
                                            </span>
                                            <span class="all-category-list-item"><a href="shop-grid-1.html"
                                                    class="all-category-list-link dark-black fw-500">Top 100 Offers</a></span>
                                            <span class="all-category-list-item"><a href="shop-grid-1.html"
                                                    class="all-category-list-link dark-black fw-500">New Arrivals</a></span>
                                            <span class="all-category-list-item"><a href="javascript:;" class="all-category-list-link d-flex align-items-center justify-content-between">Laptop & Computer<i class="fas fa-angle-right" aria-hidden="true"></i></a>
                                                <span class="category-second-list">
                                                    <span class="sub-menu-main-wrapper">
                                                        <span class="wrapper-1">
                                                            <span class="category-second-list-ul list-unstyled mb-40">
                                                                <span class="dark-black fw-500 mb-16">Brands</span>
                                                                <span class="category-second-item"><a href="">Apple </a></span>
                                                                <span class="category-second-item"><a href="">Dell</a></span>
                                                                <span class="category-second-item"><a href="">Asus </a></span>
                                                                <span class="category-second-item"><a href="">Acer </a></span>
                                                                <span class="category-second-item"><a href="">MSI </a></span>
                                                                <span class="category-second-item"><a href="">Lenovo </a></span>
                                                            </span>
                                                            <span class="category-second-list-ul list-unstyled">
                                                                <span class="dark-black fw-500 mb-16">Devices</span>
                                                                <span class="category-second-item"><a href="">Printer and Ink</a></span>
                                                                <span class="category-second-item"><a href="">Project and Screen</a></span>
                                                                <span class="category-second-item"><a href="">Network Adaptor</a></span>
                                                                <span class="category-second-item"><a href="">Photocopy and Scanner</a></span>
                                                            </span>
                                                        </span>
                                                        <span class="wrapper-1">
                                                            <span class="category-second-list-ul list-unstyled mb-40">
                                                                <span class="dark-black fw-500 mb-16">Models</span>
                                                                <span class="category-second-item"><a href="">Office Computer</a></span>
                                                                <span class="category-second-item"><a href="">Business Computer</a></span>
                                                                <span class="category-second-item"><a href="">Gaming Computer</a></span>
                                                                <span class="category-second-item"><a href="">Programming Computer</a></span>
                                                            </span>
                                                            <span class="category-second-list-ul list-unstyled">
                                                                <span class="dark-black fw-500 mb-16">Prices</span>
                                                                <span class="category-second-item"><a href="">Up to $200</a></span>
                                                                <span class="category-second-item"><a href="">$500 to $1000</a></span>
                                                                <span class="category-second-item"><a href="">$1000 to $2000</a></span>
                                                                <span class="category-second-item"><a href="">$2000 to $3000</a></span>
                                                                <span class="category-second-item"><a href="">$3000 to $4000</a></span>
                                                                <span class="category-second-item"><a href="">$4000 to $5000</a></span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="img-product-menu">
                                                        <span class="image-content">
                                                            <span class="h6 d-block fw-400 white mb-4p">LCD</span>
                                                            <span class="h6 d-block fw-500 white mb-24">Radient View LCD</span>
                                                            <span class="d-block text-16 white mb-4p">Just from:</span>
                                                            <span class="d-block h4 color-ter mb-32">$840.99</span>
                                                            <a href="shop-list-1.html" class="cus-btn-3 sec">Shop Now</a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="all-category-list-item"><a href="javascript:;" class="all-category-list-link d-flex align-items-center justify-content-between">Computer Hardware<i class="fas fa-angle-right" aria-hidden="true"></i></a>
                                                <span class="category-second-list">
                                                    <span class="sub-menu-main-wrapper">
                                                        <span class="wrapper-1">
                                                            <span class="category-second-list-ul list-unstyled mb-40">
                                                                <span class="dark-black fw-500 mb-16">Hardware</span>
                                                                <span class="category-second-item"><a href="">CPU, Processor </a></span>
                                                                <span class="category-second-item"><a href="">Motherboard</a></span>
                                                                <span class="category-second-item"><a href="">RAM, Memory</a></span>
                                                                <span class="category-second-item"><a href="">VGA, Graphic Card </a></span>
                                                                <span class="category-second-item"><a href="">PSU, Power Supply</a></span>
                                                                <span class="category-second-item"><a href="">Cooling Systems</a></span>
                                                            </span>
                                                            <span class="category-second-list-ul list-unstyled">
                                                                <span class="dark-black fw-500 mb-16">Others</span>
                                                                <span class="category-second-item"><a href="">Security</a></span>
                                                                <span class="category-second-item"><a href="">Barcode Scanner</a></span>
                                                                <span class="category-second-item"><a href="">Attendence Machines</a></span>
                                                                <span class="category-second-item"><a href="">Bill Counters</a></span>
                                                            </span>
                                                        </span>
                                                        <span class="wrapper-1">
                                                            <span class="category-second-list-ul list-unstyled mb-40">
                                                                <span class="dark-black fw-500 mb-16">Peripherals</span>
                                                                <span class="category-second-item"><a href="">Mointer</a></span>
                                                                <span class="category-second-item"><a href="">Mouse</a></span>
                                                                <span class="category-second-item"><a href="">Keyboard</a></span>
                                                                <span class="category-second-item"><a href="">Microphone</a></span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="img-product-menu v-2">
                                                        <span class="image-content">
                                                            <span class="d-block h6 fw-400 white mb-4p">LAPTOP</span>
                                                            <span class="d-block h6 fw-500 white mb-24">MACBOOK M1</span>
                                                            <span class="d-block text-16 white mb-4p">Just from:</span>
                                                            <span class="d-block h4 color-ter mb-32">$340.99</span>
                                                            <a href="shop-list-1.html" class="cus-btn-3 sec">Shop Now</a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="all-category-list-item"><a href="shop-grid-2.html" class="all-category-list-link">Camera & Photo</a></span>
                                            <span class="all-category-list-item"><a href="javascript:;" class="all-category-list-link d-flex align-items-center justify-content-between">Smartphone & Tablets<i class="fas fa-angle-right" aria-hidden="true"></i></a>
                                                <span class="category-second-list">
                                                    <span class="sub-menu-main-wrapper">
                                                        <span class="wrapper-1">
                                                            <span class="category-second-list-ul list-unstyled mb-40">
                                                                <span class="dark-black fw-500 mb-16">Brands</span>
                                                                <span class="category-second-item"><a href="">Apple </a></span>
                                                                <span class="category-second-item"><a href="">Samsung</a></span>
                                                                <span class="category-second-item"><a href="">Xiaomi</a></span>
                                                                <span class="category-second-item"><a href="">Oppo </a></span>
                                                                <span class="category-second-item"><a href=""> Huawei</a></span>
                                                                <span class="category-second-item"><a href="">Nokia </a></span>
                                                                <span class="category-second-item"><a href="">Vivo </a></span>
                                                            </span>
                                
                                                            <span class="category-second-list-ul list-unstyled">
                                                                <span class="dark-black fw-500 mb-16">Display Sizes</span>
                                                                <span class="category-second-item"><a href="">Up to 6 Inches</a></span>
                                                                <span class="category-second-item"><a href="">6 Inch - 8 Inch</a></span>
                                                                <span class="category-second-item"><a href="">8 Inch - 10 Inch</a></span>
                                                            </span>
                                
                                                        </span>
                                                        <span class="wrapper-1">
                                                            <span class="category-second-list-ul list-unstyled mb-40">
                                                                <span class="dark-black fw-500 mb-16">Conditions</span>
                                                                <span class="category-second-item"><a href="">All New</a></span>
                                                                <span class="category-second-item"><a href="">Renewed</a></span>
                                                                <span class="category-second-item"><a href="">Refurbished</a></span>
                                                                <span class="category-second-item"><a href="">Used</a></span>
                                                            </span>
                                                            <span class="category-second-list-ul list-unstyled">
                                                                <span class="dark-black fw-500 mb-16">Prices</span>
                                                                <span class="category-second-item"><a href="">Up to $200</a></span>
                                                                <span class="category-second-item"><a href="">$500 to $1000</a></span>
                                                                <span class="category-second-item"><a href="">$1000 to $2000</a></span>
                                                                <span class="category-second-item"><a href="">$2000 to $3000</a></span>
                                                                <span class="category-second-item"><a href="">$3000 to $4000</a></span>
                                                                <span class="category-second-item"><a href="">$4000 to $5000</a></span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="img-product-menu v-3">
                                                        <span class="image-content">
                                                            <span class="d-block h6 fw-400 white mb-4p">MOBIME</span>
                                                            <span class="d-block h6 fw-500 white mb-24">Mobile Phone</span>
                                                            <span class="text-16 white mb-4p">Just from:</span>
                                                            <span class="d-block h4 color-ter mb-32">$500.99</span>
                                                            <a href="shop-list-1.html" class="cus-btn-3 sec">Shop Now</a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="all-category-list-item"><a href="javascript:;" class="all-category-list-link d-flex align-items-center justify-content-between">TV & Audio<i class="fas fa-angle-right" aria-hidden="true"></i></a>
                                                <span class="category-second-list">
                                                    <span class="sub-menu-main-wrapper">
                                                        <span class="wrapper-1">
                                                            <span class="category-second-list-ul list-unstyled mb-40">
                                                                <span class="dark-black fw-500 mb-16">Brands</span>
                                                                <span class="category-second-item"><a href="">Sony </a></span>
                                                                <span class="category-second-item"><a href="">LG</a></span>
                                                                <span class="category-second-item"><a href="">Samsung </a></span>
                                                                <span class="category-second-item"><a href="">Panasonic</a></span>
                                                                <span class="category-second-item"><a href="">Toshiba </a></span>
                                                            </span>
                                                            <span class="category-second-list-ul list-unstyled">
                                                                <span class="dark-black fw-500 mb-16">Department</span>
                                                                <span class="category-second-item"><a href="">Smart TVs</a></span>
                                                                <span class="category-second-item"><a href="">LED TVs</a></span>
                                                                <span class="category-second-item"><a href="">Curved TVs</a></span>
                                                                <span class="category-second-item"><a href="">OLED TVs</a></span>
                                                                <span class="category-second-item"><a href="">Plasma TVs</a></span>
                                                                <span class="category-second-item"><a href="">Smart TVs 4K</a></span>
                                                            </span>
                                                        </span>
                                                        <span class="wrapper-1">
                                                            <span class="category-second-list-ul list-unstyled">
                                                                <span class="dark-black fw-500 mb-16">Prices</span>
                                                                <span class="category-second-item"><a href="">Up to $200</a></span>
                                                                <span class="category-second-item"><a href="">$500 to $1000</a></span>
                                                                <span class="category-second-item"><a href="">$1000 to $2000</a></span>
                                                                <span class="category-second-item"><a href="">$2000 to $3000</a></span>
                                                                <span class="category-second-item"><a href="">$3000 to $4000</a></span>
                                                                <span class="category-second-item"><a href="">$4000 to $5000</a></span>
                                                                <span class="category-second-item"><a href="">$5000 to $6000</a></span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="img-product-menu v-4">
                                                        <span class="image-content">
                                                            <span class="d-block h6 fw-400 white mb-4p">HEADPHONE</span>
                                                            <span class="d-block h6 fw-500 white mb-24">Bass Headphones</span>
                                                            <span class="text-16 white mb-4p">Just from:</span>
                                                            <span class="d-block h4 color-ter mb-32">$180.00</span>
                                                            <a href="shop-list-1.html" class="cus-btn-3 sec">Shop Now</a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="all-category-list-item"><a href="shop-grid-3.html" class="all-category-list-link">Home &
                                                    Electronic</a></span>
                                            <span class="all-category-list-item"><a href="shop-grid-4.html" class="all-category-list-link">Headphone &
                                                    Speakers</a>
                                            </span>
                                            <span class="all-category-list-item"><a href="shop-grid-sidebar-1.html"
                                                    class="all-category-list-link">Watches & Eyewear</a></span>
                                            <span class="all-category-list-item"><a href="shop-grid-sidebar-2.html"
                                                    class="all-category-list-link">Gamepad & Console</a></span>
                                        </span>
                                    </label>
                                </nav>
                            </div>
                            <!-- Categories Dropdown -->
                            <div class="menu-button-right">
                                <div class="main-menu__nav">
                                    <ul class="main-menu__list">
                                        <li>
                                            <a href="index.html">Home Page</a>
                                        </li>
                                        <li>
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <!--  -->
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="active">Shop</a>
                                            <ul class="sub-menu">
                                                <li class="dropdown">
                                                    <a href="javascript:void(0);">Shop Grid</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="shop-grid-1.html">Shop Grid 1</a></li>
                                                        <li><a href="shop-grid-2.html">Shop Grid 2</a></li>
                                                        <li><a href="shop-grid-3.html">Shop Grid 3</a></li>
                                                        <li><a href="shop-grid-4.html">Shop Grid 4</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="javascript:void(0);">Shop Grid with Sidebar</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="shop-grid-sidebar-1.html">Shop Grid Sidebar 1</a></li>
                                                        <li><a href="shop-grid-sidebar-2.html">Shop Grid Sidebar 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="javascript:void(0);">Shop List</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="shop-list-1.html">Shop List 1</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="javascript:void(0);">Shop List with Sidebar</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="shop-list-sidebar-1.html">Shop List Sidebar 1</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop-detail.html">Shop Detail 1</a></li>
                                                <li><a href="shop-detail-2.html" class="active">Shop Detail 2</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>

                                        <!--  -->
                                        <li class="dropdown">
                                            <a href="javascript:void(0);">Blogs</a>
                                            <ul>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-grid-sidebar-1.html">Blog Grid Sidebar 1</a></li>
                                                <li><a href="blog-grid-sidebar-2.html">Blog Grid Sidebar 2</a></li>
                                                <li><a href="blog-list-sidebar-1.html">Blog List Sidebar 1</a></li>
                                                <li><a href="blog-detail.html">Blog Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="javascript:void(0);">Pages</a>
                                            <ul>
                                                <li><a href="tracking.html" >Tracking</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="main-menu__right">
                                <div class="d-sm-flex d-none gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_7572_706)">
                                          <path d="M22.4042 12.3108C22.3076 12.1133 22.3076 11.8867 22.4042 11.6891L23.2993 9.85799C23.7977 8.83841 23.4028 7.62319 22.4003 7.0913L20.5999 6.13599C20.4056 6.03296 20.2724 5.84959 20.2344 5.63307L19.8823 3.62548C19.6862 2.5077 18.6523 1.75658 17.5288 1.91553L15.5107 2.201C15.2929 2.23175 15.0775 2.16172 14.9195 2.00886L13.4546 0.591743C12.6389 -0.197346 11.3611 -0.197393 10.5455 0.591743L9.08059 2.009C8.92253 2.16191 8.70714 2.2318 8.48936 2.20114L6.47126 1.91567C5.34744 1.75663 4.31385 2.50784 4.11778 3.62562L3.76565 5.63312C3.72764 5.84968 3.59447 6.03301 3.40027 6.13609L1.59981 7.09139C0.597345 7.62323 0.202473 8.83855 0.700845 9.85813L1.59592 11.6892C1.69248 11.8868 1.69248 12.1134 1.59592 12.3109L0.700798 14.1421C0.202426 15.1616 0.597298 16.3769 1.59976 16.9087L3.40022 17.864C3.59447 17.9671 3.72764 18.1505 3.76565 18.367L4.11778 20.3746C4.29628 21.3921 5.1688 22.1057 6.17159 22.1056C6.27036 22.1056 6.37058 22.0987 6.47131 22.0845L8.48941 21.799C8.70705 21.7681 8.92258 21.8383 9.08064 21.9911L10.5455 23.4083C10.9534 23.8028 11.4766 24.0001 12 24C12.5233 24 13.0469 23.8027 13.4546 23.4083L14.9195 21.9911C15.0776 21.8383 15.293 21.7684 15.5107 21.799L17.5288 22.0845C18.6528 22.2435 19.6862 21.4923 19.8823 20.3745L20.2345 18.367C20.2725 18.1505 20.4057 17.9671 20.5999 17.864L22.4003 16.9087C23.4028 16.3769 23.7977 15.1616 23.2993 14.142L22.4042 12.3108ZM21.7515 15.6859L19.9511 16.6412C19.377 16.9459 18.9833 17.4876 18.8711 18.1278L18.519 20.1353C18.4526 20.5135 18.103 20.7675 17.7227 20.7138L15.7046 20.4284C15.061 20.3372 14.4242 20.5443 13.9571 20.9962L12.4921 22.4132C12.2162 22.6801 11.7839 22.6801 11.5079 22.4132L10.043 20.9961C9.64824 20.6142 9.13215 20.4073 8.59338 20.4073C8.49466 20.4073 8.39514 20.4142 8.29549 20.4283L6.27739 20.7138C5.89742 20.7675 5.5475 20.5135 5.48113 20.1353L5.12896 18.1277C5.01665 17.4876 4.62299 16.9457 4.04892 16.6412L2.24846 15.6859C1.90928 15.5059 1.77568 15.0948 1.94429 14.7498L2.83941 12.9187C3.12478 12.3348 3.12478 11.6651 2.83941 11.0813L1.94429 9.25011C1.77568 8.90516 1.90928 8.49403 2.24846 8.31407L4.04892 7.35877C4.62295 7.05413 5.01665 6.51235 5.12891 5.87223L5.48104 3.86468C5.54741 3.48649 5.897 3.23243 6.2773 3.28615L8.29539 3.57162C8.93875 3.66269 9.57582 3.45565 10.0429 3.00382L11.5079 1.58671C11.7838 1.3198 12.2161 1.3198 12.4921 1.58671L13.957 3.00382C14.4241 3.4557 15.0611 3.66269 15.7045 3.57162L17.7226 3.28615C18.1026 3.23238 18.4525 3.48649 18.5189 3.86468L18.871 5.87227C18.9833 6.5124 19.377 7.05422 19.951 7.35877L21.7515 8.31407C22.0907 8.49403 22.2243 8.90516 22.0557 9.25011L21.1605 11.0812C20.8752 11.6651 20.8752 12.3348 21.1605 12.9186L22.0557 14.7497C22.2243 15.0948 22.0907 15.506 21.7515 15.6859Z" fill="#DD3842"/>
                                          <path d="M17.057 6.94288C16.7867 6.6726 16.3485 6.6726 16.0782 6.94288L6.94282 16.0783C6.67254 16.3486 6.67254 16.7868 6.94282 17.0571C7.07796 17.1922 7.2551 17.2598 7.43219 17.2598C7.60929 17.2598 7.78647 17.1923 7.92157 17.0571L17.0569 7.92172C17.3273 7.65139 17.3273 7.21321 17.057 6.94288Z" fill="#DD3842"/>
                                          <path d="M9.2316 5.77103C7.83229 5.77103 6.69385 6.90947 6.69385 8.30878C6.69385 9.70808 7.83229 10.8465 9.2316 10.8465C10.6309 10.8465 11.7693 9.70808 11.7693 8.30878C11.7693 6.90947 10.6309 5.77103 9.2316 5.77103ZM9.2316 9.46227C8.59555 9.46227 8.0781 8.94482 8.0781 8.30873C8.0781 7.67269 8.59555 7.15524 9.2316 7.15524C9.86764 7.15524 10.3851 7.67269 10.3851 8.30873C10.3851 8.94482 9.86764 9.46227 9.2316 9.46227Z" fill="#DD3842"/>
                                          <path d="M14.7685 13.1535C13.3692 13.1535 12.2307 14.292 12.2307 15.6913C12.2307 17.0906 13.3692 18.229 14.7685 18.229C16.1678 18.229 17.3062 17.0906 17.3062 15.6913C17.3062 14.292 16.1678 13.1535 14.7685 13.1535ZM14.7685 16.8448C14.1324 16.8448 13.6149 16.3273 13.6149 15.6913C13.6149 15.0552 14.1324 14.5378 14.7685 14.5378C15.4045 14.5378 15.922 15.0552 15.922 15.6913C15.922 16.3273 15.4045 16.8448 14.7685 16.8448Z" fill="#DD3842"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_7572_706">
                                            <rect width="24" height="24" fill="white"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                    <p class="black fw-500">Sale $20 off Your First Order</p>
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
                                    <div class="product-slider-asnav asnav-2">
                                        <div class="nav-image">
                                            <img src="{{url('user')}}/media/products/nav-image-1.png" alt="">
                                        </div>
                                        <div class="nav-image">
                                            <img src="{{url('user')}}/media/products/nav-image-2.png" alt="">
                                        </div>
                                        <div class="nav-image">
                                            <img src="{{url('user')}}/media/products/nav-image-3.png" alt="">
                                        </div>
                                        <div class="nav-image">
                                            <img src="{{url('user')}}/media/products/nav-image-4.png" alt="">
                                        </div>
                                    </div>
                                    <div class="product-slider slider-2">
                                        <div class="detail-image detail-2">
                                            <img src="{{url('user')}}/media/products/large-image-1.png" alt="">
                                        </div>
                                        <div class="detail-image detail-2">
                                            <img src="{{url('user')}}/media/products/large-image-2.png" alt="">
                                        </div>
                                        <div class="detail-image detail-2">
                                            <img src="{{url('user')}}/media/products/large-image-3.png" alt="">
                                        </div>
                                        <div class="detail-image detail-2">
                                            <img src="{{url('user')}}/media/products/large-image-4.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="product-text-container bg-white br-20">
                                    <h3 class="fw-700 mb-16">Nexus Mobile Pro 256GB</h3>
                                    <div class="d-flex align-items-center flex-wrap gap-16 mb-24">
                                        <h5 class="color-sec">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(02 Reviews)</span></h5>
                                        <div class="vr-line vr-line-2"></div>
                                        <p class="light-gray">Brand: <span class="color-primary">Beast</span></p>
                                        <div class="vr-line vr-line-2"></div>
                                        <p class="light-gray">SKU: <span class="light-black">3, 24, 672</span></p>
                                    </div>
                                    <div class="d-flex align-items-center gap-16 mb-24">
                                        <p class="light-gray text-decoration-line-through">$450.00</p>
                                        <h5>$400.00</h5>
                                        <span class="label white">-12%</span>
                                    </div>
                                    <p class="light-gray mb-24">
                                        Lorem ipsum dolor sit amet consectetur. Purus nulla nec in ac malesuada et nisi ipsum.
                                        Massa scelerisque commodo nam
                                        elementum fermentum sed sit.
                                    </p>
                                    <div class="d-flex align-items-center gap-24 mb-24">
                                        <h6>Size:</h6>
                                        <div class="drop-container bg-lightest-gray p-8-12 br-5">
                                            <div class="wrapper-dropdown black" id="dropdown-02">
                                                <span class="selected-display" id="destination-02">256GB</span>
                                                <svg id="drp-arrow-02" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_7951_48322)">
                                                        <g clip-path="url(#clip1_7951_48322)">
                                                            <path
                                                                d="M0.0742188 4.01306L8.07424 11.987L16.0742 4.01306H0.0742188Z"
                                                                fill="#141516" />
                                                        </g>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_7951_48322">
                                                            <rect width="16" height="16" fill="white" />
                                                        </clipPath>
                                                        <clipPath id="clip1_7951_48322">
                                                            <rect width="16" height="16" fill="white"
                                                                transform="translate(0.0742188)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
        
                                                <ul class="topbar-dropdown bg-lightest-gray">
                                                    <li class="item dark-black">512GB</li>
                                                    <li class="item dark-black">256GB</li>
                                                    <li class="item dark-black">128GB</li>
                                                    <li class="item dark-black">64GB</li>
                                                    <li class="item dark-black">32GB</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-block mb-24">
                                        <h6 class="mb-24">Color:</h6>
                                        <div class="product-color">
                                            <ul class="unstyled list">
                                                <li>
                                                    <label for="muhRadio1"
                                                        class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                        <input type="radio" id="muhRadio1" name="muhRadio" class="radio-1"
                                                            value="muhRadio1">
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="muhRadio2"
                                                        class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                        <input type="radio" id="muhRadio2" name="muhRadio" class="radio-2"
                                                            value="muhRadio2">
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="muhRadio3"
                                                        class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                        <input type="radio" id="muhRadio3" name="muhRadio" class="radio-3"
                                                            value="muhRadio3">
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="muhRadio4"
                                                        class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                        <input type="radio" id="muhRadio4" name="muhRadio" class="radio-4"
                                                            value="muhRadio4">
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="muhRadio5"
                                                        class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                        <input type="radio" id="muhRadio5" name="muhRadio" class="radio-5"
                                                            value="muhRadio5">
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="muhRadio6"
                                                        class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                        <input type="radio" id="muhRadio6" name="muhRadio" class="radio-6"
                                                            value="muhRadio6">
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="muhRadio7"
                                                        class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                        <input type="radio" id="muhRadio7" name="muhRadio" class="radio-7"
                                                            value="muhRadio7">
                                                    </label>
                                                </li>
                                            </ul>
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
                                                <li>
                                                    <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_7951_48348)">
                                                                <g clip-path="url(#clip1_7951_48348)">
                                                                    <path
                                                                        d="M19.5508 24.4844C19.3083 24.4844 19.0659 24.3908 18.8823 24.2042C18.5193 23.835 18.5243 23.2414 18.8935 22.8784L22.0446 19.7799C22.2199 19.6043 22.3164 19.3715 22.3164 19.1241C22.3164 18.8774 22.2205 18.6454 22.0462 18.4699L18.897 15.4064C18.0386 14.5069 19.2826 13.2294 20.2045 14.0624L23.3587 17.1309C23.3614 17.1336 23.3642 17.1362 23.3668 17.1389C23.8986 17.6691 24.1914 18.3741 24.1914 19.1242C24.1914 19.8742 23.8985 20.5792 23.3668 21.1093C23.3653 21.1108 23.3637 21.1123 23.3622 21.1139L20.208 24.2154C20.0255 24.3949 19.7881 24.4844 19.5508 24.4844ZM19.5508 19.9844H5.81641C2.71478 19.9844 0.191406 17.461 0.191406 14.3594V11.9688C0.237484 10.7262 2.02075 10.7271 2.06641 11.9688V14.3594C2.06641 16.4271 3.74866 18.1094 5.81641 18.1094H19.5508C20.7933 18.1555 20.7924 19.9387 19.5508 19.9844ZM23.2539 13.9375C22.7361 13.9375 22.3164 13.5178 22.3164 13V10.6094C22.3164 8.54164 20.6342 6.85939 18.5664 6.85939H4.83203C3.58947 6.81331 3.59041 5.03004 4.83203 4.98439H18.5664C21.668 4.98439 24.1914 7.50776 24.1914 10.6094V13C24.1914 13.5178 23.7717 13.9375 23.2539 13.9375ZM4.83194 11.1719C4.59634 11.1719 4.36052 11.0837 4.17831 10.9063L1.02409 7.83785C1.02133 7.83518 1.01861 7.83251 1.01594 7.82979C0.484234 7.29968 0.191406 6.59468 0.191406 5.84464C0.191406 5.09459 0.484234 4.38954 1.01594 3.85948C1.01748 3.85793 1.01898 3.85643 1.02053 3.85493L4.17475 0.7534C4.54394 0.3904 5.13752 0.395369 5.50052 0.764557C5.86352 1.13374 5.85855 1.72732 5.48936 2.09032L2.33823 5.18885C1.97884 5.53432 1.97809 6.15242 2.33655 6.49878L5.48575 9.56239C5.85686 9.92342 5.86502 10.5169 5.50398 10.8881C5.32028 11.077 5.07616 11.1719 4.83194 11.1719Z"
                                                                        fill="#141516" />
                                                                </g>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_7951_48348">
                                                                    <rect width="24" height="24" fill="white"
                                                                        transform="translate(0.0820312 0.484375)" />
                                                                </clipPath>
                                                                <clipPath id="clip1_7951_48348">
                                                                    <rect width="24" height="24" fill="white"
                                                                        transform="translate(0.191406 0.484375)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="checkout.html" class="cus-btn-3 w-100 mb-24">Buy Now</a>
                                    <div class="hr-line mb-24"></div>
                                    <div class="d-flex align-items-center gap-16 mb-16">
                                        <h6>Category:</h6>
                                        <p class="light-gray">Mobile Phone , Android , Flagship</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-16 mb-16">
                                        <h6>Tags:</h6>
                                        <p class="light-gray">5G Compatible , <span>256GB Storage , </span> Student Phone</p>
                                    </div>
                                    <div class="hr-line mb-24"></div>
                                    <div class="d-flex align-items-center gap-16 mb-24">
                                        <h6>Share:</h6>
                                        <ul class="list-unstyled social-link m-0">
                                            <li>
                                                <a href="">
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
                                                <a href="">
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
                                                <a href="">
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
                                                <a href="">
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
                                    <button class="nav-link " id="nav-desc-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-desc" type="button" role="tab" aria-controls="nav-desc"
                                        aria-selected="true">Description</button>
        
                                    <button class="nav-link active" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info"
                                        type="button" role="tab" aria-controls="nav-info" aria-selected="true">Additional
                                        Information</button>
        
                                    <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review"
                                        aria-selected="false">Reviews (02)</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade " id="nav-desc" role="tabpanel"
                                    aria-labelledby="nav-desc-tab">
                                    <h5 class="mb-24">Product Supreme Quality</h5>
                                    <p class="light-gray mb-16">
                                        Lorem ipsum dolor sit amet consectetur. Est morbi cum bibendum id eleifend ultrices enim
                                        nec. Vitae morbi mus
                                        imperdiet tincidunt ultrices hendrerit. Lobortis donec massa fermentum aliquet sapien.
                                        Magna risus donec aliquam
                                        diam aliquet consectetur. Etiam accumsan ipsum augue sed vitae. Tortor volutpat et dui
                                        in malesuada euismod. Sociis
                                        aenean porttitor aliquet sit amet.
                                    </p>
                                    <p class="light-gray mb-32">
                                        Lorem ipsum dolor sit amet consectetur. Est morbi cum bibendum id eleifend ultrices enim
                                        nec. Vitae morbi mus
                                        imperdiet tincidunt ultrices hendrerit. Lobortis donec massa fermentum aliquet sapien.
                                        Magna risus donec aliquam
                                        diam aliquet consectetur. Etiam accumsan ipsum augue sed vitae.
                                    </p>
                                    <div class="py-40">
                                        <div class="row row-gap-4">
                                            <div class="col-lg-6">
                                                <img src="{{url('user')}}/media/products/product-detail-1.png" alt="">
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="{{url('user')}}/media/products/product-detail-2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="light-gray mb-16">
                                        Lorem ipsum dolor sit amet consectetur. Est morbi cum bibendum id eleifend ultrices enim
                                        nec. Vitae morbi mus
                                        imperdiet tincidunt ultrices hendrerit. Lobortis donec massa fermentum aliquet sapien.
                                        Magna risus donec aliquam
                                        diam aliquet consectetur. Etiam accumsan ipsum augue sed vitae. Tortor volutpat et dui
                                        in malesuada euismod. Sociis
                                        aenean porttitor aliquet sit amet.
                                    </p>
                                    <p class="light-gray">
                                        Lorem ipsum dolor sit amet consectetur. Est morbi cum bibendum id eleifend ultrices enim
                                        nec. Vitae morbi mus
                                        imperdiet tincidunt ultrices hendrerit. Lobortis donec massa fermentum aliquet sapien.
                                        Magna risus donec aliquam
                                        diam aliquet consectetur. Etiam accumsan ipsum augue sed vitae.
                                    </p>
                                </div>
                                <div class="tab-pane fade active show" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                                    <h5 class="mb-32">Technical Specifications</h5>
                                    <div class="specs-chart mb-32">
                                        <h6 class="color-primary mb-16">Network</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="brand-block">
                                                    <p class="item fw-500">
                                                        Brand
                                                    </p>
                                                    <p class="category light-gray">
                                                        Apple
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="brand-block">
                                                    <p class="item fw-500">
                                                        Model
                                                    </p>
                                                    <p class="category light-gray">
                                                        13 Pro
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="brand-block">
                                                    <p class="item fw-500">
                                                        Relaease Date
                                                    </p>
                                                    <p class="category light-gray">
                                                        13-05-2020
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="specs-chart mb-32">
                                        <h6 class="color-primary mb-16">Display</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="brand-block">
                                                    <p class="item fw-500">
                                                        Type
                                                    </p>
                                                    <p class="category light-gray">
                                                        AMOLED/LCD/IPS
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="brand-block">
                                                    <p class="item fw-500">
                                                        Size
                                                    </p>
                                                    <p class="category light-gray">
                                                        5.6 Inches
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="brand-block">
                                                    <p class="item fw-500">
                                                        Resolution
                                                    </p>
                                                    <p class="category light-gray">
                                                        1920 Pixels
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="specs-chart mb-32">
                                        <h6 class="color-primary mb-16">Body</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="brand-block">
                                                    <p class="item fw-500">
                                                        Dimensions
                                                    </p>
                                                    <p class="category light-gray">
                                                        Height x Width x Depth mm
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="brand-block">
                                                    <p class="item fw-500">
                                                        Weight
        
                                                    </p>
                                                    <p class="category light-gray">
                                                        12.5 Grams
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="brand-block">
                                                    <p class="item fw-500">
                                                        SIM
                                                    </p>
                                                    <p class="category light-gray">
                                                        Dual SIM
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="specs-chart mb-32">
                                        <h6 class="color-primary mb-16">Performance</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="brand-block">
                                                    <p class="item fw-500">
                                                        OS
                                                    </p>
                                                    <p class="category light-gray">
                                                        IOS
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="brand-block">
                                                    <p class="item fw-500">
                                                        Chipset
                                                    </p>
                                                    <p class="category light-gray">
                                                        6 Gen 1
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="brand-block">
                                                    <p class="item fw-500">
                                                        Relaease Date
                                                    </p>
                                                    <p class="category light-gray">
                                                        13-05-2020
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="specs-chart">
                                        <h6 class="color-primary mb-16">Features</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="brand-block">
                                                    <p class="item fw-500">
                                                        Water Resistance
                                                    </p>
                                                    <p class="category light-gray">
                                                        Rating
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="brand-block">
                                                    <p class="item fw-500">
                                                        Audio
                                                    </p>
                                                    <p class="category light-gray">
                                                        Stereo/3.5mm Jack
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="brand-block">
                                                    <p class="item fw-500">
                                                        Colors
                                                    </p>
                                                    <p class="category light-gray">
                                                        Black
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
        
                                </div>
                                <div class="tab-pane fade show " id="nav-review" role="tabpanel"
                                    aria-labelledby="nav-review-tab">
                                    <div class="comments-sec mb-48">
                                        <h5 class="mb-48">(02) Reviews For Mobile Phone</h5>
                                        <div class="comment-box mb-24">
                                            <img src="{{url('user')}}/media/users/user-4.png" alt="" class="br-5">
                                            <div class="block">
                                                <div class="top-row mb-16">
                                                    <div class="info">
                                                        <h5 class="light-black">Ethan Clarke</h5>
                                                    </div>
                                                    <h5 class="color-sec">★★★★<span class="light-gray">★</span></h5>
                                                </div>
                                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Pharetra luctus in
                                                    dignissim amet.
                                                    Dignissim adipiscing amet praesent nec libero ultrices ac ullamcorper. Enim
                                                    mattis faucibus
                                                    viverra integer vestibulum in proin. Imperdiet pellentesque nisl cursus arcu
                                                    nulla massa pharetra.
                                                    Tristique.</p>
                                            </div>
                                        </div>
                                        <div class="hr-line mb-24"></div>
                                        <div class="comment-box">
                                            <img src="{{url('user')}}/media/users/user-5.png" alt="" class="br-5">
                                            <div class="block">
                                                <div class="top-row mb-16">
                                                    <div class="info">
                                                        <h5 class="light-black">Sophia Reynolds</h5>
                                                    </div>
                                                    <h5 class="color-sec">★★★★<span class="light-gray">★</span></h5>
                                                </div>
                                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Pharetra luctus in
                                                    dignissim amet.
                                                    Dignissim adipiscing amet praesent nec libero ultrices ac ullamcorper. Enim
                                                    mattis faucibus
                                                    viverra
                                                    integer vestibulum in proin. Imperdiet pellentesque nisl cursus arcu nulla
                                                    massa pharetra.
                                                    Tristique.</p>
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-form">
                                        <h5 class="fw-500 mb-8">Write a Review</h5>
                                        <p class="light-gray mb-32">Your email address will not be published. Required fields
                                            are marked.</p>
        
                                        <p class="mb-16 fw-500">Your Review</p>
                                        <form method="post" action="shop-detail.html" class="form-group contact-form">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="input-block mb-24">
                                                        <textarea class="form-control" name="message" id="comment"
                                                            rows="4" placeholder="Write Your Review here..."></textarea>
        
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-block mb-24">
                                                        <input type="text" class="form-control" id="name" name="name"
                                                            required placeholder="Name Example">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                            viewBox="0 0 20 20" fill="none">
                                                            <g clip-path="url(#clip0_7949_46233)">
                                                                <path
                                                                    d="M10 0.00292969C7.09223 0.00292969 4.72656 2.36859 4.72656 5.27637C4.72656 8.18414 7.09223 10.5498 10 10.5498C12.9078 10.5498 15.2734 8.18414 15.2734 5.27637C15.2734 2.36859 12.9078 0.00292969 10 0.00292969ZM10 9.37793C7.7384 9.37793 5.89844 7.53797 5.89844 5.27637C5.89844 3.01477 7.7384 1.1748 10 1.1748C12.2616 1.1748 14.1016 3.01477 14.1016 5.27637C14.1016 7.53797 12.2616 9.37793 10 9.37793Z"
                                                                    fill="#141516" />
                                                                <path
                                                                    d="M16.5612 13.9949C15.1174 12.529 13.2035 11.7217 11.1719 11.7217H8.82812C6.79656 11.7217 4.88258 12.529 3.43883 13.9949C2.00215 15.4537 1.21094 17.3792 1.21094 19.417C1.21094 19.7406 1.47328 20.0029 1.79688 20.0029H18.2031C18.5267 20.0029 18.7891 19.7406 18.7891 19.417C18.7891 17.3792 17.9979 15.4537 16.5612 13.9949ZM2.40859 18.8311C2.70215 15.5074 5.46918 12.8936 8.82812 12.8936H11.1719C14.5308 12.8936 17.2979 15.5074 17.5914 18.8311H2.40859Z"
                                                                    fill="#141516" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_7949_46233">
                                                                    <rect width="20" height="20" fill="white"
                                                                        transform="translate(0 0.00292969)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-block mb-24">
                                                        <input type="email" class="form-control" id="mail" name="email"
                                                            required placeholder="Your Email">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                            viewBox="0 0 20 20" fill="none">
                                                            <path
                                                                d="M18.2422 2.97168H1.75781C0.786602 2.97168 0 3.76316 0 4.72949V15.2764C0 16.2484 0.792383 17.0342 1.75781 17.0342H18.2422C19.2053 17.0342 20 16.2518 20 15.2764V4.72949C20 3.76488 19.2165 2.97168 18.2422 2.97168ZM17.996 4.14355C17.6369 4.50078 11.4564 10.6488 11.243 10.861C10.9109 11.193 10.4695 11.3759 10 11.3759C9.53047 11.3759 9.08906 11.193 8.75594 10.8599C8.61242 10.7171 2.50012 4.63707 2.00398 4.14355H17.996ZM1.17188 15.0379V4.96875L6.23586 10.0061L1.17188 15.0379ZM2.00473 15.8623L7.06672 10.8325L7.9284 11.6896C8.48176 12.243 9.21746 12.5477 10 12.5477C10.7825 12.5477 11.5182 12.243 12.0705 11.6907L12.9333 10.8325L17.9953 15.8623H2.00473ZM18.8281 15.0379L13.7641 10.0061L18.8281 4.96875V15.0379Z"
                                                                fill="#141516" />
                                                        </svg>
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
            <!-- Product Description End -->

            <!-- Recommended Product Start -->
            <section class="recommended-product bg-lightest-gray pb-40">
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
                    <div class="row row-gap-4">
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">
                                    <span class="sale-label">-12%</span>
                                    <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-1.png"  class="product-image" alt=""></a>
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
                                        <h6 ><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                    </div>
                                    <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">
                                    <span class="sale-label">-12%</span>
                                    <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-2.png"  class="product-image" alt=""></a>
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
                                        <h6 ><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                    </div>
                                    <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">
                                    <span class="sale-label">-12%</span>
                                    <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-4.png"  class="product-image" alt=""></a>
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
                                    <h6 class="product-title mb-8"><a href="shop-detail.html">Nexus Mobile Pro</a></h6>
                                    <div class="text mb-16">
                                        <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                        <h6 ><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                    </div>
                                    <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">
                                    <span class="sale-label">-12%</span>
                                    <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-10.png" class="product-image"  alt=""></a>
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
                                        <h6 ><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                    </div>
                                    <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">
                                    <span class="sale-label">-12%</span>
                                    <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-3.png"  class="product-image" alt=""></a>
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
                                        <h6 ><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                    </div>
                                    <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">
                                    <span class="sale-label">-12%</span>
                                    <a href="shop-detail.html"><img src="{{url('user')}}/media/products/product-5.png" class="product-image"  alt=""></a>
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
                                        <h6 ><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
                                    </div>
                                    <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Recommended Product End -->
        
            <!-- Benefits Start -->
            <footer class="bg-white">
                <div class="container-fluid">
                    <div class="benefits">
                        <div class="row justify-content-center  benefits-wrapper">
                            <div class="col-xxl-10 col-xl-12">
                                <div class="row row-gap-4">
                                    <div class="col-xl-2 col-md-4 col-6">
                                        <div class="benefit-block">
                                            <div class="image-box mb-12">
                                                <img src="{{url('user')}}/media/icons/icon-1-sm.png" alt=""> 
                                            </div>
                                            <div class="content-box">
                                                <p class="fw-500 mb-4p">Easy Returns</p>
                                                <p class="light-gray">From handpicked sellers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-md-4 col-6">
                                        <div class="benefit-block">
                                            <div class="image-box mb-12">
                                                <img src="{{url('user')}}/media/icons/icon-2-sm.png" alt=""> 
                                            </div>
                                            <div class="content-box">
                                                <p class="fw-500 mb-4p">Fast Delivery</p>
                                                <p class="light-gray">Delivery in 24 hours max!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-md-4 col-6">
                                        <div class="benefit-block">
                                            <div class="image-box mb-12">
                                                <img src="{{url('user')}}/media/icons/icon-3-sm.png" alt=""> 
                                            </div>
                                            <div class="content-box">
                                                <p class="fw-500 mb-4p">Safe Payment</p>
                                                <p class="light-gray">100% secure payment</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-md-4 col-6">
                                        <div class="benefit-block">
                                            <div class="image-box mb-12">
                                                <img src="{{url('user')}}/media/icons/icon-4-sm.png" alt=""> 
                                            </div>
                                            <div class="content-box">
                                                <p class="fw-500 mb-4p">Online Discount</p>
                                                <p class="light-gray">Add multi-buy discount</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-md-4 col-6">
                                        <div class="benefit-block">
                                            <div class="image-box mb-12">
                                                <img src="{{url('user')}}/media/icons/icon-5-sm.png" alt=""> 
                                            </div>
                                            <div class="content-box">
                                                <p class="fw-500 mb-4p">Need Help</p>
                                                <p class="light-gray">Dedicated 24/7 Support</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-md-4 col-6">
                                        <div class="benefit-block">
                                            <div class="image-box mb-12">
                                                <img src="{{url('user')}}/media/icons/icon-6-sm.png" alt=""> 
                                            </div>
                                            <div class="content-box">
                                                <p class="fw-500 mb-4p">Curated Items</p>
                                                <p class="light-gray">From handpciked sellers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="hr-line"></div>
                    <div class="footer-wrapper pt-40 mb-32">
                        <div class="store-desc">
                            <a href="index.html"><img src="{{url('user')}}/media/logo.png" alt="" class="mb-16"></a>
                            <p class="light-gray mb-xl-32 mb-lg-0 mb-32">
                                Lorem ipsum dolor sit amet consectetur. Eu dolor faucibus <br>
                                sit fames elit ac. Hendrerit ultrices morbi faucibus.
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
                                    <h5 class="color-primary">+001 123 456 789</h5>
                                </div>
                            </a>
                        </div>
                        <div class="footer-link-block">
                            <h6 class="fw-600 mb-24">Find It Fast</h6>
                            <ul class="list-unstyled m-0">
                                <li class="mb-8"><a href="" class="light-gray">Laptop & Computer</a></li>
                                <li class="mb-8"><a href="" class="light-gray">Camera & Photo</a></li>
                                <li class="mb-8"><a href="" class="light-gray">Smartphone & Tablet</a></li>
                                <li class="mb-8"><a href="" class="light-gray">TV & Audio</a></li>
                                <li class="mb-8"><a href="" class="light-gray">Home & Electronic</a></li>
                                <li class="mb-8"><a href="" class="light-gray">Headphone & Speakers</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-block">
                            <h6 class="fw-600 mb-24">Quick Link</h6>
                            <ul class="list-unstyled m-0">
                                <li class="mb-8"><a href="index.html" class="light-gray">Home Page</a></li>
                                <li class="mb-8"><a href="about.html" class="light-gray">About Us</a></li>
                                <li class="mb-8"><a href="shop-grid-1.html" class="light-gray">Shop Now</a></li>
                                <li class="mb-8"><a href="register.html" class="light-gray">Signup</a></li>
                                <li class="mb-8"><a href="register.html" class="light-gray">Login</a></li>
                                <li class="mb-8"><a href="contact.html" class="light-gray">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-block">
                            <h6 class="fw-600 mb-24">Customer Care</h6>
                            <ul class="list-unstyled m-0">
                                <li class="mb-8"><a href="register.html" class="light-gray">My Account</a></li>
                                <li class="mb-8"><a href="tracking.html" class="light-gray">Track Your Order</a></li>
                                <li class="mb-8"><a href="shop-grid-3.html" class="light-gray">Customer Service</a></li>
                                <li class="mb-8"><a href="blog-grid.html" class="light-gray">Blogs</a></li>
                                <li class="mb-8"><a href="about.html" class="light-gray">FAQs</a></li>
                                <li class="mb-8"><a href="coming-soon.html" class="light-gray">Coming Soon</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-block">
                            <ul class="list-unstyled mb-16">
                                <li class="mb-12 footer-link">
                                    <a href="" class="d-flex align-items-center gap-2">
                                        <div class="img-box">
                                            <img src="{{url('user')}}/media/icons/location.png" alt="">
                                        </div>
                                        <p class="light-gray">26 South Street, New York, NY 98, USA.</p>
                                    </a>
                                </li>
                                <li class="mb-12 footer-link">
                                    <a href="mailto:info@example.com" class="d-flex align-items-center gap-2">
                                        <div class="img-box">
                                            <img src="{{url('user')}}/media/icons/mail-sm.png" alt="">
                                        </div>
                                        <p class="color-primary">exampleinfo@gmail.com</p>
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
                        <p class="light-gray text-sm-left text-center">@2024 All Rights Copyright <a href="" class="color-primary"> Gadgetize</a>. Design & Developed By <span class="color-primary"> UIPARADOX</span></p>
                        <div class="payment-cards d-flex align-items-center gap-16">
                            <p class="fw-500 light-gray d-sm-flex d-none">Payment Mathods:</p>
                            <div class="card-block">
                                <img src="{{url('user')}}/media/icons/card-1.png" alt="">
                            </div>
                            <div class="card-block">
                                <img src="{{url('user')}}/media/icons/card-2.png" alt="">
                            </div>
                            <div class="card-block">
                                <img src="{{url('user')}}/media/icons/card-3.png" alt="">
                            </div>
                            <div class="card-block">
                                <img src="{{url('user')}}/media/icons/card-4.png" alt="">
                            </div>
                            <div class="card-block">
                                <img src="{{url('user')}}/media/icons/card-5.png" alt="">
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

    <!-- Mobile Menu Start -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{url('user')}}/media/mobile-logo.png" alt=""></a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:example@company.com">example@company.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+12345678">+123 (4567) -890</a>
                </li>
            </ul>
            <div class="mobile-nav__social">
                <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <!-- Mobile Menu End -->

    <!-- Modal -->
    <div class="modal fade" id="productQuickView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="shop-detail">
                        <div class="detail-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="quick-image-box">
                                        <img src="{{url('user')}}/media/products/quick-view-image.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-text-container bg-white br-20">
                                        <div class="close-content text-end">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <h3 class="fw-600 mb-16">Nexus Mobile Pro 256GB</h3>
                                        <div class="d-flex align-items-center flex-wrap gap-16 mb-24">
                                            <h5 class="color-sec">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                    class="text-16 fw-400 dark-black">(02 Reviews)</span></h5>
                                            <div class="vr-line vr-line-2"></div>
                                            <p class="light-gray">Brand: <span class="color-primary">Beast</span></p>
                                        </div>
                                        <div class="d-flex align-items-center gap-16 mb-24">
                                            <p class="light-gray text-decoration-line-through">$450.00</p>
                                            <h5>$400.00</h5>
                                            <span class="label white">-12%</span>
                                        </div>
                                        <p class="light-gray mb-24">
                                            Lorem ipsum dolor sit amet consectetur. Purus nulla nec in ac malesuada et nisi
                                            ipsum. Massa scelerisque...
                                        </p>
                                        <div class="hr-line mb-24"></div>
                                        <div class="function-bar mb-16">
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
                                        </div>
                                        <div class="hr-line mb-24"></div>
                                        <div class="d-flex align-items-center gap-16 mb-16">
                                            <h6>Category:</h6>
                                            <p class="light-gray"><span class="color-primary">Mobile Phone</span> , Android , Flagship</p>
                                        </div>
                                        <div class="d-flex align-items-center gap-16 mb-16">
                                            <h6>Tags:</h6>
                                            <p class="light-gray">5G Compatible , <span class="color-primary">256GB Storage , </span> Student
                                                Phone</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Shopping Cart Popup Start -->
    <aside id="sidebar-cart">
        <div class="title-cart-block mb-32 bg-lightest-gray">
            <h6>Shopping Cart (02)</h6>
            <a href="#" class="close-button close-popup"><span class="close-icon">X</span></a>
        </div>
        <ul class="product-list p-24">
            <li class="product-item mb-24">
                <span class="item-image">
                    <img src="{{url('user')}}/media/images/cart-image-1.png" alt="Product Photo">
                </span>
                <div class="product-text">
                    <div class="prod-title mb-16">
                        <h6>Gaming Headphone</h6>
                        <a href="javascript:;" class="cancel">
                            <img src="{{url('user')}}/media/images/cancel.png" alt="">
                        </a>
                    </div>
                    <div class="prod-desc">
                        <div>
                            <p class="fw-500 mb-8">Quantity: 1</p>
                            <p class="fw-500">$30.00</p>
                        </div>
                        <div class="quantity quantity-wrap d-inline-flex">
                            <div class="input-area quantity-wrap">
                                <input class="decrement" type="button" value="-">
                                <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                    class="number">
                                <input class="increment" type="button" value="+">
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="hr-line mb-24"></li>
            <li class="product-item mb-24">
                <span class="item-image">
                    <img src="{{url('user')}}/media/images/cart-image-2.png" alt="Product Photo">
                </span>
                <div class="product-text">
                    <div class="prod-title mb-16">
                        <h6>Samsung S21 Ultra</h6>
                        <a href="javascript:;" class="cancel">
                            <img src="{{url('user')}}/media/images/cancel.png" alt="">
                        </a>
                    </div>
                    <div class="prod-desc">
                        <div>
                            <p class="fw-500 mb-8">Quantity: 1</p>
                            <p class="fw-500">$350.00</p>
                        </div>
                        <div class="quantity quantity-wrap d-inline-flex">
                            <div class="input-area quantity-wrap">
                                <input class="decrement" type="button" value="-">
                                <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                    class="number">
                                <input class="increment" type="button" value="+">
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="hr-line mb-24"></li>
        </ul>
        <div class="price-total p-24">
            <span class="h5">SUBTOTAL</span>
            <span class="h5">$281.98</span>
        </div>
        <div class="hr-line mb-24"></div>
        <div class="action-buttons p-24">
            <a href="cart.html" class="cus-btn-2">VIEW CART</a>
            <a href="checkout.html" class="cus-btn active-btn">CHECKOUT</a>
        </div>
    </aside>
    <div id="sidebar-cart-curtain" class="close-popup"></div>
    <!-- Shopping Cart Popup End -->

    
    <!-- Modal -->
    <div class="modal fade" id="comparepopup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog compare-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="zui-wrapper">
                        <div class="close-content text-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div id="container" class="zui-scroller">
                            <table class="zui-table">
                                <thead>
                                    <tr>
                                        <th class="zui-sticky-col">&nbsp;</th>
                                        <th id="product-col" class="table-col">
                                            <img class="product-img mb-16" src="{{url('user')}}/media/products/list-1.png" alt="">
                                            <span class="h6">
                                                <a href="#" class="product-link">Gaming Headphones
                                                </a>
                                            </span>
                                        </th>
                                        <th class="table-col">
                                            <img class="product-img mb-16" src="{{url('user')}}/media/products/list-2.png" alt="">
                                            <span class="h6">
                                                <a href="#" class="product-link">Ultra Bright LCD
                                                </a>
                                            </span>
                                        </th>
                                        <th class="table-col">
                                            <img class="product-img mb-16" src="{{url('user')}}/media/products/list-3.png" alt="">
                                            <span class="h6">
                                                <a href="#" class="product-link">Hyper Glide Mouse
                                                </a>
                                            </span>
                                        </th>
                                        <th class="table-col">
                                            <img class="product-img mb-16" src="{{url('user')}}/media/products/list-4.png" alt="">
                                            <span class="h6">
                                                <a href="#" class="product-link">Nexus Mobile Pro 256GB
                                                </a>
                                            </span>
                                        </th>
                                        <th class="table-col">
                                            <img class="product-img mb-16" src="{{url('user')}}/media/products/list-5.png" alt="">
                                            <span class="h6">
                                                <a href="#" class="product-link">Silent Touch Pro</a>
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="zui-sticky-col">Price</td>
                                        <td class="text-center"><strong>$85.00</strong></td>
                                        <td class="text-center"><strong>$700.00</strong></td>
                                        <td class="text-center"><strong>$50.00</strong></td>
                                        <td class="text-center"><strong>$500.00</strong></td>
                                        <td class="text-center"><strong>$150.00</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="zui-sticky-col zui-stripe-row">Description</td>
                                        <td>AS4500</td>
                                        <td>AS8500</td>
                                        <td>AS6000</td>
                                        <td>AS4600</td>
                                        <td>AS1000</td>
                                    </tr>
                                    <tr>
                                        <td class="zui-sticky-col">Storage</td>
                                        <td>up to 16 samples</td>
                                        <td>up to 48 samples</td>
                                        <td>up to 16 samples</td>
                                        <td>up to 16 samples</td>
                                        <td>up to 32 samples</td>
                                    </tr>
                                    <tr>
                                        <td class="zui-sticky-col zui-stripe-row">SKU</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-plus-circle"></i>Optional</td>
                                        <td><i class="far fa-times-circle"></i>Not Available</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                    </tr>
                                    <tr>
                                        <td class="zui-sticky-col">Availablity</td>
                                        <td><i class="far fa-plus-circle"></i>Optional</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                    </tr>
                                    <tr>
                                        <td class="zui-sticky-col zui-stripe-row">Weight</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                    </tr>
                                    <tr>
                                        <td class="zui-sticky-col">Dimensions</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                    </tr>
                                    <tr>
                                        <td class="zui-sticky-col zui-stripe-row">Colors
                                        </td>
                                        <td><i class="far fa-times-circle"></i>Not Available</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-times-circle"></i>Not Available</td>
                                        <td><i class="far fa-times-circle"></i>Not Available</td>
                                        <td><i class="far fa-times-circle"></i>Not Available</td>
                                    </tr>
                                    <!-- <tr>
                                        <td class="zui-sticky-col"></td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-times-circle"></i>Not Available</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Js -->
    <script src="{{url('user')}}/js/vendor/bootstrap.min.js"></script>
    <script src="{{url('user')}}/js/vendor/jquery-3.6.3.min.js"></script>
    <script src="{{url('user')}}/js/vendor/jquery-validator.js"></script>
    <script src="{{url('user')}}/js/vendor/slick.min.js"></script>

    <script src="{{url('user')}}/js/app.js"></script>

</body>

</html>