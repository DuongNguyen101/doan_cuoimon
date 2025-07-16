@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    <a href="{{url('/template/admin/reviews')}}">Back</a>
    <div class="form-container">
        <h2>{{ isset($record->review_id) ? 'Sửa reviews' : 'Thêm reviews' }}</h2>
        <form method="POST" action="{{ isset($record->review_id) ? route('reviews.update', ['id' => $record->review_id]) : route('reviews.update') }}"
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

            <label for="product_id" style="display: block; margin-bottom: 6px;">user_id:</label>
            <select id="user_id" name="user_id" required
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                @foreach ( $fk as $key)
                <option value="{{$key->id}}">{{$key->id}}. {{$key->name}}</option>
                @endforeach
            </select>
            {{-- review_id --}}
            <input type="hidden" name="review_id" value="{{ old('news_id', $record->review_id ?? '') }}" readonly>
            {{-- review_id --}}
            <input type="hidden" name="product_id" value="{{ old('product_id', $record->product_id ?? '') }}" readonly>

            {{-- rating --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="rating" style="display: block; margin-bottom: 6px;">rating:</label>
                <input type="text" id="rating" name="rating"
                    value="{{ old('rating', $record->rating ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- comment --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="comment" style="display: block; margin-bottom: 6px;">comment:</label>
                <textarea id="comment" name="comment" rows="4"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">{{ old('comment', $record->comment ?? '') }}</textarea>
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
                <a href="{{ url('/template/admin/reviews') }}"
                    style="text-decoration: none;">
                    <button type="button"
                        style="background-color: #dc3545; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer;">
                        Cancel
                    </button>
                </a>
                <button type="submit"
                    style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer; margin-right: 10px;">
                    {{ isset($record->review_id) ? 'Update' : 'Add' }}
                </button>


            </div>
        </form>

    </div>

</div>


@endsection