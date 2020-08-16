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
                                            <h3>Journey Management (Armed or Unarmed)</h3>
                                            <div class="wpb_text_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <p>Our major security strength is in our ability to ferry our clients from one end of the country to the other through professionally mapped out route network under close-nit and deliberately organized security guidance.</p>
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
                                                    <p>If our client is the type that needs no attention, we can as well move in total disguise as to attract no attention.</p>
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