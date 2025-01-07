@extends('layouts.app')

@section('main')
    <!-- service area start -->



    <div class="breadcrumb-area bg-cover" style="background-image: url('./assets/img/bg/3.png');">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="page-title">Services</h2>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <ul class="page-list">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="service-area bg-relative pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <!-- Service 1: iComply -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-3">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/service-icon/11.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="service-details.html">iComply</a></h5>
                            <p>iComply is a powerful solution that helps businesses ensure compliance with industry
                                regulations, simplifying reporting and monitoring.</p>
                            <a class="read-more-text" href="https://novajii.com/ords/f?p=bulksms:register">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Soft Tokenn -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-3">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/service-icon/token.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="service-details.html">Soft Tokenn</a></h5>
                            <p>Soft Tokenn provides secure, scalable tokenization solutions to protect sensitive data and
                                reduce fraud in digital transactions.</p>
                            <a class="read-more-text" href="https://novajii.com/ords/f?p=bulksms:register">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 3: ERP -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-3">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/service-icon/web.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="service-details.html">ERP</a></h5>
                            <p>Our ERP solution integrates all core business processes into one unified system, offering
                                real-time insights and improved efficiency.</p>
                            <a class="read-more-text" href="https://novajii.com/ords/f?p=bulksms:register">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- service area end -->
@endsection
