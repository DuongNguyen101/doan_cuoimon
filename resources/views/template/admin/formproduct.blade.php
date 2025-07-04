@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    <a href="{{url('/template/admin/dashboard')}}">Back</a>
    <div class="form-container">
        <h2>{{ isset($category->category_id) ? 'Sửa Danh mục' : 'Thêm Danh mục mới' }}</h2>
        <form method="POST" action="{{ url('/template/admin/dashboard/form/action') }}">
            @csrf
            <div class="form-group">
                <label for="name">Tên danh mục:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $category->name ?? '') }}" required>
            </div>
            <div class="form-group">
                <input type="hidden" id="id" name="category_id" value="{{ old('name', $category->category_id ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="description">Mô tả:</label>
                <textarea id="description" name="description" rows="4">{{ old('description', $category->description ?? '') }}</textarea>
            </div>
             <div class="form-group">
                <label for="created_at">created_at</label>
                <input type="text" id="created_at" name="created_at" value="{{ old('description', $category->created_at ?? '') }}">
            </div>
             <div class="form-group">
                <label for="updated_at">updated_at:</label>
                <input type="text" id="updated_at" name="updated_at" value="{{ now()->format('Y-m-d H:i:s') }}">
            </div>
            <button type="submit">{{ isset($category->category_id) ? 'Cập nhật' : 'Thêm' }}</button>
            <a href="{{ url('/template/admin/dashboard') }}"><button type="button" style="background-color: #ff4444;">Hủy</button></a>
        </form>
    </div>  
    
</div>


@endsection