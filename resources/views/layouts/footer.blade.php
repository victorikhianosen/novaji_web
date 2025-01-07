<!-- footer area start -->
<footer class="footer-area bg-black bg-cover">
    <div class="footer-subscribe">
        <div class="container">
            <div class="footer-subscribe-inner bg-cover"
                style="background-image: url('{{ asset('assets/img/bg/66.jpg') }}');">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-lg-0 mb-3">Subscribe To Our Newsletter</h2>
                    </div>

                    <div class="col-lg-6 align-self-center text-lg-end">
                        <form action="{{ route('subscribe.store') }}" method="POST">
                            @csrf
                            <input type="text" placeholder="Your e-mail address" name="email">
                            <button class="btn btn-black border-radius-0">Submit now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_about">
                    <div class="thumb">
                        <img src="{{ asset('assets/img/logo-black.png') }}" alt="img">
                    </div>
                    <div class="details">
                        <p>10a Comfort Close, Ojodu Estate
                            Ojodu Berger, Ikeja.
                            Lagos, Nigeria.</p>
                        <p class="mt-3">
                            <a href="tel:+2348115520349" style="text-decoration: none; color: inherit;">
                                <i class="fa fa-phone-alt"></i> (+234) 811 552 0349
                            </a>
                        </p>
                        <p class="mt-2">
                            <a href="mailto:info@novajii.com" style="text-decoration: none; color: inherit;">
                                <i class="fas fa-envelope"></i> info@novajii.com
                            </a>
                        </p>

                        <ul class="social-media">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">Our Service</h4>
                    <ul>
                        <li><a href="{{ route('ussd') }}"><i class="fas fa-arrow-right"></i>USSD</a></li>
                        <li><a href="{{ route('sms') }}"><i class="fas fa-arrow-right"></i>SMS </a></li>
                        <li><a href="{{ route('icomply') }}"><i class="fas fa-arrow-right"></i>iComply</a></li>
                        <li><a href="{{ route('mobile') }}"><i class="fas fa-arrow-right"></i>App Development</a></li>
                        <li><a href="{{ route('webapp') }}"><i class="fas fa-arrow-right"></i>Web Development</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">links</h4>
                    <ul>
                        <li><a href=""><i class="fas fa-arrow-right"></i>Service</a></li>
                        <li><a href="{{ route('product') }}"><i class="fas fa-arrow-right"></i>Products</a></li>
                        <li><a href="{{ route('about') }}"><i class="fas fa-arrow-right"></i>About</a></li>
                        <li><a href="{{ url('https://novajii.com/ords/f?p=bulksms:login') }}"><i
                                    class="fas fa-arrow-right"></i>Login</a></li>
                        <li><a
                                href="{{ url('https://novajii.com/ords/r/sms/bulksms/register?session=170896455302') }}"><i
                                    class="fas fa-arrow-right"></i> Sign up</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">Useful Links
                    </h4>
                    <ul>
                        <li><a href="{{ route('ussd') }}"><i class="fas fa-arrow-right"></i>USSD</a></li>
                        <li><a href="{{ route('sms') }}"><i class="fas fa-arrow-right"></i>SMS </a></li>
                        <li><a href="{{ route('icomply') }}"><i class="fas fa-arrow-right"></i>iComply</a></li>
                        <li><a href="{{ route('mobile') }}"><i class="fas fa-arrow-right"></i>App Development</a></li>
                        <li><a href="{{ route('webapp') }}"><i class="fas fa-arrow-right"></i>Web Development</a></li>
                    </ul>
                </div>
            </div>
            <!-- Other columns remain unchanged -->
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    {{-- <p>© Novaji Introserve {{ date('Y') }} | All Rights Reserved</p> --}}
                </div>
                <div class="col-md-6 text-lg-end">
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="mailto:info@novajii.com">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>













<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- all plugins here -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific.min.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.min.js') }}"></script>
<script src="{{ asset('assets/js/counter-up.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoint.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.js') }}"></script>

<!-- main js  -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
