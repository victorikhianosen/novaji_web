@extends('layouts.app')

@section('main')
    <!-- page title start -->

    <!-- page title start -->

    <div class="banner-area bg-relative banner-area-2 bg-cover"
        style="background-image: url('{{ asset('assets/img/banner-3/5.png') }}');">
        <img class="bg-img-2" src="{{ asset('assets/img/banner-3/4.png') }}" alt="img">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="banner-inner pe-xl-5">
                        <h2 class="title wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.4s">Payment
                            <span>Financial</span> Freedom
                        </h2>
                        <p class="content pe-xl-5 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            Seamlessly manage your business transactions with secure, easy-to-integrate payment solutions.
                            Empower your customers to make payments effortlessly and boost your revenue.</p>
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
                            <img class="main-img" src="{{ asset('assets/img/banner-3/1.png') }}" alt="img">
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
                            <h5 class="mb-3"><a href="service-details.html">API Integration</a></h5>
                            <p class="mb-0">Seamlessly integrate powerful APIs into your system for faster and more
                                efficient workflows. Unlock new capabilities, streamline operations, and enhance your
                                service offerings with custom API solutions.</p>
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
                            <h5 class="mb-3"><a href="service-details.html">Online</a></h5>
                            <p class="mb-0">Experience the convenience of online services with instant access, secure
                                transactions, and seamless integration. Whether for personal or business needs, our platform
                                delivers fast, reliable, and user-friendly solutions.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- about area start -->

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
                        <h2 class="title">Mobile & Online Payment Solutions <span>Revolutionized</span></h2>
                        <p class="content mb-4">Our payment solutions empower businesses to accept payments seamlessly,
                            whether through mobile apps or online platforms. With just a few clicks, your customers can make
                            secure payments from anywhere at any time.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="single-list-inner style-check style-heading style-check mb-3">
                                    <li><i class="fas fa-check-circle"></i> Easy mobile payment integration</li>
                                    <li><i class="fas fa-check-circle"></i> Secure and fast transactions</li>
                                    <li><i class="fas fa-check-circle"></i> Easy payment tracking</li>

                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="single-list-inner style-check style-heading style-check mb-3">
                                    <li><i class="fas fa-check-circle"></i> Wide range of payment options</li>
                                    <li><i class="fas fa-check-circle"></i> Convenient online payments</li>
                                    <li><i class="fas fa-check-circle"></i> Seamless global payment</li>
                                </ul>
                            </div>
                        </div>

                        <p class="content">With mobile and online payment solutions, your customers can pay effortlessly
                            using their smartphones or desktops, whether they are at home or on the go. Security is a top
                            priority, ensuring encrypted and protected transactions at every step.</p>
                        <a class="btn btn-border-base" href="about.html">Get started </a>
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
                        <h2 class="title mb-4">💳 Simplify Transactions with Our <span>Payment API</span>!</h2>
                        <div class="media mb-3">
                            <div class="media-left me-3">
                                <img src="{{ asset('assets/img/icon/33.svg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Secure Transactions</h5>
                                <p class="mb-0">Process payments confidently with end-to-end encryption and fraud
                                    detection.</p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <div class="media-left me-3">
                                <img src="{{ asset('assets/img/icon/33.svg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Seamless Integration</h5>
                                <p class="mb-0">Connect your platform with ease using our robust and well-documented API.
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <div class="media-left me-3">
                                <img src="{{ asset('assets/img/icon/33.svg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Multi-Currency Support</h5>
                                <p class="mb-0">Enable transactions in multiple currencies for global customers.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left me-3">
                                <img src="{{ asset('assets/img/icon/33.svg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Real-Time Updates</h5>
                                <p class="mb-0">Stay informed with instant notifications for every transaction.</p>
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
