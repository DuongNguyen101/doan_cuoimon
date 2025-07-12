@extends('layout.user')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4">{{ $news->title }}</h2>
    
    <p class="text-muted mb-2">
        <i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($news->created_at)->format('d F, Y') }}
    </p>

    <div class="text-center mb-4">
        <img src="{{ asset('image/shoplist/' . $news->image_url) }}" alt="{{ $news->title }}" class="img-fluid rounded">
    </div>

    <div class="blog-content" >
        {!! $news->description !!}
    </div>
</div>
@endsection
