@extends('Layouts.serviceDetailLayout')
@section('content')
    <div id="primary" class="content-area col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
        <main id="main" class="site-main">

            <article class="ot_service type-ot_service status-publish has-post-thumbnail hentry">
                <div class="inner-post">
                    <section class="wpb_row row-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="wpb_column column_container col-sm-12">
                                    <div class="column-inner">
                                        <div class="wpb_wrapper">
                                            <h3>In-Country Emergency Response</h3>
                                            <div class="wpb_text_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <p>We have our representatives and armed men placed strategically in all zones of the country to respond to emergency of any type be it medical, security including escape from kidnappers, robbery or danger of any kind.</p>
                                                </div>
                                            </div>
                                            {{--<div class="empty_space_30"></div>--}}
                                            {{--<h4>XL Outsourcing eLMS provides the following:</h4>--}}
                                            <div class="empty_space_30"></div>
                                            <h4></h4>
                                            <img src="{{asset('images/slides/ll.jpg')}}">
                                            <div class="empty_space_45"></div>
                                            {{--<h4>Want to have a glimpse of our LMS solution</h4>--}}
                                            <div class="wpb_text_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <p>We dominate this area of security operations and are genuinely committed to ensuring our clients get value for their funds.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </article>

        </main>
        <!-- #main -->
    </div>
@stop