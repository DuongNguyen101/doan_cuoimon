@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    <a href="{{url('/template/admin/dashboard')}}">Back</a>
    <div class="form-container">
        <h2>{{ isset($category->category_id) ? 'Update Category' : 'Add new category' }}</h2>
        <form method="POST" action="{{ url('/template/admin/dashboard/form/action') }}"
            style="max-width: 600px; margin: 40px auto; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">

            @csrf

            <h2 style="text-align: center; margin-bottom: 25px;">
                {{ isset($category->category_id) ? 'Update Category' : 'Add new category' }}
            </h2>

            {{-- Tên danh mục --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="name" style="display: block; margin-bottom: 6px;">Categroy name:</label>
                <input type="text" id="name" name="name"
                    value="{{ old('name', $category->name ?? '') }}"
                    required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            {{-- Hidden ID --}}
            <input type="hidden" name="category_id" value="{{ old('category_id', $category->category_id ?? '') }}">

            {{-- Mô tả --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="description" style="display: block; margin-bottom: 6px;">description:</label>
                <textarea id="description" name="description" rows="4"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">{{ old('description', $category->description ?? '') }}</textarea>
            </div>

            {{-- Created At --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="created_at" style="display: block; margin-bottom: 6px;">created_at:</label>
                <input type="text" id="created_at" name="created_at"
                    value="{{ old('created_at', $category->created_at ?? '') }}"
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
                <a href="{{ url('/template/admin/dashboard') }}"
                    style="text-decoration: none;">
                    <button type="button"
                        style="background-color: #dc3545; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer;">
                        Cancel
                    </button>
                </a>
                <button type="submit"
                    style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer; margin-right: 10px;">
                    {{ isset($category->category_id) ? 'Update' : 'Add' }}
                </button>


            </div>
        </form>

    </div>

</div>


@endsection