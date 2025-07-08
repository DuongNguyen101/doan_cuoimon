<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('admin')}}/template/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{url('admin')}}/template/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Paper Dashboard 2 by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{url('admin')}}/template/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{url('admin')}}/template/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{url('admin')}}/template/assets/demo/demo.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="{{url('admin')}}/template/assets/img/logo-small.png">
                    </div>
                    <!-- <p>CT</p> -->
                </a>
                <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                    {{$adminName }}
                    <!-- <div class="logo-image-big">
            <img src="{{url('admin')}}/template/assets/img/logo-big.png">
          </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active ">
                        <a href="{{asset('/template/admin/dashboard')}}">
                            <i class="nc-icon nc-bank"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/template/admin/products')}}">
                            <i class="nc-icon nc-bank"></i>
                            <p>Products</p>
                        </a>
                    </li>
                    <li class="ml-3">
                        <a href="{{asset('/template/admin/products/sold')}}">
                            <i class="nc-icon nc-bus-front-12" style="font-size: 15px;"></i>
                            <p style="font-size: 12px;">Sold products</p>
                        </a>
                    </li>
                    <li class="ml-3">
                        <a href="{{asset('/template/admin/products/in')}}">
                            <i class="nc-icon nc-atom" style="font-size: 15px;"></i>
                            <p style="font-size: 12px;">In stocks</p>
                        </a>
                    </li>
                    <li class="ml-3">
                        <a href="{{asset('/template/admin/products/discounted')}}">
                            <i class="nc-icon nc-air-baloon" style="font-size: 15px;"></i>
                            <p style="font-size: 12px;">Discounted </p>
                        </a>
                    </li>
                    <li class="ml-3">
                        <a href="{{asset('/template/admin/products/out')}}">
                            <i class="nc-icon nc-simple-add" style="font-size: 15px;"></i>
                            <p style="font-size: 12px;">out of Stock</p>
                        </a>
                    </li>

                    <li>
                        <a href="{{asset('/template/admin/news')}}">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>News</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/template/admin/payments')}}">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Payments</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/template/admin/customers')}}">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Customers</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/template/admin/user')}}">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Orders</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/template/admin/promotions')}}">
                            <i class="nc-icon nc-tile-56"></i>
                            <p>Promotions</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/template/admin/reviews')}}">
                            <i class="nc-icon nc-caps-small"></i>
                            <p>Reviews</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/template/admin/about')}}">
                            <i class="nc-icon nc-caps-small"></i>
                            <p>About Us</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/template/admin/qna')}}">
                            <i class="nc-icon nc-spaceship"></i>
                            <p>QnA</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link btn-magnify" href="javascript:;">
                                    <i class="nc-icon nc-layout-11"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-rotate" href="javascript:;">
                                    <i class="nc-icon nc-settings-gear-65"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-regular fa-user"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            @yield('content')

            <footer class="footer footer-black  footer-white ">
                <div class="container-fluid">
                    <div class="row">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
                            </ul>
                        </nav>
                        <div class="credits ml-auto">
                            <span class="copyright">
                                Group 3 Aptech C2409G1
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{url('admin')}}/template/assets/js/core/jquery.min.js"></script>
    <script src="{{url('admin')}}/template/assets/js/core/popper.min.js"></script>
    <script src="{{url('admin')}}/template/assets/js/core/bootstrap.min.js"></script>
    <script src="{{url('admin')}}/template/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{url('admin')}}/template/assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{url('admin')}}/template/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{url('admin')}}/template/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{url('admin')}}/template/assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
</body>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                Are you sure you want to logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
                <button type="button" class="btn btn-danger" onclick="document.getElementById('logout-form').submit();">
                    logout
                </button>
            </div>
        </div>
    </div>
</div>

<form id="logout-form" action="{{ asset('login/admin/logout') }}" method="POST" style="display: none;">
    @csrf
</form>

</html>