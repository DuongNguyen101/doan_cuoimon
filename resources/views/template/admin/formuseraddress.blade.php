@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    <a href="{{url('/template/admin/news')}}">Back</a>
    <div class="form-container">
        <h2>{{ isset($record->id) ? 'Update useraddress' : 'add useraddress' }}</h2>
        <form method="POST" action="{{ isset($record->id) ? route('address.update', ['id' => $record->id]) : route('address.update') }}"
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
            {{-- address_id --}}
            <input type="hidden" name="id" value="{{ old('id', $record->id ?? '') }}" readonly>

            {{-- user_id --}}
            <label for="order_id" style="display: block; margin-bottom: 6px;">user_id:</label>
            <select id="user_id" name="user_id" required
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                @foreach ( $fk as $key)
                <option value="{{$key->id}}">{{$key->id}}.{{$key->name}}</option>
                @endforeach
            </select>

            {{-- street --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="street" style="display: block; margin-bottom: 6px;">street:</label>
                <textarea id="street" name="street" rows="4"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">{{ old('street', $record->street ?? '') }}</textarea>
            </div>
            {{-- city --}}
            <div class=" form-group" style="margin-bottom: 15px;">
                <label for="city" style="display: block; margin-bottom: 6px;">city:</label>
                <textarea id="city" name="city" rows="4" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">{{ old('description', $record->city ?? '') }}</textarea>
            </div>
            {{-- district --}}
            <div class=" form-group" style="margin-bottom: 15px;">
                <label for="district" style="display: block; margin-bottom: 6px;">district:</label>
                <textarea id="district" name="district" rows="4" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">{{ old('description', $record->district ?? '') }}</textarea>
            </div>
            {{-- Created At --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="created_at" style="display: block; margin-bottom: 6px;">Created At:</label>
                <input type="text" id="created_at" name="created_at"
                    value="{{ old('created_at', $record->created_at ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            {{-- Updated At --}}
            <div class="form-group" style="margin-bottom: 25px;">
                <label for="updated_at" style="display: block; margin-bottom: 6px;">Updated:</label>
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
                        Canncel
                    </button>
                </a>
                <button type="submit"
                    style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer; margin-right: 10px;">
                    {{ isset($record->id) ? 'Update' : 'Add' }}
                </button>


            </div>
        </form>

    </div>

</div>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection