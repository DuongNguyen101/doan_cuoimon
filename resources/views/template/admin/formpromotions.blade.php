@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    <a href="{{url('/template/admin/payments')}}">Back</a>
    <div class="form-container">
        <h2>{{ isset($record->promotion_id) ? 'Sửa Promotions' : 'Thêm Promotions' }}</h2>
        <form method="POST" action="{{ isset($record->promotion_id) ? route('promotions.update', ['id' => $record->promotion_id]) : route('promotions.update') }}"
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

            {{-- product_id --}}

            <label for="product_id" style="display: block; margin-bottom: 6px;">chon san pham duoc khuyen mai:</label>
            <select id="product_id" name="product_id" required
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                @foreach ( $fk as $key)
                <option value="{{$key->product_id}}">{{$key->product_id}}. {{$key->name}}</option>
                @endforeach
            </select>
            {{-- promotion_id --}}
            <input type="hidden" name="payment_id" value="{{ old('news_id', $record->promotion_id ?? '') }}" readonly>

            {{-- title --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="title" style="display: block; margin-bottom: 6px;">title:</label>
                <input type="text" id="title" name="title"
                    value="{{ old('title', $record->title ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- description --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="description" style="display: block; margin-bottom: 6px;">description:</label>
                <textarea id="description" name="description" rows="4"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">{{ old('description', $record->description ?? '') }}</textarea>
            </div>
            {{-- discount_percentage --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="discount_percentage" style="display: block; margin-bottom: 6px;">discount_percentage:</label>
                <input type="text" id="payment_date" name="discount_percentage"
                    value="{{ old('discount_percentage', $record->discount_percentage ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- discount_amount --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="discount_percentage" style="display: block; margin-bottom: 6px;">discount_amount:</label>
                <input type="text" id="discount_amount" name="discount_amount"
                    value="{{ old('discount_amount', $record->discount_amount ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- start_date At --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="created_at" style="display: block; margin-bottom: 6px;">created_at:</label>
                <input type="date" id="start_date" name="start_date"
                    value="{{ old('created_at', $record->start_date ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            {{-- end_date At --}}
            <div class="form-group" style="margin-bottom: 25px;">
                <label for="end_date" style="display: block; margin-bottom: 6px;">end_date:</label>
                <input type="date" id="end_date" name="end_date"
                    value="{{ old('end_date', $record->end_date ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            {{-- trang thái --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="status" style="display: block; margin-bottom: 6px;">Trạng thái:</label>
                <select id="status" name="status" required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                    <option value="active" {{ old('status', $record->status ?? '') == 'active' ? 'selected' : '' }}>active</option>
                    <option value="inactive" {{ old('status', $record->status ?? '') == 'inactive' ? 'selected' : '' }}>inactive</option>
                    <option value="expired" {{ old('status', $record->status ?? '') == 'expired' ? 'selected' : '' }}>expired</option>
                </select>
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
                <button type="submit"
                    style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer; margin-right: 10px;">
                    {{ isset($record->order_id) ? 'Cập nhật' : 'Thêm' }}
                </button>

                <a href="{{ url('/template/admin/promotions') }}"
                    style="text-decoration: none;">
                    <button type="button"
                        style="background-color: #dc3545; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer;">
                        Hủy
                    </button>
                </a>
            </div>
        </form>

    </div>

</div>


@endsection