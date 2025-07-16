@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    <a href="{{url('/template/admin/payments')}}">Back</a>
    <div class="form-container">
        <h2>{{ isset($record->payment_id) ? 'Sửa Payments' : 'Thêm Payments' }}</h2>
        <form method="POST" action="{{ isset($record->order_id) ? route('payments.update', ['id' => $record->payment_id]) : route('payments.update') }}"
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

            {{-- order_id --}}

            <label for="order_id" style="display: block; margin-bottom: 6px;">order_id:</label>
            <select id="order_id" name="order_id" required
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                @foreach ( $fk as $key)
                <option value="{{$key->order_id}}">{{$key->order_id}}</option>
                @endforeach
            </select>
            {{-- payment_id --}}
            <input type="hidden" name="payment_id" value="{{ old('news_id', $record->payment_id ?? '') }}" readonly>

            {{-- order_date --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="order_date" style="display: block; margin-bottom: 6px;">order_date:</label>
                <input type="text" id="order_date" name="order_date"
                    value="{{ now()->format('Y-m-d H:i:s') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            {{-- amount --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="amount" style="display: block; margin-bottom: 6px;">amount:</label>
                <textarea id="amount" name="amount" rows="4"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">{{ old('author', $record->amount ?? '') }}</textarea>
            </div>
            {{-- payment_method --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="payment_method" style="display: block; margin-bottom: 6px;">Trạng thái:</label>
                <select id="payment_method" name="payment_method" required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                    <option value="credit_card" {{ old('payment_method', $record->payment_method ?? '') == 'credit_card' ? 'selected' : '' }}>credit_card</option>
                    <option value="cash_on_delivery" {{ old('payment_method', $record->payment_method ?? '') == 'cash_on_delivery' ? 'selected' : '' }}>cash_on_delivery</option>
                    <option value="bank_transfer" {{ old('payment_method', $record->payment_method ?? '') == 'bank_transfer' ? 'selected' : '' }}>bank_transfer</option>
                </select>
            </div>
            {{-- payment_date --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="payment_date" style="display: block; margin-bottom: 6px;">created_at:</label>
                <input type="date" id="payment_date" name="payment_date"
                    value="{{ old('created_at', $record->payment_date ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            {{-- trang thái --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="status" style="display: block; margin-bottom: 6px;">Trạng thái:</label>
                <select id="status" name="status" required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                    <option value="pending" {{ old('status', $record->status ?? '') == 'pending' ? 'selected' : '' }}>pending</option>
                    <option value="completed" {{ old('status', $record->status ?? '') == 'completed' ? 'selected' : '' }}>completed</option>
                    <option value="failed" {{ old('status', $record->status ?? '') == 'failed' ? 'selected' : '' }}>failed</option>
                </select>
            </div>
            {{-- transaction_id At --}}
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="transaction_id" style="display: block; margin-bottom: 6px;">transaction_id At:</label>
                <input type="text" id="transaction_id" name="transaction_id"
                    value="{{ old('transaction_id', $record->transaction_id ?? '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
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