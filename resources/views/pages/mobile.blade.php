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
                        <h2 class="title wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.4s">Innovative
                            <span>Mobile</span> Solutions
                        </h2>
                        <p class="content pe-xl-5 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            Delivering seamless mobile experiences that drive business success and growth.</p>
                        <a class="btn btn-border-base wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.6s" href="{{ url('https://novajii.com/ords/f?p=bulksms:login') }}">Get
                            Started</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="banner-thumb-3 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="main-img-wrap">
                            <img class="main-img" src="{{ asset('assets/img/banner-2/1.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner end -->

    <!-- service area start -->

    <div class="service-area bg-relative pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-8 col-lg-10">
                    <div class="section-title text-center">
                        <h6 class="sub-title">MOBILE DEVELOPMENT SERVICES</h6>
                        <h2 class="title">Build Your Future with <span>Custom Mobile Apps</span></h2>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-3">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/service-icon/11.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="https://novajii.com/ords/f?p=bulksms:register">Best-in-Class Solutions</a></h5>
                            <p>Access SaaS applications easily via browser or mobile app, anytime, anywhere.</p>
                            <a class="read-more-text" href="https://novajii.com/ords/f?p=bulksms:register">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-3">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/service-icon/22.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="https://novajii.com/ords/f?p=bulksms:register">Detail-Oriented Approach</a></h5>
                            <p>Seamless access to applications with robust functionality on all devices.</p>
                            <a class="read-more-text" href="https://novajii.com/ords/f?p=bulksms:register">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-3">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/service-icon/33.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="https://novajii.com/ords/f?p=bulksms:register">Flawless Execution</a></h5>
                            <p>Ensure reliable, high-performance SaaS applications accessible on any device.</p>
                            <a class="read-more-text" href="https://novajii.com/ords/f?p=bulksms:register">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="about-area bg-gradient-gray pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="about-thumb-inner mb-4 mb-lg-0">
                        <img class="main-img" src="{{ asset('assets/img/about/11.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="section-title mb-0">
                        <h2 class="title">Transforming <span>Your Ideas into Mobile Experiences</span></h2>
                        <p class="content mb-4">Access your mobile apps seamlessly across all devices and platforms,
                            ensuring an enhanced user experience.</p>

                        <div class="row">
                            <div class="col-md-6">
                                <ul class="single-list-inner style-check style-heading mb-3">
                                    <li><i class="fas fa-check-circle"></i> Custom mobile app development</li>
                                    <li><i class="fas fa-check-circle"></i> Cross-platform solutions</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="single-list-inner style-check style-heading mb-3">
                                    <li><i class="fas fa-check-circle"></i> Scalable and high-performance</li>
                                    <li><i class="fas fa-check-circle"></i> Secure, user-friendly designs</li>
                                </ul>
                            </div>
                        </div>

                        <p class="content">We prioritize security and performance in mobile app development, ensuring
                            encryption and seamless updates to safeguard your app and users.</p>
                        <a class="btn btn-border-base" href="{{ url('https://novajii.com/ords/f?p=bulksms:login') }}">Start
                            Your Mobile Journey</a>
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
