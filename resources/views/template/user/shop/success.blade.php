@extends('layout.user')

@section('content')
<div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-lg p-5 rounded-4 text-center" style="max-width: 600px; width: 100%;">
        <div class="text-success mb-4">
            <i class="fas fa-check-circle fa-4x"></i>
        </div>
        <h2 class="text-success mb-3">Payment Successful!</h2>
        <p class="mb-1">Transaction ID: <strong>{{ $txnRef }}</strong></p>
        <p class="mb-1">Amount Paid: <strong>{{ $amount }} VND</strong></p>
        <p class="mb-4">Payment Time: <strong>{{ $time }}</strong></p>

        <a href="{{ url('/') }}" class="btn btn-outline-success px-4">Back to Home</a>
    </div>
</div>
@endsection
