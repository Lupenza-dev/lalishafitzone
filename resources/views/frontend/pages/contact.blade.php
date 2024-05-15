@extends('frontend.layouts.main')
@section('content')
   <!-- Body Container -->
   <div id="page-content"> 
    <!--Page Header-->
    <div class="page-header text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                    <div class="page-title"><h1>Contact Us</h1></div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="{{ route('home')}}" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>Contact</span><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>Get In Touch</span></div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container contact-style1">
        <!-- Contact Form - Details -->
        <div class="contact-form-details section pt-0">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                    <!-- Contact Form -->
                    <div class="formFeilds contact-form form-vertical mb-4 mb-md-0">
                        <div class="section-header">
                            <h2>Let's Get in touch!</h2>
                            <p>You can contact us any way that is convenient for you. We are available 24/7 via phone call or email. You can also use a quick contact form below. We would be happy to answer your questions.</p>
                        </div>

                        <form action="" name="contactus" method="post" id="contact-form" class="contact-form">	
                            <div class="form-row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="ContactFormName" name="name" class="form-control" placeholder="Name" />
                                        <span class="error_msg" id="name_error"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">                               
                                    <div class="form-group">
                                        <input type="email" id="ContactFormEmail" name="email" class="form-control" placeholder="Email" />
                                        <span class="error_msg" id="email_error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="tel" id="ContactFormPhone" name="phone" pattern="[0-9\-]*" placeholder="Phone Number"  />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="ContactSubject" name="subject" class="form-control" placeholder="Subject" />
                                        <span class="error_msg" id="subject_error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea id="ContactFormMessage" name="message" class="form-control" rows="5" placeholder="Message"></textarea>
                                        <span class="error_msg" id="message_error"></span>
                                    </div>
                                </div>  
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mailsendbtn mb-0 w-100">	
                                        <input class="btn btn-lg" type="submit" name="contactus" value="Send Message" />
                                        <div class="loading"><img class="img-fluid" src="assets/images/icons/ajax-loader.gif" alt="loading" width="16" height="16"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="response-msg"></div>
                    </div>
                    <!-- End Contact Form -->
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <!-- Contact Details -->
                    <div class="contact-details bg-block">
                        <h3 class="mb-3 fs-5">Trainer information</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2 address">
                                <strong class="d-block mb-2">Address :</strong>
                                <p><i class="icon anm anm-map-marker-al me-2 d-none"></i> Address</p>
                            </li>
                            <li class="mb-2 phone"><strong>Phone :</strong><i class="icon anm anm-phone me-2 d-none"></i> <a href="tel:401234567890">+255 654 638 396</a></li>
                            <li class="mb-0 email"><strong>Email :</strong><i class="icon anm anm-envelope-l me-2 d-none"></i> <a href="mailto:info@lalishafitzone.co.tz">info@lalishafitzone.co.tz</a></li>
                        </ul>
                        <hr>
                        <div class="open-hours">
                            <strong class="d-block mb-2">Availability</strong>
                            <p class="lh-lg">
                                Mon - Sat : 9:30 AM - 6:30 PM<br>
                                Sunday: 11:00 AM - 5:00 PM
                            </p>
                        </div>
                        <hr>
                        <div class="follow-us">
                            <label class="d-block mb-3"><strong>Stay Connected</strong></label>
                            <ul class="list-inline social-icons">
                                <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="icon anm anm-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinterest"><i class="icon anm anm-pinterest-p"></i></a></li>
                                <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="icon anm anm-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Google plus"><i class="icon anm anm-google-plus-g"></i></a></li>
                                <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp"><i class="icon anm anm-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Contact Details -->
                </div>
            </div>
        </div>
        <!-- End Contact Form - Details -->
    </div>
    <!--End Main Content-->
</div>
<!-- End Body Container -->
    
@endsection