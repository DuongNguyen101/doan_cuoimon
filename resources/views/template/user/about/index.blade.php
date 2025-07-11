@extends('layout.user')
@section('content')
<section class="title-banner">
    <div class="container-fluid">
        <div class="banner-wrapper">
            <h1 class="dark-black fw-600">About Products</h1>
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
        <div class="row row-gap-3">
            <div class="col-xl-6 col-lg-12">
                <div id="accordionExample">
                    <div class="faq-block" style="background-color: #fff;">
                        <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">What is the return policy for your products?
                        </a>
                        <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#accordionExample">
                            <p class="light-gray">We offer a 30-day return policy on all our products. If you are not satisfied with
                                your purchase, you can return the
                                item within 30 days of delivery for a full refund or exchange. Please ensure the product is in its
                                original condition
                                and packaging. For more details, visit our <span class="color-primary"> Return Policy </span> page.
                            </p>
                        </div>
                    </div>
                    <div class="faq-block" style="background-color: #fff;">
                        <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">How can I track my order?
                        </a>
                        <div id="faq2" class="accordion-collapse collapse " aria-labelledby="faq2" data-bs-parent="#accordionExample">
                            <p class="light-gray">We offer a 30-day return policy on all our products. If you are not satisfied with
                                your purchase, you can return the
                                item within 30 days of delivery for a full refund or exchange. Please ensure the product is in its
                                original condition
                                and packaging. For more details, visit our <span class="color-primary"> Return Policy </span> page.
                            </p>
                        </div>
                    </div>
                    <div class="faq-block m-0" style="background-color: #fff;">
                        <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="true" aria-controls="faq3">How can I contact customer support?
                        </a>
                        <div id="faq3" class="accordion-collapse collapse " aria-labelledby="faq3" data-bs-parent="#accordionExample">
                            <p class="light-gray">We offer a 30-day return policy on all our products. If you are not satisfied with
                                your purchase, you can return the
                                item within 30 days of delivery for a full refund or exchange. Please ensure the product is in its
                                original condition
                                and packaging. For more details, visit our <span class="color-primary"> Return Policy </span> page.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div id="accordionExample_2">
                    <div class="faq-block" style="background-color: #fff;">
                        <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="true" aria-controls="faq5">Do you offer international shipping?
                        </a>
                        <div id="faq5" class="accordion-collapse collapse show" aria-labelledby="faq5" data-bs-parent="#accordionExample_2">
                            <p class="light-gray">Answer: Yes, we offer international shipping to most countries. Shipping fees and
                                delivery times vary based on the
                                destination. You can view the shipping options and costs during the checkout process. For more
                                information, please check
                                our <span class="color-primary">Shipping Information</span> page. </p>
                        </div>
                    </div>
                    <div class="faq-block" style="background-color: #fff;">
                        <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="true" aria-controls="faq6">What payment methods do you accept?
                        </a>
                        <div id="faq6" class="accordion-collapse collapse " aria-labelledby="faq6" data-bs-parent="#accordionExample_2">
                            <p class="light-gray">We offer a 30-day return policy on all our products. If you are not satisfied with
                                your purchase, you can return the
                                item within 30 days of delivery for a full refund or exchange. Please ensure the product is in its
                                original condition
                                and packaging. For more details, visit our <span class="color-primary"> Return Policy </span> page.
                            </p>
                        </div>
                    </div>
                    <div class="faq-block m-0" style="background-color: #fff;">
                        <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="true" aria-controls="faq7">How do I apply a discount code to my order?
                        </a>
                        <div id="faq7" class="accordion-collapse collapse " aria-labelledby="faq7" data-bs-parent="#accordionExample_2">
                            <p class="light-gray">We offer a 30-day return policy on all our products. If you are not satisfied with
                                your purchase, you can return the
                                item within 30 days of delivery for a full refund or exchange. Please ensure the product is in its
                                original condition
                                and packaging. For more details, visit our <span class="color-primary"> Return Policy </span> page.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection