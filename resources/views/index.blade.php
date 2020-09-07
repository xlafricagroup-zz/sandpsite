<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>XL Security & Protection Services Limited</title>

    <link rel="stylesheet" id="bootstrap-css" href="css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" id="awesome-font-css" href="css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" id="ionicon-font-css" href="css/ionicon.css" type="text/css" media="all">
    <link rel="stylesheet" id="royal-preload-css" href="css/royal-preload.css" type="text/css" media="all">
    <link rel="stylesheet" id="slick-slider-css" href="css/slick.css" type="text/css" media="all">
    <link rel="stylesheet" id="slick-theme-css" href="css/slick-theme.css" type="text/css" media="all">
    <link rel="stylesheet" id="consultax-style-css" href="style.css" type="text/css" media="all">

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

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
                            <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a>
                            </li>
                        </ul>
                        <!-- social icons close -->
                        <div class="topbar-text fright"> Opening Hours : Monday to Friday</div>
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
                                        <img class="logo-static" src="images/logo.png" alt="">
                                        <img class="logo-scroll" src="images/logo.png" alt="">
                                    </a>
                                </div>
                                <div class="col-media-body col-media-middle">
                                    <!-- contact info -->
                                    <ul class="info-list info_on_right_side fright">
                                        <li>
                                            <span> <strong>3, Fatai Kaffo Street, Trinity Court,<br> Agungi, Lagos.</strong></span> </li>
                                        <li>
                                            <span>Phone: <strong class="font-size18">(234) 000 000 000</strong></span> </li>
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

                                       {{-- <li class="menu-item"><a href="">Blog</a>
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
                    <a href="#"><img src="images/logo.png" alt=""></a>
                </div>
                <div id="mmenu_toggle">
                    <button></button>
                </div>
            </div>
            <div class="mmenu_wrapper">
                <div class="mobile_nav collapse">
                    <ul id="menu-main-menu" class="mobile_mainmenu">
                        <<li class="menu-item"><a href="/">Home</a>
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

                        <li class="menu-item"><a href="">Blog</a>
                            {{--<ul class="sub-menu">
                                <li><a href="blog.html">Blog List</a></li>
                                <li><a href="post.html">Blog Details</a></li>
                            </ul>--}}
                        </li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">
        <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
            <div id="revolution-slider">
                <ul>
                    <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{asset('images/slides/security.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="['0']" data-y="bottom" data-voffset="" data-width="['auto','320','auto','320']" data-transform_idle="o:1;" data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-responsive_offset="on">
                            {{--<img class="img-responsive md-hidden sm-hidden xs-hidden" src="" alt="Image">--}}
                        </div>
                        <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="top" data-voffset="200" data-width="['580','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-fontsize="['14','14','14','14']" data-responsive_offset="on">
                            {{--<p>WE'RE FMX</p>--}}
                        </div>
                        <div class="tp-caption tp-resizeme font-second text-light bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['-45','-45','-45','-45']" data-width="['670','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700" data-whitespace="['normal']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']" data-responsive_offset="on">
                            <p>Static Man-Guarding</p>
                        </div>
                        <div class="tp-caption tp-resizeme sh3" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['60','60','60','60']" data-width="['580','580','480','300']" data-transform_idle="o:1;" data-whitespace="['normal','normal','normal','normal']" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1900" data-fontsize="['16','16','14','12']" data-lineheight="['24','24','18','16']" data-responsive_offset="on">
                            {{--<p class="text-white" style="font-size: 22px; font-weight: 400; color: white">We help take the burden of maintenance away from you. Focus on what matters, we make maintaining your facilities is our headache.</p>--}}
                        </div>
                        <div class="tp-caption" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['30','30','30','30']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2100">
                            <a class="btn" href="#">REACH OUT</a>
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{asset('images/slides/protection.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="" data-y="bottom" data-voffset="" data-width="['auto','380','auto','320']" data-transform_idle="o:1;" data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-responsive_offset="on">
                            <img class="img-responsive md-hidden sm-hidden xs-hidden" src="" alt="Image">
                        </div>
                        <div class="tp-caption tp-resizeme font-second text-light bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="top" data-voffset="200" data-width="['580','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-fontsize="['14','14','14','14']" data-responsive_offset="on">
                            {{--<p>WE'RE CONSULTAX</p>--}}
                        </div>
                        <div class="tp-caption tp-resizeme font-second text-light bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['-45','-45','-45','-45']" data-width="['670','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700" data-whitespace="['normal']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']" data-responsive_offset="on">
                            <p>Armed Escort Security Services</p>
                        </div>
                        <div class="tp-caption tp-resizeme sh3" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['60','60','60','60']" data-width="['580','580','480','300']" data-transform_idle="o:1;" data-whitespace="['normal','normal','normal','normal']" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1900" data-fontsize="['16','16','14','12']" data-lineheight="['24','24','18','16']" data-responsive_offset="on">
                            {{--<p class="text-white" style="font-size: 22px; font-weight: 400; color: white">We are grounded in construction projects management. our years of experince has placed us on high radar in the industry</p>--}}
                        </div>
                        {{--<div class="tp-caption" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="bottom" data-voffset="['185','185','185','185']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2100">
                            <a class="btn" href="#">GET QUOTE</a>
                        </div>--}}
                    </li>

                    <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{asset('images/slides/cctv.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="" data-y="bottom" data-voffset="" data-width="['auto','290','auto','320']" data-transform_idle="o:1;" data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-responsive_offset="on">
                            <img class="img-responsive md-hidden sm-hidden xs-hidden" src="images/man-slide-2.png" alt="Image">
                        </div>
                        <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="top" data-voffset="200" data-width="['580','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-fontsize="['14','14','14','14']" data-responsive_offset="on">
                            {{--<p>WE'RE CONSULTAX</p>--}}
                        </div>
                        <div class="tp-caption tp-resizeme font-second text-light bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['-45','-45','-45','-45']" data-width="['670','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700" data-whitespace="['normal']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']" data-responsive_offset="on">
                            <p>CCTV Installation & Servicing</p>
                        </div>
                        <div class="tp-caption tp-resizeme sh3" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['60','60','60','60']" data-width="['580','580','480','300']" data-transform_idle="o:1;" data-whitespace="['normal','normal','normal','normal']" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1900" data-fontsize="['16','16','14','12']" data-lineheight="['24','24','18','16']" data-responsive_offset="on">
                            {{--<p class="text-white" style="font-size: 22px; font-weight: 400; color: white">our design and build services are therefore tailored towards achieving project execution through a one-stop shop approach under our value propositions.</p>--}}
                        </div>
                        {{--<div class="tp-caption" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="bottom" data-voffset="['185','185','185','185']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2100">
                            <a class="btn" href="#">REACH OUT</a>
                        </div>--}}
                    </li>

                    {{--<li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{asset('images/slides/construction.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="" data-y="bottom" data-voffset="" data-width="['auto','290','auto','320']" data-transform_idle="o:1;" data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-responsive_offset="on">
                            <img class="img-responsive md-hidden sm-hidden xs-hidden" src="images/man-slide-2.png" alt="Image">
                        </div>
                        <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="top" data-voffset="200" data-width="['580','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-fontsize="['14','14','14','14']" data-responsive_offset="on">
                            --}}{{--<p>WE'RE CONSULTAX</p>--}}{{--
                        </div>
                        <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['-45','-45','-45','-45']" data-width="['670','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700" data-whitespace="['normal']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']" data-responsive_offset="on">
                            <p>Armed Escort Security Services</p>
                        </div>
                        <div class="tp-caption tp-resizeme sh3" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['60','60','60','60']" data-width="['580','580','480','300']" data-transform_idle="o:1;" data-whitespace="['normal','normal','normal','normal']" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1900" data-fontsize="['16','16','14','12']" data-lineheight="['24','24','18','16']" data-responsive_offset="on">
                            --}}{{--<p class="text-white" style="font-size: 22px; font-weight: 400; color: white">our design and build services are therefore tailored towards achieving project execution through a one-stop shop approach under our value propositions.</p>--}}{{--
                        </div>
                        <div class="tp-caption" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="bottom" data-voffset="['185','185','185','185']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2100">
                            <a class="btn" href="#">GET QUOTE</a>
                        </div>
                    </li>--}}

                </ul>
            </div>
        </section>

        <section class="wpb_row row-fluid top-70 row-has-fill relative bg-light">
            <div class="container">
                <div class="row">
                    <div class="wpb_column column_container col-sm-12">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="empty_space_70 lg-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-6 col-md-3">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="service-box icon-box box-shadow-2 ionic ">
                                    <i class="ion-md-lock ion-ios-lock ion-logo-lock ion-ios-lock"></i>
                                    <div class="content-box">
                                        <h4>Armed Escort Security Services</h4>
                                        {{--<p>Conubia ut aliquam cub gravida sed morbi accumsa.</p>--}}
                                    </div>
                                </div>

                                <div class="empty_space_30  lg-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-6 col-md-3">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="service-box icon-box box-shadow-2 ionic ">
                                    <i class="ion-md-lock ion-ios-lock ion-logo-lock ion-ios-lock"></i>
                                    <div class="content-box">
                                        <h4>In-Country Emergency Response</h4>
                                        {{--<p>Ante pharetra posuere blandit aliquam fusce sollicitudin.</p>--}}
                                    </div>
                                </div>

                                <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-6 col-md-3">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="service-box icon-box box-shadow-2 ionic ">
                                    <i class="ion-md-lock ion-ios-lock ion-logo-lock ion-ios-lock"></i>
                                    <div class="content-box">
                                        <h4>Threat Advisory Services</h4>
                                        {{--<p>Lacinia nisl accumsa sceleris phasellus venenatis don,</p>--}}
                                    </div>
                                </div>

                                <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-6 col-md-3">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="service-box icon-box box-shadow-2 ionic ">
                                    <i class="ion-md-lock ion-ios-lock ion-logo-lock ion-ios-lock"></i>
                                    <div class="content-box">
                                        <h4>Vehicle Tracking Services</h4>
                                        {{--<p>Etiam sollicitudin sagittis justo at ullamcorper potenti.</p>--}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wpb_row row-fluid section-padd row-has-fill row-o-equal-height row-o-content-middle row-flex bg-light">
            <div class="container">
                <div class="row">
                    <div class="wpb_column column_container col-sm-12">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="row wpb_row inner row-fluid row-o-equal-height row-o-content-middle row-flex">
                                    <div class="wpb_column column_container col-sm-12 col-md-6 col-has-fill custom-padd-1">
                                        <div class="column-inner">
                                            <div class="wpb_wrapper"></div>
                                        </div>
                                    </div>
                                    <div class="bg-second wpb_column column_container col-sm-12 col-md-6">
                                        <div class="column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="empty_space_60 lg-hidden h60"><span class="empty_space_inner"></span></div>

                                                <div class="section-head padding-box-2 text-light">
                                                    <h6><span>WHO WE ARE</span></h6>
                                                    <h2 class="section-title">About us</h2>
                                                </div>

                                                <div class="wpb_text_column wpb_content_element padding-box-2 text-light">
                                                    <div class="wpb_wrapper">
                                                       <p>XL SECURITY & PROTECTION SERVICES LIMITED is a wholly owned indigenous company incorporated by the Corporate Affairs Commission and registered by the Nigerian Security & Civil Defence Corps, to perform multiple security functions. It is also licensed by the Nigeria Police to use the 3 components of the Police Services viz conventional, special protection units and mobile police force to perform security functions nation-wide.</p>
                                                    </div>
                                                </div>

                                                {{--<div class="wpb_text_column wpb_content_element paddtop-75 padding-box-2 info-box text-light">
                                                    <div class="wpb_wrapper">
                                                        <div class="sign">
                                                            <p><img class="alignnone size-full wp-image-1087" src="images/sign1.png" alt="" width="79" height="49"></p>
                                                            <h5>James Patterson</h5>
                                                            <p>Founder &amp; CEO
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>--}}
                                                <div class="empty_space_60 lg-hidden"><span class="empty_space_inner"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wpb_row row-fluid section-padd">
            <div class="container">
                <div class="row">
                    <div class="wpb_column column_container col-sm-12 col-md-9">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="section-head ">
                                    <h6><span>OUR SERVICES</span></h6>
                                    <h2 class="section-title">Services</h2>
                                </div>

                                <div class="empty_space_30 md-hidden sm-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-12 col-md-3">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element text-right mobile-left">
                                    <div class="wpb_wrapper">
                                        <p><a class="pagelink gray" href="">All services</a></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-6 col-md-4">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="service-box icon-box  ionic  hover-box">
                                    <i class="ion-md-settings ion-logo-settings"></i>
                                    <div class="content-box">
                                        <h4>Static Man-guarding</h4>
                                        <p>Use of static security guards has become increasingly important in our society with the industry being one of the fastest growing in Nigeria and the West Africa sub-region.</p>
                                        <a class="link-box pagelink" href="" target="_self">Read more</a> </div>
                                </div>

                                <div class="empty_space_30"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-6 col-md-4">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="service-box icon-box  ionic  hover-box">
                                    <i class="ion-md-cube ion-logo-cube"></i>
                                    <div class="content-box">
                                        <h4>Armed Response</h4>
                                        <p>We offer a 24-hour armed response services with well-trained and fully-equipped emergency response personnel and serviceable response vehicles able to respond in minimum time frame...</p>
                                        <a class="link-box pagelink" href="" target="_self">Read more</a> </div>
                                </div>

                                <div class="empty_space_30"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>

                    <div class="wpb_column column_container col-sm-6 col-md-4">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="service-box icon-box  ionic  hover-box">
                                    <i class="ion-md-cash ion-logo-cash"></i>
                                    <div class="content-box">
                                        <h4>Journey Management</h4>
                                        <p>Our major security strength is in our ability to ferry our clients from one end of the country to the other through professionally mapped out route network under close-nit and deliberately organized security...</p>
                                        <a class="link-box pagelink" href="" target="_self">Read more</a> </div>
                                </div>

                                <div class="empty_space_30 lg-hidden md-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="row">--}}

                    {{--</div>--}}


                </div>

                <div class="clearfix"></div>
                <div class="row">
                    <div class="wpb_column column_container col-sm-6 col-md-4">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="service-box icon-box  ionic  hover-box">
                                    <i class="ion-md-list-box ion-logo-list-box"></i>
                                    <div class="content-box">
                                        <h4>Investigation and Background Profiling</h4>
                                        <p>We compile criminal records, commercial records and financial records of an individual or planned corporate partner complete with verifications. Our report and recommendations will enable you objectively evaluate a... </p>
                                        <a class="link-box pagelink" href="" target="_self">Read more</a> </div>
                                </div>

                                <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>

                    <div class="wpb_column column_container col-sm-6 col-md-4">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="service-box icon-box  ionic  hover-box">
                                    <i class="ion-md-list-box ion-logo-list-box"></i>
                                    <div class="content-box">
                                        <h4>Armed Escort Security Services</h4>
                                        <p>We are conscious of the security concerns of Very Important Persons (VIP) because of their statuses and importance. Dealing with overwhelming security risk that comes with the presence of VIPs, we offer special... </p>
                                        <a class="link-box pagelink" href="" target="_self">Read more</a> </div>
                                </div>

                                <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>

                    <div class="wpb_column column_container col-sm-6 col-md-4">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="service-box icon-box  ionic  hover-box">
                                    <i class="ion-md-list-box ion-logo-list-box"></i>
                                    <div class="content-box">
                                        <h4>In-Country Emergency Response</h4>
                                        <p>We have our representatives and armed men placed strategically in all zones of the country to respond to emergency of any type be it medical, security including escape from kidnappers, robbery or danger...s</p>
                                        <a class="link-box pagelink" href="" target="_self">Read more</a> </div>
                                </div>

                                <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="empty_space_30"></div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="wpb_column column_container col-sm-6 col-md-4">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="service-box icon-box  ionic  hover-box">
                                    <i class="ion-md-list-box ion-logo-list-box"></i>
                                    <div class="content-box">
                                        <h4>CCTV Installation and Servicing</h4>
                                        <p>We are experts on the installation and servicing of this strategic security equipment even as experience has taught us to know most thieves are also experts, so we strive to outdo, by discovering new angles and...</p>
                                        <a class="link-box pagelink" href="" target="_self">Read more</a> </div>
                                </div>

                                <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>

                    <div class="wpb_column column_container col-sm-6 col-md-4">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="service-box icon-box  ionic  hover-box">
                                    <i class="ion-md-list-box ion-logo-list-box"></i>
                                    <div class="content-box">
                                        <h4>Security Vehicles Rental Services</h4>
                                        <p>Due to popular demands from the clients, we ventured into security vehicle rentals where our clients are happy to be associated with us as we take the issue of maintenance and servicing seriously coupled... </p>
                                        <a class="link-box pagelink" href="" target="_self">Read more</a> </div>
                                </div>

                                <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>

                    <div class="wpb_column column_container col-sm-6 col-md-4">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="service-box icon-box  ionic  hover-box">
                                    <i class="ion-md-list-box ion-logo-list-box"></i>
                                    <div class="content-box">
                                        <h4>Vehicle Tracking Services</h4>
                                        <p>We track and recover stolen vehicles for our clients from all parts of the country. This is done timely and with business speed to the delight of our clients. </p>
                                        <a class="link-box pagelink" href="" target="_self">Read more</a> </div>
                                </div>

                                <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="empty_space_30"></div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="clearfix"></div>
                    <div class="wpb_column column_container col-sm-6 col-md-4">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="service-box icon-box  ionic  hover-box">
                                    <i class="ion-md-list-box ion-logo-list-box"></i>
                                    <div class="content-box">
                                        <h4>Threat Advisory</h4>
                                        <p>We see danger before it occurs and go ahead of our clients to advise and offer options and solutions to averting them. These may include new criminal tendencies, presence or convergence of criminal...</p>
                                        <a class="link-box pagelink" href="" target="_self">Read more</a> </div>
                                </div>

                                <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>

                    <div class="wpb_column column_container col-sm-6 col-md-4">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="service-box icon-box  ionic  hover-box">
                                    <i class="ion-md-list-box ion-logo-list-box"></i>
                                    <div class="content-box">
                                        <h4>Event Security</h4>
                                        <p>Whether it is about marriage, wedding, naming, birthdays, promotion, thanksgiving, Anniversary, Funerals, you just name it! We can make it security-wise for your audience and important guests. </p>
                                        <a class="link-box pagelink" href="" target="_self">Read more</a> </div>
                                </div>

                                <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="wpb_row row-fluid section-padd row-has-fill bg-light">
            <div class="container">
                <div class="row">
                    <div class="wpb_column column_container col-sm-6">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <h2 class="custom_heading text-black-50">Request a Free<br>Call Back</h2>
                                <div class="wpb_text_column wpb_content_element  text-dark">
                                    <div class="wpb_wrapper">
                                        <p>Provide discussion information and we’ll get back to
                                            <br> you as soon as possible</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-6">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div role="form" class="wpcf7" id="wpcf7-f1626-p1530-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form action="#" method="post" class="wpcf7-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                            	<span class="wpcf7-form-control-wrap your-name">
	                                            	<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" required="" aria-invalid="false" placeholder="Your Name">
	                                            </span>
                                            </div>
                                            <div class="col-md-6">
                                            	<span class="wpcf7-form-control-wrap your-service">
                                            		<select name="your-service" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
                                            			<option>Industrial Maintenance</option>
                                            			<option>Project Mnagement</option>
                                            			<option>Integration and Construction Manpower</option>
                                            			<option>Project Development and Construction</option>
                                            		</select>
                                            	</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            	<span class="wpcf7-form-control-wrap your-email">
                                            		<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required="" placeholder="Email Address">
                                            	</span>
                                            </div>
                                            <div class="col-md-6">
                                            	<span class="wpcf7-form-control-wrap your-phone">
                                            		<input type="tel" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" placeholder="Phone Number">
                                            	</span>
                                            </div>
                                        </div>
                                        <p>
                                            <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit btn">
                                        </p>
                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--<section class="wpb_row row-fluid section-padd bg-light">
            <div class="container">
                <div class="row">
                    <div class="wpb_column column_container col-sm-12 col-md-9">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="section-head ">
                                    <h6><span>our blog</span></h6>
                                    <h2 class="section-title">Our latest news</h2>
                                </div>

                                <div class="empty_space_30 md-hidden sm-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-12 col-md-3">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element text-right mobile-left">
                                    <div class="wpb_wrapper">
                                        <p><a class="pagelink gray" href="blog.html">View all posts</a></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-12">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="news-slider posts-grid row" data-show="3" data-auto="true">

                                    <div>
                                        <article class="news-item content-area">
                                            <div class="inner-item radius-top">
                                                <div class="thumb-image">
                                                    <a href="post.html">
                                                        <img src="images/blog1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="inner-post radius-bottom">
                                                    <div class="entry-meta">
										                <span class="posted-on">
										                	<time class="entry-date">September 11, 2017</time>
										                </span>
                                                        <span class="posted-in">
										                	<a href="#">Consulting</a>
										                </span>
                                                    </div>
                                                    <h4 class="entry-title">
                                                        <a href="post.html">Solution financial for good startup</a>
                                                    </h4>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                    </p>
                                                    <a class="post-link" href="post.html">Read more</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                    <div>
                                        <article class="news-item content-area">
                                            <div class="inner-item radius-top">
                                                <div class="thumb-image">
                                                    <a href="post.html">
                                                        <img src="images/blog2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="inner-post radius-bottom">
                                                    <div class="entry-meta">
										                <span class="posted-on">
										                	<time class="entry-date">September 11, 2017</time>
										                </span>
                                                        <span class="posted-in">
										                	<a href="#">Consulting</a>
										                </span>
                                                    </div>
                                                    <h4 class="entry-title">
                                                        <a href="post.html">Why Tech Should Behave  More Like Finance</a>
                                                    </h4>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                    </p>
                                                    <a class="post-link" href="post.html">Read more</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                    <div>
                                        <article class="news-item content-area">
                                            <div class="inner-item radius-top">
                                                <div class="thumb-image">
                                                    <a href="post.html">
                                                        <img src="images/blog3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="inner-post radius-bottom">
                                                    <div class="entry-meta">
										                <span class="posted-on">
										                	<time class="entry-date">September 11, 2017</time>
										                </span>
                                                        <span class="posted-in">
										                	<a href="#">Consulting</a>
										                </span>
                                                    </div>
                                                    <h4 class="entry-title">
                                                        <a href="post.html">Cutting Your Restaurant’s Operations Costs</a>
                                                    </h4>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                    </p>
                                                    <a class="post-link" href="post.html">Read more</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                    <div>
                                        <article class="news-item content-area">
                                            <div class="inner-item radius-top">
                                                <div class="thumb-image">
                                                    <a href="post.html">
                                                        <img src="images/blog4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="inner-post radius-bottom">
                                                    <div class="entry-meta">
										                <span class="posted-on">
										                	<time class="entry-date">September 11, 2017</time>
										                </span>
                                                        <span class="posted-in">
										                	<a href="#">Consulting</a>
										                </span>
                                                    </div>
                                                    <h4 class="entry-title">
                                                        <a href="post.html">Solution financial for good startup</a>
                                                    </h4>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                    </p>
                                                    <a class="post-link" href="post.html">Read more</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                    <div>
                                        <article class="news-item content-area">
                                            <div class="inner-item radius-top">
                                                <div class="thumb-image">
                                                    <a href="post.html">
                                                        <img src="images/blog2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="inner-post radius-bottom">
                                                    <div class="entry-meta">
										                <span class="posted-on">
										                	<time class="entry-date">September 11, 2017</time>
										                </span>
                                                        <span class="posted-in">
										                	<a href="#">Consulting</a>
										                </span>
                                                    </div>
                                                    <h4 class="entry-title">
                                                        <a href="post.html">Cutting Your Restaurant’s Operations Costs</a>
                                                    </h4>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                    </p>
                                                    <a class="post-link" href="post.html">Read more</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                    <div>
                                        <article class="news-item content-area">
                                            <div class="inner-item radius-top">
                                                <div class="thumb-image">
                                                    <a href="post.html">
                                                        <img src="images/blog1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="inner-post radius-bottom">
                                                    <div class="entry-meta">
										                <span class="posted-on">
										                	<time class="entry-date">September 11, 2017</time>
										                </span>
                                                        <span class="posted-in">
										                	<a href="#">Consulting</a>
										                </span>
                                                    </div>
                                                    <h4 class="entry-title">
                                                        <a href="post.html">Why Tech Should Behave  More Like Finance</a>
                                                    </h4>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                    </p>
                                                    <a class="post-link" href="post.html">Read more</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>--}}
        {{--<section class="wpb_row row-fluid section-padd">
            <div class="container">
                <div class="row">
                    <div class="wpb_column column_container col-sm-12">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="section-head ">
                                    <h6><span>testimonial &amp; partner</span></h6>
                                    <h2 class="section-title">What our clients says?</h2>
                                </div>

                                <div class="empty_space_30"><span class="empty_space_inner"></span></div>

                                <div class="testi-slider" data-show="3" data-arrow="true">

                                    <div>
                                        <div class="testi-item box-shadow-hover">
                                            <div class="testi-head">
                                                <img width="50" height="50" src="images/avatar4.png" class="client-img" alt="">
                                                <h5>Quynh Anh<span class="font12 normal">from Hanoi</span></h5>
                                            </div>
                                            <div class="line"></div>
                                            <div class="testi-content">
                                                <i class="ion-md-quote"></i>
                                                <img src="images/stars.png" alt="">
                                                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. Thank you !</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="testi-item box-shadow-hover">
                                            <div class="testi-head">
                                                <img width="50" height="50" src="images/avatar9.png" class="client-img" alt="">
                                                <h5>Nora Roberts<span class="font12 normal">from Paris</span></h5>
                                            </div>
                                            <div class="line"></div>
                                            <div class="testi-content">
                                                <i class="ion-md-quote"></i>
                                                <img width="86" height="12" src="images/stars.png" class="attachment-full size-full" alt="">
                                                <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="testi-item box-shadow-hover">
                                            <div class="testi-head">
                                                <img width="50" height="50" src="images/avatar3.png" class="client-img" alt="">
                                                <h5>John Doe<span class="font12 normal">from Beijing</span></h5>
                                            </div>
                                            <div class="line"></div>
                                            <div class="testi-content">
                                                <i class="ion-md-quote"></i>
                                                <img width="86" height="12" src="images/stars.png" alt="">
                                                <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="testi-item box-shadow-hover">
                                            <div class="testi-head">
                                                <img width="50" height="50" src="images/avatar4.png" class="client-img" alt="">
                                                <h5>Quynh Anh<span class="font12 normal">from Hanoi</span></h5>
                                            </div>
                                            <div class="line"></div>
                                            <div class="testi-content">
                                                <i class="ion-md-quote"></i>
                                                <img src="images/stars.png" alt="">
                                                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. Thank you !</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="testi-item box-shadow-hover">
                                            <div class="testi-head">
                                                <img width="50" height="50" src="images/avatar9.png" class="client-img" alt="">
                                                <h5>Nora Roberts<span class="font12 normal">from Paris</span></h5>
                                            </div>
                                            <div class="line"></div>
                                            <div class="testi-content">
                                                <i class="ion-md-quote"></i>
                                                <img width="86" height="12" src="images/stars.png" class="attachment-full size-full" alt="">
                                                <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="testi-item box-shadow-hover">
                                            <div class="testi-head">
                                                <img width="50" height="50" src="images/avatar3.png" class="client-img" alt="">
                                                <h5>John Doe<span class="font12 normal">from Beijing</span></h5>
                                            </div>
                                            <div class="line"></div>
                                            <div class="testi-content">
                                                <i class="ion-md-quote"></i>
                                                <img width="86" height="12" src="images/stars.png" alt="">
                                                <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="empty_space_80"><span class="empty_space_inner"></span></div>

                                <div class="partner-slider image-carousel text-center" data-show="5" data-arrow="false">

                                    <div>
                                        <div class="partner-item text-center clearfix">
                                            <div class="inner">
                                                <div class="thumb">
                                                    <img src="images/logo1.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="partner-item text-center clearfix">
                                            <div class="inner">
                                                <div class="thumb">
                                                    <img src="images/logo2.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="partner-item text-center clearfix">
                                            <div class="inner">
                                                <div class="thumb">
                                                    <img src="images/logo3.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="partner-item text-center clearfix">
                                            <div class="inner">
                                                <div class="thumb">
                                                    <img src="images/logo4.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="partner-item text-center clearfix">
                                            <div class="inner">
                                                <div class="thumb">
                                                    <img src="images/logo5.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="partner-item text-center clearfix">
                                            <div class="inner">
                                                <div class="thumb">
                                                    <img src="images/logo1.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="partner-item text-center clearfix">
                                            <div class="inner">
                                                <div class="thumb">
                                                    <img src="images/logo2.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="partner-item text-center clearfix">
                                            <div class="inner">
                                                <div class="thumb">
                                                    <img src="images/logo3.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="partner-item text-center clearfix">
                                            <div class="inner">
                                                <div class="thumb">
                                                    <img src="images/logo4.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="partner-item text-center clearfix">
                                            <div class="inner">
                                                <div class="thumb">
                                                    <img src="images/logo5.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>--}}

    </div>
    <!-- #content -->

    <footer id="site-footer" class="site-footer bg-second">
        <div class="main-footer">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div id="media_image-1" class="widget widget_media_image">
                            <a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a>
                        </div>
                        <div id="custom_html-1" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <p>XL SECURITY & PROTECTION SERVICES LIMITED is a wholly owned indigenous company incorporated by the Corporate Affairs Commission and registered by the Nigerian Security & Civil Defence Corps, to perform multiple security functions.</p>

                                <p>
                                    <a href="#" class="pagelink gray">About us</a>
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
                                    <li><a href="">Home</a></li>
                                    <li><a href="">About</a></li>
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
                            &copy; {{date('Y')}}
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
    <!-- #site-footer -->
</div>

<script type='text/javascript' src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/countto.min.js'></script>
<script type='text/javascript' src='js/jquery.isotope.min.js'></script>
<script type='text/javascript' src='js/slick.min.js'></script>
<script type='text/javascript' src='js/royal_preloader.min.js'></script>
<script type='text/javascript' src='js/scripts.js'></script>
<script type='text/javascript' src='js/header-footer.js'></script>

<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
<!-- RS5.0 Extensions Files -->
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script>
    jQuery(document).ready(function () {
        jQuery("#revolution-slider").revolution({
            sliderType: "standard",
            delay: 2500,
            navigation: {
                arrows: { enable: true }
            },
            spinner: "off",
            gridwidth: 1170,
            gridheight: 700,
            disableProgressBar: "on",
            responsiveLevels:[1920,1229,991,480],gridwidth:[1170,970,750,450],gridheight:[700,700,700,700]
        });
    });
</script>
</body>

<!-- Mirrored from templates.thememodern.com/consultax/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jun 2020 06:25:01 GMT -->
</html>