@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    <a href="{{url('/template/admin/dashboard')}}">Back</a>
    <div class="form-container">
        <h2>{{ isset($User->id) ? 'Update User Infor' : 'Add new user' }}</h2>
        <form method="POST" action="{{ url('/template/admin/user/form/action') }}"
            style="max-width: 600px; margin: 40px auto; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">

            @csrf

            <h2 style="text-align: center; margin-bottom: 25px;">
                {{ isset($User->id) ? 'updating user infor' : 'add new user' }}
            </h2>

            {{-- Tên user --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="name" style="display: block; margin-bottom: 6px;">User Name:</label>
                <input type="text" id="name" name="name"
                    value="{{ old('name', $User->name ?? '') }}"
                    required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            {{-- Hidden ID --}}
            <input type="hidden" name="id" value="{{ old('id', $User->id ?? '') }}">

            {{-- Mail Address --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="email" style="display: block; margin-bottom: 6px;">email:</label>
                <input type="text" id="email" name="email"
                    value="{{ old('name', $User->email ?? '') }}"
                    required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- email_verified_at --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="email" style="display: block; margin-bottom: 6px;">email_verified_at:</label>
                <input type="text" id="email_verified_at" name="email_verified_at"
                    value="{{ old('name', $User->email_verified_at ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- Phone --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="phone" style="display: block; margin-bottom: 6px;">Phone:</label>
                <input type="text" id="phone" name="phone"
                    value="{{ old('phone', $User->phone ?? '') }}"
                    required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- Role --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="role" style="display: block; margin-bottom: 6px;">role:</label>
                <input type="text" id="role" name="role"
                    value="{{ old('role', $User->role ?? '') }}"
                    required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            {{-- Created At --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="created_at" style="display: block; margin-bottom: 6px;">Created_at:</label>
                <input type="text" id="created_at" name="created_at"
                    value="{{ old('created_at', $User->created_at ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            {{-- Updated At --}}
            <div class="form-group" style="margin-bottom: 25px;">
                <label for="updated_at" style="display: block; margin-bottom: 6px;">Updated_at:</label>
                <input type="text" id="updated_at" name="updated_at"
                    value="{{ now()->format('Y-m-d H:i:s') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- Image --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="role" style="display: block; margin-bottom: 6px;">Image:</label>
                <input type="text" id="image" name="image"
                    value="{{ old('role', $User->image ?? '') }}"
                    required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- status --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="status" style="display: block; margin-bottom: 6px;">Status:</label>
                <select id="status" name="status" required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                    <option value="active" {{ old('status', $product->status ?? '') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="unactive" {{ old('status', $product->status ?? '') == 'unactive' ? 'selected' : '' }}>Unactive</option>
                </select>
            </div>
            {{-- password --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="password" style="display: block; margin-bottom: 6px;">Password:</label>
                <input type="text" id="password" name="password"
                    value="{{ old('password', $User->password ?? "") }}"
                    required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            {{-- Buttons --}}
            <div style="text-align: center;">
                <button type="submit"
                    style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer; margin-right: 10px;">
                    {{ isset($User->id) ? 'Update' : 'Add' }}
                </button>

                <a href="{{ url('/template/admin/user') }}"
                    style="text-decoration: none;">
                    <button type="button"
                        style="background-color: #dc3545; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer;">
                        Cancel
                    </button>
                </a>
            </div>
        </form>

    </div>

</div>


@endsection