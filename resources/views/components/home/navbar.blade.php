<nav class="navbar navbar-area navbar-area-2 navbar-expand-lg">
    <div class="container nav-container">
        <div class="responsive-mobile-menu">
            <button class="menu toggle-btn d-block d-lg-none" data-target="#itech_main_menu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="icon-left"></span>
                <span class="icon-right"></span>
            </button>
        </div>
        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logos.png') }}" alt="img"></a>
            {{-- <a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt="img"></a> --}}
        </div>
        <div class="nav-right-part nav-right-part-mobile">
            <a class="search-bar-btn" href="#">
                <i class="fa fa-search"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="itech_main_menu">
            <ul class="navbar-nav menu-open text-lg-center ps-lg-5">
                <li class="">
                    <a href="{{ route('home') }}">Home</a>
                </li>

                <li class="menu-item-has-children">
                    <a href="">Service</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('ussd') }}">USSD</a></li>
                        <li><a href="{{ route('sms') }}">SMS</a></li>
                        <li><a href="{{ route('payment') }}">Payment Solutions</a></li>
                        <li><a href="{{ route('icomply') }}">Compliance & Monitoring Solutions</a></li>
                        <li><a href="{{ route('mobile') }}">Mobile Application</a></li>
                        <li><a href="{{ route('webapp') }}">Web Application</a></li>
                    </ul>
                </li>

                <li class="">
                    <a href="{{ route('product') }}">Products</a>
                    {{-- <ul class="sub-menu">
                        <li><a href="{{ route('icomply') }}">iComply</a></li>
                        <li><a href="{{ route('product') }}">Soft Token</a></li>
                    </ul> --}}
                </li>

                <li class="">
                    <a href="{{ route('about') }}">About</a>
                </li>

                <li><a href="{{ url('https://novajii.com/ords/f?p=bulksms:login') }}">Login</a></li>
            </ul>
        </div>
        <div class="nav-right-part nav-right-part-desktop align-self-center">
            <a class="btn btn-border-base" href="{{ url('https://novajii.com/ords/f?p=bulksms:register')}}">Sign Up</a>
        </div>
    </div>
</nav>
