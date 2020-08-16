@extends('Layouts.aboutLayout')
@section('content')
    <div class="entry-content">
    <div class="container">
        <div class="boxed-content">

            <section class="wpb_row row-fluid section-padd">
                <div class="container">
                    <div class="row">
                        <div class="wpb_column column_container col-sm-12">
                            <div class="column-inner">
                                <div class="wpb_wrapper">
                                    <div class="section-head ">
                                        <h6><span>ABOUT US</span></h6>
                                        <h2 class="section-title">XL Security & Protection Services Limited</h2>
                                    </div>

                                    <div class="wpb_text_column wpb_content_element">
                                        <div class="wpb_wrapper">
                                            <p>XL SECURITY & PROTECTION SERVICES LIMITED is a wholly owned indigenous company incorporated by the Corporate Affairs Commission and registered by the Nigerian Security & Civil Defence Corps, to perform multiple security functions. It is also licensed by the Nigeria Police to use the 3 components of the Police Services viz conventional, special protection units and mobile police force to perform security functions nation-wide
                                                <br><br>
                                                <a class="pagelink" href="{{route('team')}}">Our team</a>
                                            </p>

                                        </div>
                                    </div>

                                    <div class="ot-socials ">
                                        <span>Follow us:</span>
                                        {{--<a target="_blank" href="#"><i class="fa fa-facebook"></i></a>--}}
                                        {{--<a target="_blank" href="#"><i class="fa fa-twitter"></i></a>--}}
                                        {{--<a target="_blank" href="#"><i class="fa fa-pinterest-p"></i></a>--}}
                                        <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="wpb_row row-fluid row-full-width row-no-padding">
                <div class="row">
                    <div class="wpb_column column_container col-sm-12">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="image-carousel" data-show="1" data-arrow="true">

                                    <div>
                                        <div class="image-item">
                                            <img src="{{asset('images/outsourcing.jpg')}}" alt="">
                                        </div>
                                    </div>

                                    {{--<div>
                                        <div class="image-item">
                                            <img src="{{asset('images/Outsource.png')}}" alt="">
                                        </div>
                                    </div>--}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="wpb_row row-fluid section-padd">
                <div class="container">
                    <div class="row">
                        {{--<div class="wpb_column column_container col-sm-12">
                            <div class="column-inner">
                                <div class="wpb_wrapper">
                                    <div class="section-head ">
                                        <h6><span>What do we do?</span></h6>
                                        <h2 class="section-title">Our Mission and Vision</h2>
                                    </div>

                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h4>Mission</h4>
                                            <p>To bridge the gap between young and poorly outsourced market in Nigeria and indeed Africa and build a network of mutual benefit relationship with our clients by fostering partnerships through competitive superior.</p>

                                        </div>
                                        <div class="wpb_wrapper">
                                            <h4>Vision</h4>
                                            <p>To be the leading diversified outsourcing company in West Africa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        <div class="wpb_column column_container col-sm-12">
                            <div class="column-inner">
                                <div class="wpb_wrapper">
                                    <div class="row wpb_row inner row-fluid row-o-equal-height row-flex">
                                        <div class="radius-left custom-padd-2 wpb_column column_container col-sm-12 col-md-6 col-has-fill">
                                            <div class="column-inner">
                                                <div class="wpb_wrapper"></div>
                                            </div>
                                        </div>
                                        <div class="bg-second radius-right wpb_column column_container col-sm-12 col-md-6">
                                            <div class="column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element text-light padding-box">
                                                        <div class="wpb_wrapper">
                                                            <p class="lead"><em>“Securing lives and properties is the business we are committed to doing. With the help of our trained/professional security personnels, we offer you maximum security and protection. We also employ the latest security technologies to enhance service delivery. ”</em></p>
                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element text-light info-box padd-box">
                                                        <div class="wpb_wrapper">
                                                            <div class="sign">
                                                                <p><img class="alignnone size-full wp-image-1087" src="{{asset('images/teams/sylvester.jpg')}}" alt="" width="79" height="49"></p>
                                                                <h5>Sylvester Williams</h5>
                                                                <p>Managing Director</p>
                                                            </div>
                                                            <div class="socials"><a href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook">fb</i></a><a href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter">tw</i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wpb_column column_container col-sm-12">
                            <div class="column-inner">
                                <div class="wpb_wrapper">
                                    <div class="section-head has-line">
                                        <div class="empty_space_45"></div>
                                        <h6><span>our Clientele</span></h6>
                                    </div>
                                    <div class="empty_space_30"></div>
                                    <div class="partner-slider image-carousel text-center" data-show="5" data-arrow="false">

                                        <div>
                                            <div class="partner-item text-center clearfix">
                                                <div class="inner">
                                                    <div class="thumb">
                                                        <img src="{{asset('images/clients/uba.png')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{--<div>
                                            <div class="partner-item text-center clearfix">
                                                <div class="inner">
                                                    <div class="thumb">
                                                        <img src="{{asset('images/clients/procter.png')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>--}}



                                        {{--<div>
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
                                        </div>--}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--<section class="wpb_row row-fluid mobile-padd section-counto row-has-fill">
                <div class="container">
                    <div class="row">
                        <div class="wpb_column column_container col-sm-12">
                            <div class="column-inner">
                                <div class="wpb_wrapper">
                                    <div class="section-head  text-light">
                                        <h6><span>achievements &amp; statistics</span></h6>
                                        <h2 class="section-title">Our 12 years of operation</h2>
                                    </div>

                                    <div class="empty_space_12"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column column_left col-sm-4">
                            <div class="column-inner">
                                <div class="wpb_wrapper">
                                    <div class="fun-facts bg-light">
                                        <div class="icon-fact">
                                            <i class="ion ion-md-ion ion-ios-people ion-logo-ion ion-ios-people"></i> </div>
                                        <h4><span class="number text-primary bolder" data-to="350" data-speed="2000">0</span> <span class="bolder text-primary">clients</span> in the African continent</h4>
                                    </div>

                                    <div class="empty_space_30 lg-hidden md-hidden"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column column_mid col-sm-4">
                            <div class="column-inner">
                                <div class="wpb_wrapper">
                                    <div class="fun-facts  bg-light">
                                        <div class="icon-fact">
                                            <i class="ion ion-md-ion ion-ios-document ion-logo-ion ion-ios-document"></i> </div>
                                        <h4><span class="number text-primary bolder" data-to="1080" data-speed="2000">0</span> <span class="bolder text-primary">outsourced staff</span> recruited</h4>
                                    </div>

                                    <div class="empty_space_30 lg-hidden md-hidden"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column column_right col-sm-4">
                            <div class="column-inner">
                                <div class="wpb_wrapper">
                                    <div class="fun-facts  bg-light">
                                        <div class="icon-fact">
                                            <i class="ion ion-md-ion ion-ios-person ion-logo-ion ion-ios-person"></i> </div>
                                        <h4><span class="number text-primary bolder" data-to="500" data-speed="2000">0</span> <span class="bolder text-primary">experts</span> currently engage</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>--}}

            <section class="wpb_row row-fluid section-padd">
                <div class="container">
                    <div class="row">
                        <div class="wpb_column column_container col-sm-12">
                            <div class="column-inner">
                                <div class="wpb_wrapper">
                                    <div class="section-head">
                                        <h6><span>Support</span></h6>
                                        <h2 class="section-title">How can we help</h2>
                                    </div>

                                    <div class="empty_space_12"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column column_container col-sm-6 col-md-7">
                            <div class="column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpcf7">
                                        <div class="screen-reader-response"></div>
                                        <form action="#" method="post" class="wpcf7-form">
                                            <div class="row">
                                                <div class="col-md-6">
						                                    	<span class="wpcf7-form-control-wrap your-name">
							                                    	<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control" required="" placeholder="Your Name">
							                                    </span>
                                                </div>
                                                <div class="col-md-6">
						                                    	<span class="wpcf7-form-control-wrap your-email">
						                                    		<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control" required="" placeholder="Email Address">
						                                    	</span>
                                                </div>
                                            </div>
                                            <div class="contact-mess">
						                                	<span class="wpcf7-form-control-wrap your-message">
						                                		<textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control" required="" placeholder="Messenger"></textarea>
							                                </span>
                                            </div>
                                            <p>
                                                <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit btn">
                                            </p>
                                        </form>
                                    </div>
                                    <div class="empty_space_30 lg-hidden md-hidden"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column column_container col-sm-6 col-md-5">
                            <div class="column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element text-light contact-box">
                                        <div class="wpb_wrapper">
                                            <h6 class="font12">Hotline</h6>
                                            <h4>+234 0000 0000</h4>
                                            <h6 class="font12">Location</h6>
                                            <h4>Plot 883, Samuel Manuwa Street,<br>
                                                Victoria Island, Lagos</h4>
                                            <p><a class="pagelink" href="{{route('contact')}}">Contact Us</a></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
@stop