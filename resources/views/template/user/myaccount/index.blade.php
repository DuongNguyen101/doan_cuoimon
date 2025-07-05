@extends('layout.user')
@section('content')

<link rel="stylesheet" href="{{url('user')}}/css/userinfo.css">


<div class="profile-container">
    <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="avatar-wrapper">
            <div style="display: flex; justify-content: center; align-items: center; position: relative;">
                @php
                $imagePath = 'uploads/avatar/' . Auth::user()->image;
                $image = Auth::user()->image && file_exists(public_path($imagePath))
                ? asset($imagePath)
                : asset('image/vietnam.png');
                @endphp

                <img id="avatarPreview" src="{{ $image }}" alt="Avatar">
                <label for="avatar"><i class="fas fa-pen"></i></label>
            </div>
            <input type="file" id="avatar" name="image" accept="image/*" style="display: none;" onchange="previewAvatar(event)">
            <h5 class="mt-3 fw-bold">{{ Auth::user()->name }}</h5>
        </div>

        <div class="form-section">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="username" required value="{{ Auth::user()->name }}">

            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="example@gmail.com" required value="{{ Auth::user()->email }}">

            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="0987654321" required value="{{ old('phone', Auth::user()->phone ?? '') }}">
                @error('phone')
                <div class="text-danger mt-1" style="font-size: 13px;">Please update your phone number.</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="province">City</label>
                <input type="text" class="form-control" id="province" name="province" placeholder="VD: Hanoi city" required value="{{ old('province', Auth::user()->address->city ?? '') }}">
                @error('province')
                <div class="text-danger mt-1" style="font-size: 13px;">Please update your city.</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="district">District</label>
                <input type="text" class="form-control" id="district" name="district" placeholder="VD: Ba Dinh District " required value="{{ old('district', Auth::user()->address->district ?? '') }}">
                @error('district')
                <div class="text-danger mt-1" style="font-size: 13px;">Please update your district.</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="street">Street</label>
                <input type="text" class="form-control" id="street" name="street" placeholder="VD: Nguyen Hue street" required value="{{ old('street',Auth::user()->address->street ?? '') }}">

                @error('street')
                <div class="text-danger mt-1" style="font-size: 13px;">Please update your Street.</div>
                @enderror
            </div>
        </div>

        <div class="d-flex justify-content-center gap-2 mt-3">
            <button type="submit" class="btn-green px-4 py-2" style="min-width: 140px;">
                Save Information
            </button>

            <a href="{{ url('template/user/changepassword/index') }}"
            class="btn-green text-white text-decoration-none px-4 py-2 text-center"
            style="min-width: 140px; line-height: 24px;">
                Change Password
            </a>
        </div>

        </div>
       
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert" style="text-align:center;">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="position: absolute; right: 1rem;"></button>
        </div>
        @endif
    </form>
</div>

<script src="{{url('user')}}/js/userinfo.js"></script>

@endsection