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
                        <h2 class="title wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.4s">iComply
                            <span>Financial Compliance</span>
                        </h2>
                        <p class="content pe-xl-5 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            Stay ahead with our industry-leading compliance solutions, ensuring your business adheres to all
                            financial regulations. We provide seamless integration for smooth compliance management.
                        </p>
                        <a class="btn btn-border-base wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.6s" href="about.html">Get Started</a>
                        <div class="d-inline-block align-self-center wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.7s"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="banner-thumb-3 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="main-img-wrap">
                            <img class="main-img" src="{{ asset('assets/img/comply.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner end -->

    <div class="service-area bg-relative pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="section-title text-center">
                        <h6 class="sub-title">COMPLIANCE & MONITORING SERVICES</h6>
                        <h2 class="title">Ensure Financial Integrity with Our <span>Compliance & Monitoring</span>
                            Solutions</h2>
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
                            <h5><a href="https://novajii.com/ords/f?p=bulksms:register">Case Management</a></h5>
                            <p>Streamline your operations with our case management solutions. Access real-time data and
                                manage cases efficiently from any device with an internet connection.</p>
                            <a class="read-more-text" href="https://novajii.com/ords/f?p=bulksms:register">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-3">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/service-icon/22.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="https://novajii.com/ords/f?p=bulksms:register">Compliance Management</a></h5>
                            <p>Ensure that your business meets all regulatory requirements with our comprehensive compliance
                                management services. Easy access via web or mobile app.</p>
                            <a class="read-more-text" href="https://novajii.com/ords/f?p=bulksms:register">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-3">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/service-icon/33.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="https://novajii.com/ords/f?p=bulksms:register">Internal Control</a></h5>
                            <p>Strengthen your organization's internal controls to mitigate risks and ensure operational
                                efficiency. Accessible anytime, anywhere with an internet connection.</p>
                            <a class="read-more-text" href="https://novajii.com/ords/f?p=bulksms:register">Learn More </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- pricing-area start -->
    <div class="pricing-area bg-gray pd-top-80 pd-bottom-120">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="sub-title">Our Trusted Partners</h6>
                <h2 class="title">Partnering with Leaders for <span>Exceptional Services</span></h2>
            </div>
            <div class="row">
                <div class="swiper myPartners">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-partner">
                            <img src="assets/img/partners/fidelity.png" alt="Fidelity">
                        </div>
                        <div class="swiper-slide swiper-slide-partner">
                            <img src="assets/img/partners/lapo.png" alt="Lapo">
                        </div>
                        <div class="swiper-slide swiper-slide-partner">
                            <img src="assets/img/partners/mtn.png" alt="MTN">
                        </div>
                        <div class="swiper-slide swiper-slide-partner">
                            <img src="assets/img/partners/glo.png" alt="Glo">
                        </div>
                        <div class="swiper-slide swiper-slide-partner">
                            <img src="assets/img/partners/airtel.png" alt="Airtel">
                        </div>
                        <div class="swiper-slide swiper-slide-partner">
                            <img src="assets/img/partners/9mobile.png" alt="9Mobile">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing-area end -->
@endsection
