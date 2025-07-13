@extends('layout.user')
@section('content')
<section class="title-banner">
    <div class="container-fluid">
        <div class="banner-wrapper">
            <h1 class="dark-black fw-600">Blog</h1>
        </div>
    </div>
</section>


<section class="blog-section bg-lightest-gray py-40">
    <div class="container-fluid">
        <div class="row row-gap-3">
            @foreach($news as $item)
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <a href="{{ url('template/user/blog/blog-detail/' . $item->news_id) }}">
                        <div class="blog-image" style="width: 100%; height: 210px; overflow: hidden;">
                            <img src="{{ asset('image/shoplist/' . $item->image_url) }}" alt="{{ $item->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center gap-16 mb-16">
                                <img src="{{ url('user/media/icons/calender.png') }}" alt="">
                                <p class="fw-500 dark-black">{{ \Carbon\Carbon::parse($item->created_at)->format('d F, Y') }}</p>
                            </div>
                            <h6 class="mb-16 fw-600">{{ Str::limit($item->title, 70) }}</h6>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                            </div>
                            <p class="light-gray mb-32">{{ Str::limit(strip_tags($item->content), 100) }}</p>
                            <div class="cus-btn-arrow">Read More
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                                    <path d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                        stroke="#0C0C0D" stroke-width="2" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection