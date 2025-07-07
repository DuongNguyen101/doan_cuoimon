@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    <a href="{{url('/template/admin/dashboard')}}">Back</a>
    <div class="form-container">
        <h2>{{ isset($product->product_id) ? 'Sửa sản phẩm' : 'Thêm sản phẩm mới' }}</h2>
        <form method="POST" action="{{ url('/template/admin/product/update') }}"
            style="max-width: 600px; margin: 40px auto; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);" enctype="multipart/form-data">

            @csrf

            <h2 style="text-align: center; margin-bottom: 25px;">
                {{ isset($product->product_id) ? 'Cập nhật sản phẩm' : 'Thêm sản phẩm mới' }}
            </h2>

            {{-- Tên sản phẩm --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="name" style="display: block; margin-bottom: 6px;">Tên sản phẩm</label>
                <input type="text" id="name" name="name"
                    value="{{ old('name', $product->name ?? '') }}"
                    required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- product ID --}}
            <input type="hidden" name="product_id" value="{{ old('product_id', $product->product_id ?? '') }}" readonly>

            {{-- cate ID --}}
            <label for="category_id" style="display: block; margin-bottom: 6px;">danh mục:</label>
            <select id="category_id" name="category_id" required
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                @foreach ( $categories as $category)
                <option value="{{$category->category_id}}">{{$category->category_id}}. {{ $category->name }}</option>
                @endforeach
            </select>

            {{-- Mô tả --}}
            <div class=" form-group" style="margin-bottom: 15px;">
                <label for="description" style="display: block; margin-bottom: 6px;">Mô tả:</label>
                <textarea id="description" name="description" rows="4"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">{{ old('description', $product->description ?? '') }}</textarea>
            </div>
            {{-- Mo ta ngan --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="short_description" style="display: block; margin-bottom: 6px;">Mô tả ngắn:</label>
                <input type="text" id="short_description" name="short_description"
                    value="{{ old('short_description', $product->short_description ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- Giá sản phẩm --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="name" style="display: block; margin-bottom: 6px;">Giá sản phẩm:</label>
                <input type="text" id="price" name="price"
                    value="{{ old('name', $product->price ?? '') }}"
                    required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- Số lượng sản phẩm --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="name" style="display: block; margin-bottom: 6px;">Số lượng sản phẩm:</label>
                <input type="text" id="stock" name="stock"
                    value="{{ old('stock', $product->stock ?? '') }}"
                    required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            {{-- hinh san pham sản phẩm --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="image_url" style="display: block; margin-bottom: 6px;"><button style="cursor: pointer;">Up hinh</button></label>
                <input type="file" id="image_url" name="image_url"
                    accept="image/*"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                @if (old('image_url', $product->image_url ?? ''))
                <p>{{ isset($product->product_id) ? 'Giu hinh hien tai' : 'Up hinh moi' }} <img src="{{ asset('image/shoplist/' . (old('image_url', $product->image_url ?? ''))) }}" alt="Current Image" style="max-width: 50px; margin-top: 10px;"></p>
                @endif
            </div>
            {{-- trang thái pham sản phẩm --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="status" style="display: block; margin-bottom: 6px;">Trạng thái:</label>
                <select id="status" name="status" required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                    <option value="active" {{ old('status', $product->status ?? '') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="unactive" {{ old('status', $product->status ?? '') == 'unactive' ? 'selected' : '' }}>Unactive</option>
                </select>
            </div>

            {{-- Created At --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="created_at" style="display: block; margin-bottom: 6px;">Ngày tạo:</label>
                <input type="text" id="created_at" name="created_at"
                    value="{{ old('created_at', $product->created_at ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            {{-- Updated At --}}
            <div class="form-group" style="margin-bottom: 25px;">
                <label for="updated_at" style="display: block; margin-bottom: 6px;">Cập nhật lúc:</label>
                <input type="text" id="updated_at" name="updated_at"
                    value="{{ now()->format('Y-m-d H:i:s') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            {{-- Buttons --}}
            <div style="text-align: center;">
                <button type="submit"
                    style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer; margin-right: 10px;">
                    {{ isset($product->product_id) ? 'Cập nhật' : 'Thêm' }}
                </button>

                <a href="{{ url('/template/admin/dashboard') }}"
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