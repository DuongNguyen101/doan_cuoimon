@extends('layout.user')
@section('content')
<section class="my-account d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #eaeaec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="account p-4 shadow-sm bg-white rounded">
                    <h4 class="mb-3 text-center fw-bold">Login</h4>
                    <p class="mb-4 light-gray text-center">Please enter your details to sign in.</p>

                    @if(session('register_success'))
                    <div class="alert alert-success">
                        {{ session('register_success') }}
                    </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <form action="{{ url('template/user/pages/login') }}" method="POST">
                        @csrf
                        <div class="input-box">
                            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="input-box" style="position: relative; margin-top: 25px;">
                            <input type="password" placeholder="Password" name="password" id="password" required>
                            <i class="fa-solid fa-eye" id="togglePassword" style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer;"></i>
                            @error('password')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-check my-3 d-flex justify-content-between align-items-center">
                            <div>
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label" for="remember" style="font-size: 15px;">
                                    Remember password
                                </label>
                            </div>

                            <div>
                                <a href="{{ route('password.request') }}" style="font-size: 15px; color: #006937; text-decoration: none;">
                                    Forgot password?
                                </a>
                            </div>
                        </div>

                        <div class="input-box button">
                            <input type="Submit" value="Login now">
                        </div>
                        <p class="text-center" style="font-size: 15px;">
                            Already have an account?
                            <a href="{{ url('template/user/pages/register') }}" style="color: #006937; font-weight: 500;">
                                Register now
                            </a>
                        </p>
                    </form>
                    @if(session('need_verify'))
                    <div id="verifyOverlay" class="verify-overlay">
                        <div id="verifyBox" class="verify-alert">
                            <div class="verify-alert-header">
                                <span>Unverified email</span>
                                <button class="verify-alert-close" onclick="closeVerifyBox()">&times;</button>
                            </div>
                            <p class="verify-alert-message">
                                Please check your email to verify your account before logging in.
                            </p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('user')}}/js/login.js"> </script>

</section>

@endsection