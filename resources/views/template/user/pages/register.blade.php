@extends('layout.user')
@section('content')
<section class="my-account d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #eaeaec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="account p-4 shadow-sm bg-white rounded">
                    <h4 class="mb-3 text-center fw-bold">Register</h4>
                    <p class="mb-4 light-gray text-center">Please enter your details to sign up.</p>
                    <div class="wrapper px-2">
                        @if (session('error'))
    <div class="alert alert-danger text-center">
        {{ session('error') }}
    </div>
@endif

@if (session('register_success'))
    <div class="alert alert-success text-center">
        {{ session('register_success') }}
    </div>
@endif
                        <form action="{{ url('template/user/pages/register') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" value="{{ old('name')}}" placeholder="Your name" required>
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" value="{{ old('email')}}" placeholder="Your email" required>
                                @error('email')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                @error('password')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" required>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="showPasswords">
                                <label class="form-check-label" for="showPasswords">Show password</label>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label" for="terms">I accept all terms & conditions</label>
                            </div>

                            <div class="text-center mb-3">
                                <button type="submit" class="btn btn-success w-100">Register Now</button>
                            </div>

                            <p class="text-center" style="font-size: 15px;">
                                Already have an account? 
                                <a href="{{ url('template/user/pages/login') }}" style="color: #006937; font-weight: 500;">
                                    Login now
                                </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('user')}}/js/register.js"> </script>
@endsection