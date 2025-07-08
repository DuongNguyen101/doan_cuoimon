@extends('layout.TemplateAdmin')
@section('content')
<div class="content">
    <a href="{{ url('/template/admin/user') }}">Back</a>
    <div class="form-container">
        <h2>{{ isset($record->order_detail_id) ? 'Sửa chi tiết đơn hàng' : 'Thêm chi tiết đơn hàng mới' }}</h2>
        <form method="POST" action="{{ isset($record->order_detail_id) ? route('orderdetails.update', ['id' => $record->order_detail_id]) : route('orderdetails.update') }}"
            style="max-width: 600px; margin: 40px auto; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            @csrf
            <h2 style="text-align: center; margin-bottom: 25px;">
                {{ isset($record->order_detail_id) ? 'Cập nhật chi tiết đơn hàng' : 'Thêm chi tiết đơn hàng mới' }}
            </h2>
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
            @if (isset($record->order_detail_id))
            <input type="hidden" name="order_detail_id" value="{{ old('order_detail_id', $record->order_detail_id ?? '') }}" readonly>
            @endif
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="order_id" style="display: block; margin-bottom: 6px;">Mã đơn hàng</label>
                <select id="order_id" name="order_id" required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                    @foreach ( $fk as $key)
                    <option value="{{$key->order_id}}">{{$key->order_id}}. {{ $key->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="product_id" style="display: block; margin-bottom: 6px;">Mã sản phẩm</label>
                <input type="text" id="product_id" name="product_id" value="{{ old('product_id', $record->product_id ?? '') }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="quantity" style="display: block; margin-bottom: 6px;">Số lượng</label>
                <input type="number" id="quantity" name="quantity" value="{{ old('quantity', $record->quantity ?? '') }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="unit_price" style="display: block; margin-bottom: 6px;">Giá đơn vị</label>
                <input type="text" id="unit_price" name="unit_price" value="{{ old('unit_price', $record->unit_price ?? '') }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="subtotal" style="display: block; margin-bottom: 6px;">Tổng</label>
                <input type="text" id="subtotal" name="subtotal" value="{{ old('subtotal', $record->subtotal ?? '') }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="created_at" style="display: block; margin-bottom: 6px;">Ngày tạo</label>
                <input type="text" id="created_at" name="created_at" value="{{ old('created_at', $record->created_at ?? '') }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            <div style="text-align: center;">
                <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer; margin-right: 10px;">
                    {{ isset($record->order_detail_id) ? 'Cập nhật' : 'Thêm' }}
                </button>
                <a href="{{ url('/template/admin/dashboard') }}" style="text-decoration: none;">
                    <button type="button" style="background-color: #dc3545; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer;">
                        Hủy
                    </button>
                </a>
            </div>
        </form>
    </div>
</div>
@endsection