@extends('layout.user')

@section('content')
<link rel="stylesheet" href="{{ url('user') }}/css/userinfo.css">

<div class="profile-container">
    <form action="{{ route('user.changePassword') }}" method="POST" style="max-width: 500px; margin: 0 auto;">
        @csrf

        <div class="d-flex align-items-center mb-4">
            <a href="{{ url('template/user/myaccount/index') }}" class="me-2 text-decoration-none" style="color: #006937; font-size: 20px;">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h4 class="mb-0 fw-bold" style="color: #006937;">Change Password</h4>
        </div>

        <div class="form-group mb-3 d-flex flex-column">
            <label for="current_password" class="mb-1">Current Password</label>
            <input type="password" name="current_password" id="current_password"
                class="form-control" placeholder="Enter current password" required>
            @error('current_password')
            <div class="text-danger mt-1" style="font-size: 13px;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3 d-flex flex-column">
            <label for="new_password" class="mb-1">New Password</label>
            <input type="password" name="new_password" id="new_password"
                class="form-control" placeholder="Enter new password" required>
            @error('new_password')
            <div class="text-danger mt-1" style="font-size: 13px;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3 d-flex flex-column">
            <label for="new_password_confirmation" class="mb-1">Confirm New Password</label>
            <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                class="form-control" placeholder="Re-enter new password" required>
            @error('new_password_confirmation')
            <div class="text-danger mt-1" style="font-size: 13px;">{{ $message }}</div>
            @enderror
        </div>

        <div class="btn-submit text-center mt-3">
            <button type="submit" class="btn-green">Update Password</button>
        </div>

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3 text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show mt-3 text-center" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif
    </form>
</div>

<script src="{{ url('user') }}/js/userinfo.js"></script>
@endsection