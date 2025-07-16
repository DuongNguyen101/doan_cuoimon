@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    <a href="{{url('/template/admin/user')}}">Back</a>
    <div class="form-container">
        <h2>{{ isset($record->order_id) ? 'Sửa Oder' : 'Thêm Oder' }}</h2>
        <form method="POST" action="{{ isset($record->order_id) ? route('order.update', ['id' => $record->order_id]) : route('order.update') }}"
            style="max-width: 600px; margin: 40px auto; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);" enctype="multipart/form-data">

            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (session('msg'))
            <div class="alert alert-{{ session('msg') == 'Thất bại' ? 'danger' : 'success' }}">
                {{ session('msg') }}
            </div>
            @endif

            {{-- user_id --}}

            <label for="user_id" style="display: block; margin-bottom: 6px;">user_id:</label>
            <select id="user_id" name="user_id" required
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                @foreach ( $fk as $key)
                <option value="{{$key->id}}">{{$key->id}}. {{ $key->name }}</option>
                @endforeach
            </select>
            {{-- order_id --}}
            <input type="hidden" name="order_id" value="{{ old('news_id', $record->order_id ?? '') }}" readonly>

            {{-- order_date --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="order_date" style="display: block; margin-bottom: 6px;">order_date:</label>
                <input type="text" id="order_date" name="order_date"
                    value="{{ now()->format('Y-m-d H:i:s') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- total_amount --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="total_amount" style="display: block; margin-bottom: 6px;">total_amount:</label>
                <textarea id="total_amount" name="total_amount" rows="4"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">{{ old('author', $record->total_amount ?? '') }}</textarea>
            </div>
            {{-- trang thái --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="status" style="display: block; margin-bottom: 6px;">Trạng thái:</label>
                <select id="status" name="status" required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                    <option value="pending" {{ old('status', $record->status ?? '') == 'pending' ? 'selected' : '' }}>pending</option>
                    <option value="processing" {{ old('status', $record->status ?? '') == 'processing' ? 'selected' : '' }}>processing</option>
                    <option value="shipped" {{ old('status', $record->status ?? '') == 'shipped' ? 'selected' : '' }}>shipped</option>
                    <option value="delivered" {{ old('status', $record->status ?? '') == 'delivered' ? 'selected' : '' }}>delivered</option>
                    <option value="canceled" {{ old('status', $record->status ?? '') == 'unpublish' ? 'selected' : '' }}>canceled</option>
                </select>
            </div>
            {{-- address --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="total_amount" style="display: block; margin-bottom: 6px;">address:</label>
                <textarea id="address" name="address" rows="4"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">{{ old('address', $record->address ?? '') }}</textarea>
            </div>
            {{-- Created At --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="created_at" style="display: block; margin-bottom: 6px;">created_at:</label>
                <input type="text" id="created_at" name="created_at"
                    value="{{ old('created_at', $record->created_at ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            {{-- Updated At --}}
            <div class="form-group" style="margin-bottom: 25px;">
                <label for="updated_at" style="display: block; margin-bottom: 6px;">updated_at:</label>
                <input type="text" id="updated_at" name="updated_at"
                    value="{{ now()->format('Y-m-d H:i:s') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            {{-- Buttons --}}
            <div style="text-align: center;">
                <a href="{{ url('/template/admin/news') }}"
                    style="text-decoration: none;">
                    <button type="button"
                        style="background-color: #dc3545; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer;">
                        Cancel
                    </button>
                </a>
                <button type="submit"
                    style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer; margin-right: 10px;">
                    {{ isset($record->order_id) ? 'Update' : 'Add' }}
                </button>


            </div>
        </form>

    </div>

</div>


@endsection