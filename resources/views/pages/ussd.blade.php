@extends('layouts.app')

@section('main')
    <div class="banner-area bg-relative banner-area-2 bg-cover"
        style="background-image: url('{{ asset('assets/img/banner-3/5.png') }}');">
        <img class="bg-img-2" src="{{ asset('assets/img/banner-3/4.png') }}" alt="img">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="banner-inner pe-xl-5">
                        <h2 class="title wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.4s">USSD
                            <span>Empowering</span> Financial Freedom
                        </h2>
                        <p class="content pe-xl-5 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            Unlock effortless financial solutions with USSD services designed for businesses to reach
                            customers, regardless of internet access. Simplify payments, account management, and more with
                            ease.</p>
                        <a class="btn btn-border-base wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.6s" href="about.html">Get Started</a>
                        <div class="d-inline-block align-self-center wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.7s">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="banner-thumb-3 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="main-img-wrap">
                            <img class="main-img" src="{{ asset('assets/img/ussd.png') }}" alt="img">
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
                            <h5 class="mb-3"><a href="service-details.html">Dedicated Code</a></h5>
                            <p class="mb-0">Our dedicated coding services provide robust, scalable solutions to meet your
                                business needs.</p>
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
                            <h5 class="mb-3"><a href="service-details.html">Shared Code</a></h5>
                            <p class="mb-0">Our shared code solutions offer efficient collaboration, ensuring seamless
                                project development.</p>
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
                        <h2 class="title mb-4">🚀 Elevate Your Services with Our <span>USSD API</span>!</h2>
                        <div class="media mb-3">
                            <div class="media-left me-3">
                                <img src="{{ asset('assets/img/icon/33.svg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Blazing Fast Response Time</h5>
                                <p class="mb-0">Deliver instant responses, ensuring seamless user experience.</p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <div class="media-left me-3">
                                <img src="{{ asset('assets/img/icon/33.svg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Effortless Integration</h5>
                                <p class="mb-0">Simple setup with comprehensive documentation and expert support.</p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <div class="media-left me-3">
                                <img src="{{ asset('assets/img/icon/33.svg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Scalable & Secure</h5>
                                <p class="mb-0">Grow without limits while maintaining robust security at every step.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left me-3">
                                <img src="{{ asset('assets/img/icon/33.svg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Affordable Pricing</h5>
                                <p class="mb-0">Gain access to powerful features without compromising your budget.</p>
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
