@extends('layouts.app')

@section('main')
    <!-- page title start -->

    <div class="banner-area bg-relative banner-area-2 bg-cover"
        style="background-image: url('{{ asset('assets/img/banner-3/5.png') }}');">
        <img class="bg-img-2" src="{{ asset('assets/img/banner-3/4.png') }}" alt="img">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="banner-inner pe-xl-5">
                        <h2 class="title wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.4s">
                            SMS <span>Financial</span> Freedom
                        </h2>
                        <p class="content pe-xl-5 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            Leverage the power of SMS to unlock seamless communication, enhance customer engagement,
                            and drive financial growth. Elevate your business with our reliable SMS solutions today!
                        </p>
                        <a class="btn btn-border-base wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.6s" href="about.html">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="banner-thumb-3 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="main-img-wrap">
                            <img class="main-img" src="{{ asset('assets/img/sms.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner end -->

    <div class="service-area bg-relative pd-top-100 pd-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pe-5">
                    <div class="single-service-inner-3 single-service-inner-3-left">
                        <div class="thumb">
                            <div class="thumb-inner">
                                <img src="{{ asset('assets/img/service/11.svg') }}" alt="img">
                            </div>
                        </div>
                        <div class="details">
                            <h5 class="mb-3"><a href="service-details.html">Single SMS</a></h5>
                            <p class="mb-0">Easily send personalized messages to your customers with our fast and reliable
                                SMS service.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 ps-5">
                    <div class="single-service-inner-3 single-service-inner-3-right">
                        <div class="thumb">
                            <div class="thumb-inner">
                                <img src="{{ asset('assets/img/service/11.svg') }}" alt="img">
                            </div>
                        </div>
                        <div class="details">
                            <h5 class="mb-3"><a href="service-details.html">Bulk SMS</a></h5>
                            <p class="mb-0">Send thousands of SMS to your customers in seconds with our powerful and
                                scalable service.</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="price-process-area pd-top-120">
        <div class="contact-inner-1 contact-inner-2">
            <div class="row">
                <div class="col-lg-6 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.6s">
                    <img class="w-100" src="{{ asset('assets/img/about/12.png') }}" alt="img">
                </div>
                <div class="col-lg-4 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.6s">
                    <div class="section-title mb-0">
                        <h2 class="title mb-4">📩 Power Up Communication with Our <span>SMS API</span>!</h2>
                        <div class="media mb-3">
                            <div class="media-left me-3">
                                <img src="{{ asset('assets/img/icon/33.svg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Reliable Message Delivery</h5>
                                <p class="mb-0">Ensure fast, reliable message delivery to your users with our optimized
                                    platform.</p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <div class="media-left me-3">
                                <img src="{{ asset('assets/img/icon/33.svg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Global Reach</h5>
                                <p class="mb-0">Reach users across the globe effortlessly with seamless international SMS
                                    delivery.</p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <div class="media-left me-3">
                                <img src="{{ asset('assets/img/icon/33.svg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Developer-Friendly Integration</h5>
                                <p class="mb-0">Easily integrate with our platform using clear documentation and developer
                                    support.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left me-3">
                                <img src="{{ asset('assets/img/icon/33.svg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Customizable Messaging</h5>
                                <p class="mb-0">Tailor your messages to meet your specific needs and engage customers more
                                    effectively.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



        <div class="pricing-area bg-gray pd-top-80 pd-bottom-120">
        <div class="container">
         <div class="section-title text-center">
                <h6 class="sub-title">Our Trusted Partners</h6>
                <h2 class="title">Partnering with Leaders for <span>Exceptional Services</span></h2>
            </div>
            <div class="row">
                <div class="swiper myPartners">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-partner"><img
                                src="{{ asset('assets/img/partners/fidelity.png') }}" alt=""></div>
                        <div class="swiper-slide swiper-slide-partner"><img
                                src="{{ asset('assets/img/partners/lapo.png') }}" alt=""></div>
                        <div class="swiper-slide swiper-slide-partner"><img
                                src="{{ asset('assets/img/partners/mtn.png') }}" alt=""></div>
                        <div class="swiper-slide swiper-slide-partner"><img
                                src="{{ asset('assets/img/partners/glo.png') }}" alt=""></div>
                        <div class="swiper-slide swiper-slide-partner"><img
                                src="{{ asset('assets/img/partners/airtel.png') }}" alt=""></div>
                        <div class="swiper-slide swiper-slide-partner"><img
                                src="{{ asset('assets/img/partners/9mobile.png') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
