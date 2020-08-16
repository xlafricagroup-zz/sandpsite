<!DOCTYPE html>
<html>

<!-- Mirrored from templates.thememodern.com/consultax/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jun 2020 06:25:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title ?? ''}}</title>

    <link rel="stylesheet" id="bootstrap-css" href="{{asset('css/bootstrap.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="awesome-font-css" href="{{asset('css/font-awesome.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="ionicon-font-css" href="{{asset('css/ionicon.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="royal-preload-css" href="{{asset('css/royal-preload.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="slick-slider-css" href="{{asset('css/slick.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="slick-theme-css" href="{{asset('css/slick-theme.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="consultax-style-css" href="{{asset('style.css')}}" type="text/css" media="all">

    <link rel="shortcut icon" href="favicon.png">
</head>
<body class="royal_preloader">
<div id="page" class="site">
    <header id="site-header" class="site-header mobile-header-blue header-style-1">
        <!-- Main header start - Header Home-1, Default -->
        <!-- Top bar start / class css: topbar-dark -->
        <div id="header_topbar" class="header-topbar md-hidden sm-hidden clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- social icons -->
                        <ul class="social-list fleft">
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                        <!-- social icons close -->
                        <div class="topbar-text fright"> Opening Hours : Monday to Friday - 9am to 4pm</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar close -->

        <!-- Main header start -->
        <div class="main-header md-hidden sm-hidden">
            <div class="main-header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-wrap-table">
                                <div id="site-logo" class="site-logo col-media-left col-media-middle">
                                    <a href="/">
                                        <img class="logo-static" src="{{asset('images/logo.png')}}" alt="XL Outsourcing Limited">
                                        <img class="logo-scroll" src="{{asset('images/logo.png')}}" alt="XL Outsourcing Limited">
                                    </a>
                                </div>
                                <div class="col-media-body col-media-middle">
                                    <!-- contact info -->
                                    <ul class="info-list info_on_right_side fright">
                                        <li>
                                            <span>Address: <strong>Plot 883, Samuel Manuwa Street, <br> Victoria Island, Lagos.</strong></span> </li>
                                        <li>
                                            <span>Phone: <strong class="font-size14">(+234)  000 0000 000</strong></span> </li>
                                    </ul>
                                    <!-- contact info close -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-mainnav">

                                <div class="search-cart-box fright">
                                    {{--<div class="h-cart-btn fright"><a href="#cart/"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></div>--}}

                                    <div class="toggle_search fright"><i class="fa fa-search" aria-hidden="true"></i></div>
                                    <div class="h-search-form-field">
                                        <form role="search" method="get" id="search-form" class="search-form" action="#">
                                            <input type="search" class="search-field" placeholder="Enter keyword..." value="" name="s">
                                            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>

                                </div>
                                <div id="site-navigation" class="main-navigation fleft">
                                    <ul id="primary-menu" class="menu">
                                        <li class="menu-item"><a href="/">Home</a>
                                            {{--<ul class="sub-menu">
                                                <li><a href="index.html" aria-current="page">Home 1</a></li>
                                                <li><a href="home-2.html">Home 2</a></li>
                                            </ul>--}}
                                        </li>
                                        <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1731"><a href="#">About</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-1738"><a href="/about">Overview</a></li>
                                                <li class="menu-item-1745"><a href="">Our Team</a></li>
                                                {{--<li class="menu-item-1742"><a href="how-it-work.html">How It Work</a></li>
                                                <li class="menu-item-1746"><a href="testimonials.html">Testimonials</a></li>
                                                <li class="menu-item-1757"><a href="services.html">Services Box</a></li>
                                                <li class="menu-item-1744"><a href="services-icon.html">Icon Box</a></li>
                                                <li class="menu-item-1740"><a href="career.html">Career</a></li>--}}
                                            </ul>
                                        </li>
                                        <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1789"><a href="">Services</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-1791"><a href="{{route('manguarding')}}">Static Man-Guarding</a></li>
                                                <li class="menu-item-1758"><a href="{{route('armedResponse')}}">Armed Response</a></li>
                                                <li class="menu-item-1790"><a href="{{route('journeyManagement')}}">Journey management (armed or unarmed)</a></li>
                                                <li class="menu-item-1760"><a href="{{route('investigation')}}">Investigation & Background Profiling</a></li>
                                                <li class="menu-item-1760"><a href="{{route('armedEscort')}}">Armed Escort Security Services</a></li>
                                                <li class="menu-item-1760"><a href="{{route('emergency')}}">In-Country Emergency Response</a></li>
                                                <li class="menu-item-1760"><a href="{{route('cctv')}}">CCTV Installation & Servicing</a></li>
                                                <li class="menu-item-1760"><a href="{{route('vehicleRental')}}">Security Vehicles Rental Services</a></li>
                                                <li class="menu-item-1760"><a href="{{route('tracking')}}">Vehicle Tracking Services</a></li>
                                                <li class="menu-item-1760"><a href="{{route('advisory')}}">Threat Advisory Services</a></li>
                                                <li class="menu-item-1760"><a href="{{route('eventSecurity')}}">Event Security</a></li>
                                            </ul>
                                        </li>

                                        {{--<li class="menu-item"><a href="">Blog</a>
                                            --}}{{--<ul class="sub-menu">
                                                <li><a href="blog.html">Blog List</a></li>
                                                <li><a href="post.html">Blog Details</a></li>
                                            </ul>--}}{{--
                                        </li>--}}
                                        <li><a href="">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- #site-navigation -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Main header close -->

        <div class="header_mobile">
            <div class="mlogo_wrapper clearfix">
                <div class="mobile_logo">
                    <a href="#"><img src="{{asset('images/logo.png')}}" alt="XL Outsourcing Limited"></a>
                </div>
                <div id="mmenu_toggle">
                    <button></button>
                </div>
            </div>
            <div class="mmenu_wrapper">
                <div class="mobile_nav collapse">
                    <ul id="menu-main-menu" class="mobile_mainmenu">
                        <li class="menu-item"><a href="/">Home</a>
                            {{--<ul class="sub-menu">
                                <li><a href="index.html" aria-current="page">Home 1</a></li>
                                <li><a href="home-2.html">Home 2</a></li>
                            </ul>--}}
                        </li>
                        <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1731"><a href="#">About</a>
                            <ul class="sub-menu">
                                {{--<li class="menu-item-1738"><a href="/about">Overview</a></li>--}}
                                <li class="menu-item-1745"><a href="{{route('team')}}">Our Team</a></li>
                                {{--<li class="menu-item-1742"><a href="how-it-work.html">How It Work</a></li>
                                <li class="menu-item-1746"><a href="testimonials.html">Testimonials</a></li>
                                <li class="menu-item-1757"><a href="services.html">Services Box</a></li>
                                <li class="menu-item-1744"><a href="services-icon.html">Icon Box</a></li>
                                <li class="menu-item-1740"><a href="career.html">Career</a></li>--}}
                            </ul>
                        </li>
                        <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1789"><a href="">Services</a>
                            <ul class="sub-menu">
                                <li class="menu-item-1791"><a href="{{route('manguarding')}}">Static Man-Guarding</a></li>
                                <li class="menu-item-1758"><a href="{{route('armedResponse')}}">Armed Response</a></li>
                                <li class="menu-item-1790"><a href="{{route('journeyManagement')}}">Journey management (armed or unarmed)</a></li>
                                <li class="menu-item-1760"><a href="{{route('investigation')}}">Investigation & Background Profiling</a></li>
                                <li class="menu-item-1760"><a href="{{route('armedEscort')}}">Armed Escort Security Services</a></li>
                                <li class="menu-item-1760"><a href="{{route('emergency')}}">In-Country Emergency Response</a></li>
                                <li class="menu-item-1760"><a href="{{route('cctv')}}">CCTV Installation & Servicing</a></li>
                                <li class="menu-item-1760"><a href="{{route('vehicleRental')}}">Security Vehicles Rental Services</a></li>
                                <li class="menu-item-1760"><a href="{{route('tracking')}}">Vehicle Tracking Services</a></li>
                                <li class="menu-item-1760"><a href="{{route('advisory')}}">Threat Advisory Services</a></li>
                                <li class="menu-item-1760"><a href="{{route('eventSecurity')}}">Event Security</a></li>
                            </ul>
                        </li>

                        <li class="menu-item"><a href="">Blog</a>
                        </li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">
        <div class="page-header">
            <div class="container">
                <div class="breadc-box no-line">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="page-title">
                                {{$identifier ?? ''}}
                            </h1>
                        </div>
                        <div class="col-md-6 mobile-left text-right">
                            <ul id="breadcrumbs" class="breadcrumbs none-style">
                                <li><a href="/">Home</a></li>
                                <li class="active">{{$identifier}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="entry-content">
        <div class="container">
            <div class="row">

                @yield('content')

                <aside id="sidebar" class="widget-area service-sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <section id="nav_menu-1" class="widget widget_nav_menu">
                        <h4 class="widget-title">Services</h4>
                        <div class="menu-service-menu-container">
                            <ul id="menu-service-menu" class="menu">
                                <li {{ $identifier && $identifier == "Industrial Maintenance" ? "class=current-menu-item" : ''}}><a href="{{route('manguarding')}}">Static Man-guarding</a></li>
                                <li {{ $identifier && $identifier == "Armed Response" ? "class=current-menu-item" : ''}}><a href="">Armed Response</a></li>
                                <li {{ $identifier && $identifier == "Journey Management" ? "class=current-menu-item" : ''}}><a href="{{route('journeyManagement')}}">Journey Management</a></li>
                                <li {{ $identifier && $identifier == "Investigation & Background Profiling" ? "class=current-menu-item" : ''}}><a href="{{route('investigation')}}">Investigation & Background Profiling</a></li>
                                <li {{ $identifier && $identifier == "Armed Escort" ? "class=current-menu-item" : ''}}><a href="{{route('armedEscort')}}">Armed Escort</a></li>
                                <li {{ $identifier && $identifier == "Security Vehicles Rental Services" ? "class=current-menu-item" : ''}}><a href="{{route('vehicleRental')}}">Security Vehicles Rental Services</a></li>
                                <li {{ $identifier && $identifier == "Vehicles Tracking Services" ? "class=current-menu-item" : ''}}><a href="{{route('tracking')}}">Vehicles Tracking Services</a></li>
                                <li {{ $identifier && $identifier == "Security Advisory Services" ? "class=current-menu-item" : ''}}><a href="{{route('advisory')}}">Security Advisory Services</a></li>
                                <li {{ $identifier && $identifier == "Event Security" ? "class=current-menu-item" : ''}}><a href="{{route('eventSecurity')}}">Event Security</a></li>
                            </ul>
                        </div>
                    </section>
                    <section id="text-1" class="widget widget_text bg-second text-light">
                        <h4 class="widget-title">Do you need more info?</h4>
                        <div class="textwidget">
                            <ul class="semi-bold">
                                <li><span class="normal">Phone:</span> <a href="tel:+1253 1245 1245">+1253 1245 1245</a></li>
                                <li><span class="normal">Office Address:</span> 3, Fatai Kaffo Street, Trinity Court,
                                    <br> Agungi,
                                    <br> Lagos
                                </li>
                                <li><span class="normal">Mail:</span> <a href="mailto:info@fmxservicesng.com">info@fmxservicesng.com</a></li>
                            </ul>
                            {{--<div class="gaps style-parent"></div>--}}
                            {{--<div class="wpcf7">
                                <div class="screen-reader-response"></div>
                                <form action="#" method="post" class="wpcf7-form">
                                    <p>
						                    	<span class="wpcf7-form-control-wrap your-email">
							                    	<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control" required="" placeholder="Email Address">
							                    </span>
                                        <span class="wpcf7-form-control-wrap your-phone">
						                    		<input type="tel" name="your-phone" value="" size="40" class="wpcf7-form-control" required="true" placeholder="Phone Number">
						                    	</span>
                                        <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit btn">
                                    </p>
                                </form>
                            </div>--}}
                        </div>
                    </section>
                </aside>

            </div>
        </div>
    </div>




    <footer id="site-footer" class="site-footer bg-second">
        <div class="main-footer">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div id="media_image-1" class="widget widget_media_image">
                            <a href=""><img src="{{asset('images/logolarge.png')}}" alt=""></a>
                        </div>
                        <div id="custom_html-1" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <p>XL SECURITY & PROTECTION SERVICES LIMITED is a wholly owned indigenous company incorporated by the Corporate Affairs Commission and registered by the Nigerian Security & Civil Defence Corps, to perform multiple security functions.</p>
                                <p>
                                    <a href="" class="pagelink gray">About us</a>
                                </p>
                                <div class="ot-socials bg-white">
                                    <a target="_blank" href="#" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
                                    <a target="_blank" href="#" rel="noopener noreferrer"><i class="fa fa-twitter"></i></a>
                                    <a target="_blank" href="#" rel="noopener noreferrer"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-lg-3 -->

                    <div class="col-md-4 col-sm-6">
                        <section id="custom_html-2" class="widget_text widget widget_custom_html padding-left">
                            <h4 class="widget-title">Services</h4>
                            <div class="textwidget custom-html-widget">
                                <ul class="padd-left">
                                    <li><a href="{{route('manguarding')}}">Static Man-Guarding</a></li>
                                    <li><a href="{{route('armedResponse')}}">Armed Response</a></li>
                                    <li><a href="{{route('journeyManagement')}}">Journey management (armed or unarmed)</a></li>
                                    <li><a href="{{route('investigation')}}">Investigation & Background Profiling</a></li>
                                    <li><a href="{{route('armedEscort')}}">Armed Escort Security Services</a></li>
                                    <li><a href="{{route('emergency')}}">In-Country Emergency Response</a></li>
                                    <li><a href="{{route('cctv')}}">CCTV Installation & Servicing</a></li>
                                    <li><a href="{{route('vehicleRental')}}">Security Vehicles Rental Services</a></li>
                                    <li><a href="{{route('tracking')}}">Vehicle Tracking Services</a></li>
                                    <li><a href="{{route('advisory')}}">Threat Advisory Services</a></li>
                                    <li><a href="{{route('eventSecurity')}}">Event Security</a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <!-- end col-lg-3 -->



                    <div class="col-md-4 col-sm-6">
                        <section id="custom_html-3" class="widget_text widget widget_custom_html padding-left">
                            <h4 class="widget-title">Company</h4>
                            <div class="textwidget custom-html-widget">
                                <ul class="padd-left">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="">Services</a></li>
                                    <li><a href="">Blog</a></li>
                                    <li><a href="">Contact</a></li>

                                </ul>
                            </div>
                        </section>
                    </div>
                    <!-- end col-lg-3 -->

                </div>
            </div>
        </div>
        <!-- .main-footer -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-copyright">
                            © {{date('Y')}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-nav text-right mobile-center">
                            <ul id="footer-menu" class="none-style">
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .copyright-footer -->
        <a id="back-to-top" href="#" class="show"></a>
    </footer>
</div>

<script type='text/javascript' src='{{asset('js/jquery.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/countto.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.isotope.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/royal_preloader.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/slick.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/scripts.js')}}'></script>
<script type='text/javascript' src='{{asset('js/header-footer.js')}}'></script>
</body>

<!-- Mirrored from templates.thememodern.com/consultax/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jun 2020 06:25:02 GMT -->
</html>