@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    <a href="{{url('/template/admin/news')}}">Back</a>
    <div class="form-container">
        <h2>{{ isset($record->news_id) ? 'Sửa News' : 'Thêm News' }}</h2>
        <form method="POST" action="{{ isset($record->news_id) ? route('news.update', ['id' => $record->news_id]) : route('news.update') }}"
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

            {{-- title --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="name" style="display: block; margin-bottom: 6px;">title</label>
                <input type="text" id="title" name="title"
                    value="{{ old('title', $record->title ?? '') }}"
                    required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- news_id --}}
            <input type="hidden" name="news_id" value="{{ old('news_id', $record->news_id ?? '') }}" readonly>

            {{-- content --}}
            <label for="name" style="display: block; margin-bottom: 6px;">content:</label>
            <textarea id="content" name="content" rows="4"
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">{{ old('author', $record->content ?? '') }}</textarea>

            {{-- author --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="author" style="display: block; margin-bottom: 6px;">author:</label>
                <textarea id="author" name="author" rows="4"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">{{ old('author', $record->author ?? '') }}</textarea>
            </div>
            {{-- hinh --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="image_url" style="display: block; margin-bottom: 6px;"><button style="cursor: pointer;">Up hinh</button></label>
                <input type="file" id="image_url" name="image_url"
                    accept="image/*"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                @if (old('image_url', $record->image_url ?? ''))
                <p>{{ isset($record->image_url) ? 'Giu hinh hien tai' : 'Up hinh moi' }} <img src="{{ asset('image/shoplist' . (old('image_url', $record->image_url ?? ''))) }}" alt="Current Image" style="max-width: 200px; margin-top: 10px;"></p>
                @endif
            </div>
            {{-- publish_date --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="publish_date" style="display: block; margin-bottom: 6px;">publish_date:</label>
                <input type="text" id="publish_date" name="publish_date"
                    value="{{ now()->format('Y-m-d H:i:s') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- trang thái --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="status" style="display: block; margin-bottom: 6px;">Trạng thái:</label>
                <select id="status" name="status" required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                    <option value="draft" {{ old('status', $record->status ?? '') == 'draft' ? 'selected' : '' }}>draft</option>
                    <option value="published" {{ old('status', $record->status ?? '') == 'published' ? 'selected' : '' }}>published</option>
                    <option value="archived" {{ old('status', $record->status ?? '') == 'archived' ? 'selected' : '' }}>archived</option>
                </select>
            </div>
            {{-- Created At --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="created_at" style="display: block; margin-bottom: 6px;">Ngày tạo:</label>
                <input type="text" id="created_at" name="created_at"
                    value="{{ old('created_at', $record->created_at ?? '') }}"
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
                    {{ isset($record->news_id) ? 'Cập nhật' : 'Thêm' }}
                </button>

                <a href="{{ url('/template/admin/news') }}"
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