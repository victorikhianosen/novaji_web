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
                        <h2 class="title wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.4s">Web App
                            <span>Solutions</span> for Your Business</h2>
                        <p class="content pe-xl-5 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">We
                            specialize in creating high-performance, user-friendly web apps that help streamline your
                            business operations and enhance your brand presence.</p>
                        <a class="btn btn-border-base wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.6s" href="{{ url('https://novajii.com/ords/f?p=bulksms:login') }}">Get
                            Started</a>
                        <div class="d-inline-block align-self-center wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.7s">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="banner-thumb-3 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="main-img-wrap">
                            <img class="main-img" src="{{ asset('assets/img/web.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="service-area bg-relative pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="section-title text-center">
                        <h6 class="sub-title">CUSTOM APPLICATION DEVELOPMENT</h6>
                        <h2 class="title">Your Trusted Partner for <span>Building Powerful Applications</span></h2>
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
                            <h5><a href="https://novajii.com/ords/f?p=bulksms:register">Tailored for Your Needs</a></h5>
                            <p>We create custom applications that meet your business goals and user needs, ensuring your
                                success.</p>
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
                            <h5><a href="https://novajii.com/ords/f?p=bulksms:register">Seamless User Experience</a></h5>
                            <p>We focus on crafting intuitive user interfaces that provide seamless interactions across all
                                devices.</p>
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
                            <h5><a href="https://novajii.com/ords/f?p=bulksms:register">High-Performance Apps</a></h5>
                            <p>We build scalable and optimized applications to handle your growing business needs
                                efficiently.</p>
                            <a class="read-more-text" href="https://novajii.com/ords/f?p=bulksms:register">Learn More</a>
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
                        <h2 class="title mb-4">Smarter Applications for <span>Smart</span> Businesses</h2>
                        <div class="media mb-3">
                            <div class="media-left me-3">
                                <img src="{{ asset('assets/img/icon/33.svg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Efficient Solutions</h5>
                                <p class="mb-0">We provide tailored, high-performance applications designed for seamless
                                    user experiences.</p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <div class="media-left me-3">
                                <img src="{{ asset('assets/img/icon/33.svg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Scalable Growth</h5>
                                <p class="mb-0">Our applications scale with your business, ensuring sustainable growth and
                                    long-term success.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left me-3">
                                <img src="{{ asset('assets/img/icon/33.svg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Cutting-edge Technology</h5>
                                <p class="mb-0">We leverage the latest technologies to build applications that are ahead
                                    of the curve and future-ready.</p>
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
