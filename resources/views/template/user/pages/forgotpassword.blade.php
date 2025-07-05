@extends('layout.user')

@section('content')
<link rel="stylesheet" href="{{ url('user') }}/css/userinfo.css">

<div class="profile-container">
    <form action="{{ route('password.email') }}" method="POST" style="max-width: 500px; margin: 0 auto;">
        @csrf

        <h4 class="text-center fw-bold mb-4" style="color: #006937;">Forgot Password</h4>

        <div class="form-group mb-3 d-flex flex-column">
            <label for="email" class="mb-1">Email</label>
            <input type="email" name="email" id="email"
                class="form-control" placeholder="Enter your email" required>
            @error('email')
            <div class="text-danger mt-1" style="font-size: 13px;">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-center gap-2 mt-3">
            <button type="submit" class="btn-green px-4 py-2" style="min-width: 140px;">
                Send Reset Link
            </button>
            <a href="{{ url('template/user/pages/login') }}" class="btn-green text-white text-decoration-none px-4 py-2 text-center" style="min-width: 140px; line-height: 24px;">
                Back to Login
            </a>
        </div>


        @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show mt-3 text-center" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif
    </form>
</div>
@endsection