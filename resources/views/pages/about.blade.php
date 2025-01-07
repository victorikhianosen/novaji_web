@extends('layouts.app')

@section('main')
    <!-- page title start -->
    <div class="breadcrumb-area bg-cover" style="background-image: url('{{ asset('assets/img/bg/3.png') }}');">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="page-title">About Us</h2>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <ul class="page-list">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="about-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb-inner pe-xl-5 me-xl-5">
                        <img class="animate-img-1 top_image_bounce" src="{{ asset('assets/img/about/2.png') }}"
                            alt="img">
                        <img class="animate-img-2 left_image_bounce" src="{{ asset('assets/img/about/3.png') }}"
                            alt="img">
                        <img class="main-img" src="{{ asset('assets/img/about/1.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <h6 class="sub-title">ABOUT US</h6>
                        <h2 class="title">Novaji Introserve: A Leader in <span>FINTECH</span> and Mobile Solutions</h2>
                        <p class="content mb-xl-5">Novaji Introserve is a licensed VAS and FINTECH provider
                            specializing in mobile financial services, digital content monetization, and enterprise
                            solutions. Our services include Shortcode & USSD, Caller Tunes, Digital Media, ERP Solutions,
                            and other FINTECH offerings, driven by a passionate team and cutting-edge technology.</p>
                        <p class="content mb-4 mb-xl-5">With over 20 years of combined experience in Telecoms, Finance, IT,
                            and Customer Relations, our Board ensures we deliver top-tier services. We empower businesses
                            with innovative solutions, including Premium Shortcode, VAS development, Mobile Payment
                            Solutions, Systems Integration, and Business Intelligence.</p>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-about-inner">
                                    <div class="thumb mb-3">
                                        <img src="{{ asset('assets/img/icon/2.png') }}" alt="img">
                                    </div>

                                    <div class="details">
                                        <h5>Our Mission</h5>
                                        <p>Our mission is to provide innovative, reliable, and scalable solutions in VAS and
                                            FINTECH, empowering clients with cutting-edge technology for long-term success
                                            and growth.</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-about-inner">
                                    <div class="thumb mb-3">
                                        <img src="{{ asset('assets/img/icon/3.png') }}" alt="img">
                                    </div>
                                    <div class="details">
                                        <h5>Our Ambition</h5>
                                        <p>We strive to be at the forefront of technological innovation in the VAS and
                                            FINTECH space, delivering scalable and impactful solutions for businesses across
                                            various industries.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="work-process-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="sub-title">OUR PROJECT EXECUTION PROCESS</h6>
                <h2 class="title">How We Execute <span>Projects</span> with Excellence</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner">
                        <div class="thumb mb-3">
                            <img src="{{ asset('assets/img/about/think.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <p class="process-count">Step 01</p>
                            <h5 class="mb-3">Planning</h5>
                            <p class="content">We begin with thorough discussions to understand your goals, followed by
                                careful planning to ensure we meet your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner">
                        <div class="thumb mb-3">
                            <img src="{{ asset('assets/img/about/solve.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <p class="process-count">Step 02</p>
                            <h5 class="mb-3">Design & Development</h5>
                            <p class="content">Our team then crafts innovative solutions, focusing on high performance,
                                user-friendliness, and scalability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner">
                        <div class="thumb mb-3">
                            <img src="{{ asset('assets/img/about/think.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <p class="process-count">Step 03</p>
                            <h5 class="mb-3">Implementation & Testing</h5>
                            <p class="content">We implement solutions while conducting rigorous testing to ensure quality
                                and functionality across all stages.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner">
                        <div class="thumb mb-3">
                            <img src="{{ asset('assets/img/about/antenna.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <p class="process-count">Step 04</p>
                            <h5 class="mb-3">Delivery & Support</h5>
                            <p class="content">After delivery, we offer continuous support and improvements to ensure the
                                solution remains effective and relevant.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
