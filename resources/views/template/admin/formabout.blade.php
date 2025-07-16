@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    <a href="{{url('/template/admin/about')}}">Back</a>
    <div class="form-container">
        <h2>{{ isset($record->id) ? 'Sửa About' : 'Thêm About' }}</h2>
        <form method="POST" action="{{ isset($record->id) ? route('about.update', ['id' => $record->id]) : route('about.update') }}"
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

            {{-- id --}}
            <input type="hidden" name="id" value="{{ old('news_id', $record->id ?? '') }}" readonly>
            {{-- title --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="title" style="display: block; margin-bottom: 6px;">title:</label>
                <textarea id="title" name="title" rows="4"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">{{ old('author', $record->title ?? '') }}</textarea>
            </div>
            {{-- description At --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="description" style="display: block; margin-bottom: 6px;">description At:</label>
                <input type="text" id="description" name="description"
                    value="{{ old('description', $record->description ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- Image --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="image" style="display: block; margin-bottom: 6px;"><button style="cursor: pointer;">Up hinh</button></label>
                <input type="file" id="image" name="image"
                    accept="image/*"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                @if (old('image', $User->image ?? ''))
                <p>{{ isset($User->id) ? 'Giu hinh hien tai' : 'Up hinh moi' }} <img src="{{ asset('image/shoplist/' . (old('image', $User->image ?? ''))) }}" alt="Current Image" style="max-width: 50px; margin-top: 10px;"></p>
                @endif
            </div>


            {{-- Created At --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="created_at" style="display: block; margin-bottom: 6px;">created_at:</label>
                <input type="text" id="created_at" name="created_at"
                    value="{{ old('created_at', $record->created_at ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- Buttons --}}
            <div style="text-align: center;">
                <button type="submit"
                    style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer; margin-right: 10px;">
                    {{ isset($record->id) ? 'Update' : 'Add' }}
                </button>

                <a href="{{ url('/template/admin/news') }}"
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