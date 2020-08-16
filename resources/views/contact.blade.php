@extends('Layouts.aboutLayout')
@section('content')
    <div class="entry-content">
        <div class="container">
            <div class="boxed-content">

                <section class="wpb_row row-fluid section-padd no-bot">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column column_container col-sm-12 col-md-9">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="section-head ">
                                            <h6><span>Lagos Office</span></h6>
                                            <h4 class="section-title">Plot 883, Samuel Manuwa St, Off Aboyade Cole, Victoria Island.</h4>
                                        </div>

                                        <div class="empty_space_12"><span class="empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column column_container col-sm-12 col-md-8">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element contact-info">
                                            <div class="wpb_wrapper">
                                                <p><a href="mailto:info@xloutsourcingservices.com"><i class="fa fa-envelope"> info@xloutsourcingservices.com</i></a><a href="tel:+234 0000 0000"><i class="fa fa-phone-square"> +234 0000 0000</i></a></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column column_container col-sm-12 col-md-4">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element socials text-right md-hidden sm-hidden">
                                            <div class="wpb_wrapper">
                                                <p><a href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook-official">fb</i></a><a href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter">tw</i></a><a href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="wpb_row row-fluid section-padd no-bot">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column column_container col-sm-12">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="gray-line">
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
                            <div class="wpb_column column_container col-sm-12 col-md-7">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="section-head ">
                                            <h6><span>CONTACT FORM</span></h6>
                                            <h2 class="section-title">How can we help</h2>
                                        </div>

                                        <div class="empty_space_12"><span class="empty_space_inner"></span></div>
                                        <div role="form" class="wpcf7" id="wpcf7-f1989-p967-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form action="#" method="post" class="wpcf7-form">
                                                <div class="row">
                                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-fname"><input type="text" id="c-fname" name="your-fname" value="" size="40" class="wpcf7-form-control" required="" placeholder="First Name"></span></div>
                                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-lname"><input type="text" id="c-lname" name="your-lname" value="" size="40" class="wpcf7-form-control" required="" placeholder="Last Name"></span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-phone"><input type="text" id="c-phone" name="your-phone" value="" size="40" class="wpcf7-form-control" placeholder="Phone Number"></span></div>
                                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-email"><input type="email" id="c-email" name="your-email" value="" size="40" class="wpcf7-form-control" required="" placeholder="Email Address"></span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-company"><input type="text" id="c-company" name="your-company" value="" size="40" class="wpcf7-form-control" placeholder="Your Company"></span></div>
                                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-subject"><input type="text" id="c-subject" name="your-subject" value="" size="40" class="wpcf7-form-control" placeholder="Subject"></span></div>
                                                </div>
                                                <div class="contact-mess"><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" id="c-message" cols="40" rows="10" class="wpcf7-form-control" required="" placeholder="Message"></textarea></span></div>
                                                <div class="row">
                                                    <div class="col-md-3"><b>2+2</b></div>
                                                    <div class="col-md-3">
                                                        <span class="wpcf7-form-control-wrap your-email"><input type="text" class="wpcf7-form-control" id="ans" placeholder="Answer"></span>
                                                    </div>

                                                </div>
                                                <p>
                                                    <input type="button" value="SUBMIT" id="contactOwner" class="wpcf7-form-control wpcf7-submit btn">
                                                </p>
                                            </form>
                                        </div>
                                        <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column column_container col-sm-12 col-md-5">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element align_center">
                                            <figure class="wpb_wrapper figure">
                                                <div class="single_image-wrapper box_border_grey">
                                                    <img src="{{asset('images/contact2.jpg')}}" class="single_image-img attachment-full" alt="">
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="504" id="gmap_canvas" src="https://maps.google.com/maps?q=xl%20afriva%20group&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/nordvpn-coupon/">nordvpn special</a></div><style>.mapouter{position:relative;text-align:right;height:504px;width:1080px;}.gmap_canvas {overflow:hidden;background:none!important;height:504px;width:1120px;}</style></div>
                <section class="wpb_row row-fluid address-section">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column column_container col-sm-6">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <h4>Port-Harcourt Office</h4>
                                                <p>007 OceanThemes St, Broughton Rd, Port-Harcourt</p>
                                                <div class="empty_space_30"><span class="empty_space_inner"></span></div>
                                            </div>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <h4>Kano Office</h4>
                                                <p>Hans-Wilhelm-Gasse 0/3, 98051 Kano</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column column_container col-sm-6">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <h4>Ibadan Office</h4>
                                                <p>6803 Dickens St, Bodija, Ibadan.</p>
                                                <div class="empty_space_30"><span class="empty_space_inner"></span></div>
                                            </div>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <h4>Enugu Office</h4>
                                                <p>Travessera Eric, 61008, Enugu</p>
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

@section('script')
    <script>
        document.getElementById('contactOwner').onclick = function () {
            let email = document.getElementById('c-email').value;
            let phone = document.getElementById('c-phone').value;
            let fname = document.getElementById('c-fname').value;
            let lname = document.getElementById('c-lname').value;
            let message = document.getElementById('c-message').value;
            let company = document.getElementById('c-company').value;
            let subject = document.getElementById('c-subject').value;

            if(fname == null || fname == ""){
                var el = document.createElement("span");
                el.innerHTML = "This is required";
                el.style.color = "red";
                el.style.fontSize = "12px";
                let element = document.getElementById('c-fname');
                element.parentNode.insertBefore(el, element.nextSibling);
                return element.style.border = "1px solid red";
            }



            if(phone == null || phone == ""){
                var el = document.createElement("span");
                el.innerHTML = "This is required";
                el.style.color = "red";
                el.style.fontSize = "12px";
                let element = document.getElementById('c-phone')
                element.parentNode.insertBefore(el, element.nextSibling);
                return element.style.border = "1px solid red";
//            return document.getElementById('r-phone').style.border = "1px solid red";
            }

            if(email == null || email == ""){
                var el = document.createElement("span");
                el.innerHTML = "This is required";
                el.style.color = "red";
                el.style.fontSize = "12px";
                let element = document.getElementById('c-email')
                element.parentNode.insertBefore(el, element.nextSibling);
                return element.style.border = "1px solid red";
            }

            if(message == null || message == ""){
                var el = document.createElement("span");
                el.innerHTML = "This is required";
                el.style.color = "red";
                el.style.fontSize = "12px";
                let element = document.getElementById('c-message');
                element.parentNode.insertBefore(el, element.nextSibling);
                return element.style.border = "1px solid red";
            }



//        alert(email+phone+service);
            let answer = document.getElementById('ans').value;
            if(answer != 4){
                var el = document.createElement("span");
                el.innerHTML = "This is required";
                el.style.color = "red";
                el.style.fontSize = "12px";
                let element = document.getElementById('ans');
                element.parentNode.insertBefore(el, element.nextSibling);
                return element.style.border = "1px solid red";
            }

            document.getElementById('contactOwner').setAttribute('disabled', "disabled");
            document.getElementById('contactOwner').setAttribute('style', "opacity: 0.5");
//            jQuery('#sendReq').prop('disabled', true);
//            jQuery('#sendReq').html('...processing');
            document.getElementById('contactOwner').value = "...processing";
            jQuery.ajax({
                url: "/contactSiteOwner",
                method : 'POST',
                data: { message: message, email: email, fname:fname, lname:lname, phone:phone, company:company, subject:subject, _token: "{{csrf_token()}}"},
                success: function (data) {
                    console.log(data);
                    document.getElementById('contactOwner').removeAttribute('disabled');
                    document.getElementById('contactOwner').setAttribute('style', "opacity: 1.0");
                    document.getElementById('contactOwner').value = "SUBMIT";
                    if(data.success){
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Request has been successfully done',
                            showConfirmButton: false,
                            timer: 1600
                        })
                        document.getElementById('c-email').value = "";
                        document.getElementById('c-phone').value = "";
                        document.getElementById('c-fname').value = "";
                        document.getElementById('c-lname').value = "";
                        document.getElementById('c-message').value = "";
                        document.getElementById('ans').value = "";
//                    document.getElementById('r-service').options[document.getElementById('r-service').selectedIndex].value;
                    }
                }
            })
        }
    </script>
@stop