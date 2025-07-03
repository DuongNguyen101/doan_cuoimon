@extends('layout.user')
@section('content')


<section class="title-banner">
    <div class="container-fluid">
        <div class="banner-wrapper text-center">
            <img src="{{ url('user') }}/media/banner/left-image.png" alt="" class="banner-image1">
            <h1 class="dark-black fw-600">My Account</h1>
            <img src="{{ url('user') }}/media/banner/right-image.png" alt="" class="banner-image2">
        </div>
    </div>
</section>

<section class="my-account d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="account p-4 shadow-sm bg-white rounded">
                    <h4 class="mb-3 text-center fw-bold">Login</h4>
                    <p class="mb-4 light-gray text-center">Please enter your details to sign in.</p>

                    <form action="shop-list-1.html" method="post" class="contact-form needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="mail" id="email" class="form-control" placeholder="Enter your email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input type="checkbox" id="remember" class="form-check-input">
                                <label class="form-check-label" for="remember">Remember for 30 days</label>
                            </div>
                            <a href="#" class="text-decoration-none" style="color: #006937;">Forgot Password?</a>
                        </div>

                        <div class="text-center mb-4">
                            <button type="submit" class="btn w-50" style="background-color: #006937; color: white; border: none; padding: 10px 24px; border-radius: 6px;">
                                Sign In
                            </button>
                        </div>

                        <div class="text-center">
                            <p>Don't have an account? <a href="{{ url('template/user/pages/register') }}" style="color: #006937;">Register now</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
