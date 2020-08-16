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
                                            <h3>Armed Response</h3>
                                            <div class="wpb_text_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                   <p>We offer a 24-hour armed response services with well-trained and fully-equipped emergency response personnel and serviceable response vehicles able to respond in minimum time frame to combat emergency or distress situations.</p>
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
                                                    <p>XL Security &Protection Services Limited enjoys partnership with the Nigeria Police Force [NPF] to provide armed response for emergencies. This partnership allows us to offer our clients exclusive services in any location. Armed Response service allows our residential and commercial clients to take advantage of unlimited responses depending on the scale of distress.</p>
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