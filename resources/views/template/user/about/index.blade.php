@extends('layout.user')
@section('content')
<section class="title-banner">
    <div class="container-fluid">
        <div class="banner-wrapper">
            <h1 class="dark-black fw-600">About</h1>
        </div>
    </div>
</section>

<section class="about-section py-40">
    <div class="container-fluid">
        <div class="about-wrapper bg-white">
            @foreach($abouts as $index => $about)
            <div class="about-block mb-24">
                <div class="row align-items-center row-gap-4">
                    {{-- Nội dung trái/phải tùy theo index --}}
                    @if($index % 2 === 0)
                    {{-- Text Left, Image Right --}}
                    <div class="col-xl-6 col-lg-7 order-sm-1 order-2">
                        <div class="about-content">
                            <h3 class="mb-24">{{ $about->title }}</h3>
                            <p class="light-gray mb-24">{!! nl2br(e($about->description)) !!}</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 order-sm-2 order-1">
                        <div class="about-image">
                            <img src="{{ asset('image/about/' . $about->image) }}" alt="{{ $about->title }}" class="br-20">
                        </div>
                    </div>
                    @else
                    {{-- Image Left, Text Right --}}
                    <div class="col-xl-6 col-lg-5">
                        <div class="about-image">
                            <img src="{{ asset('image/about/' . $about->image) }}" alt="{{ $about->title }}" class="br-20">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="about-content">
                            <h3 class="mb-24">{{ $about->title }}</h3>
                            <p class="light-gray mb-24">{!! nl2br(e($about->description)) !!}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section class="whyChoose-us py-40">
    <div class="container-fluid">
        <div class="title-row text-center mb-16" style="background-color: #fff;">
            <h5>Why Choose Us</h5>
        </div>
        <div class="row row-gap-3">
            <div class="col-xl-3 col-lg-6 col-sm-6 d-flex">
                <div class="our-block bg-white br-10 text-center p-4 w-100 h-100 d-flex flex-column justify-content-between">
                    <div class="icon-block m-auto">
                        <img src="{{url('user')}}/media/icons/quality.png" alt="">
                    </div>
                    <h6 class="mt-24 mb-16 fw-600">Quality Assurance</h6>
                    <p class="light-gray">
                        We are committed to delivering only the highest quality products, ensuring every detail meets strict standards for safety, reliability, and customer satisfaction.
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 d-flex">
                <div class="our-block bg-white br-10 text-center p-4 w-100 h-100 d-flex flex-column justify-content-between">
                    <div class="icon-block m-auto">
                        <img src="{{url('user')}}/media/icons/customer.png" alt="">
                    </div>
                    <h6 class="mt-24 mb-16 fw-600">Customer-Centric</h6>
                    <p class="light-gray">
                        We put customers at the heart of everything we do, listening to their needs and continuously improving to deliver the best possible experience.
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 d-flex">
                <div class="our-block bg-white br-10 text-center p-4 w-100 h-100 d-flex flex-column justify-content-between">
                    <div class="icon-block m-auto">
                        <img src="{{url('user')}}/media/icons/wishlist-icon.png" alt="">
                    </div>
                    <h6 class="mt-24 mb-16 fw-600">Secure Shopping</h6>
                    <p class="light-gray">
                        Your safety is our priority — we ensure secure payment gateways and protect your personal information at every step.
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 d-flex">
                <div class="our-block bg-white br-10 text-center p-4 w-100 h-100 d-flex flex-column justify-content-between">
                    <div class="icon-block m-auto">
                        <img src="{{url('user')}}/media/icons/cheque.png" alt="">
                    </div>
                    <h6 class="mt-24 mb-16 fw-600">Affordable Prices</h6>
                    <p class="light-gray">
                        High quality doesn't have to mean high cost — we offer top products at fair prices.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-section py-40">
    <div class="container-fluid">
        <div class="title-row mb-16 text-center" style="background-color: #fff;">
            <h5>Meet Our Team</h5>
        </div>
        <div class="row row-gap-3 justify-content-center">
            @foreach($teamMembers as $member)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 d-flex justify-content-center">
                <div class="team-block bg-white text-center w-100">
                    <div class="image-box mb-24">
                        <img src="{{ url('image/user/' . $member->image) }}" alt="{{ $member->name }}" class="br-10 w-100" height="100px" width="auto">
                    </div>
                    <div class="content-box">
                        <h6 class="mb-8">{{ $member->name }}</h6>
                        <p class="mb-16">
                            @if ($member->email == 'phamquangson0702@gmail.com' || $member->email == 'khangvi742@gmail.com')
                            Dev Developers
                            @elseif ($member->email == 'Nguyenduong01@gmail.com')
                            Team Leader
                            @else
                            Unknown Role
                            @endif
                        </p>
                        <p class="light-gray">
                            {{ $member->description ?? 'No description available.' }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<div class="faq py-40">
    <div class="container-fluid">
        <div class="title-row mb-16 text-center" style="background-color: #fff;">
            <h5>Frequently Asked Questions</h5>
        </div>
        <div class="row">

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="accordion" id="accordionLeft">
                        @foreach($questions->take(3) as $index => $qna)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingLeft{{ $index }}">
                                <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseLeft{{ $index }}"
                                    aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                    aria-controls="collapseLeft{{ $index }}">
                                    {{ $qna->question }}
                                </button>
                            </h2>
                            <div id="collapseLeft{{ $index }}"
                                class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                aria-labelledby="headingLeft{{ $index }}"
                                data-bs-parent="#accordionLeft">
                                <div class="accordion-body">
                                    {{ $qna->answer }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="accordion" id="accordionRight">
                        @foreach($questions->slice(3, 3) as $i => $qna)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingRight{{ $i }}">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseRight{{ $i }}"
                                    aria-expanded="false"
                                    aria-controls="collapseRight{{ $i }}">
                                    {{ $qna->question }}
                                </button>
                            </h2>
                            <div id="collapseRight{{ $i }}"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingRight{{ $i }}"
                                data-bs-parent="#accordionRight">
                                <div class="accordion-body">
                                    {{ $qna->answer }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection