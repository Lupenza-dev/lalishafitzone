<div class="footer">
    <div class="newsletterbg clearfix">
        <div class="container">
            <form action="#" method="post" class="footer-newsletter" id="news_letter">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3 mb-md-0">
                        <label class="h3 mb-1 clr-none">Sign Up Our Newsletter</label>
                        <p>Sign up to stay in the loop. Receive updates, access to exclusive deals, and more.</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group">
                            <input type="email" class="form-control input-group-field newsletter-input" name="email" value="" placeholder="Enter your email address..." required />
                            <button type="submit" id="reg_btn_news" class="input-group-btn btn btn-secondary newsletter-submit" name="commit">Subscribe</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="footer-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 footer-links">
                    <h4 class="h4">Quick Links</h4>
                    <ul>
                        <li><a href="{{ route('login')}}">Login</a></li>
                        <li><a href="{{ route('register')}}">Register</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Terms &amp; condition</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 footer-links">
                    <h4 class="h4">Quick Pages</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="{{ route('all.programs')}}">Programs </a></li>
                        <li><a href="{{ route('blogs')}}">Blogs</a></li>
                        <li><a href="{{ route('contact.us')}}">Contact Us</a></li>
                    </ul>
                </div>
                {{-- <div class="col-12 col-sm-12 col-md-4 col-lg-4 footer-links">
                    <h4 class="h4">Customer Services</h4>
                    <ul>
                        <li><a href="#">Request Personal Data</a></li>
                        <li><a href="faqs-style1.html">FAQ's</a></li>
                        <li><a href="contact-style1.html">Contact Us</a></li>
                        <li><a href="#">Orders and Returns</a></li>
                        <li><a href="#">Support Center</a></li>
                    </ul>
                </div> --}}
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 footer-contact">
                    <h4 class="h4">Contact Us</h4>
                    <p class="address d-flex"><i class="icon anm anm-map-marker-al pt-1"></i> Address</p>
                    <p class="phone d-flex align-items-center"><i class="icon anm anm-phone-l"></i>  <b class="me-1 d-none">Phone:</b> <a href="tel:401234567890">+255 654 638 396</a></p>
                    <p class="email d-flex align-items-center"><i class="icon anm anm-envelope-l"></i> <b class="me-1 d-none">Email:</b> <a href="mailto:info@example.com">info@lalishafitnesscorner.co.tz</a></p>
                    <ul class="list-inline social-icons mt-3">
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="icon anm anm-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinterest"><i class="icon anm anm-pinterest-p"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="icon anm anm-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="icon anm anm-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube"><i class="icon anm anm-youtube"></i></a></li>
                    </ul>
                </div>
            </div>               
        </div>
    </div>
    <div class="footer-bottom clearfix">
        <div class="container">
            <div class="d-flex-center flex-column justify-content-md-between flex-md-row-reverse">
                <ul class="payment-icons d-flex-center mb-2 mb-md-0" style="gap: 5px">
                    <li>
                        <img width="50" height="50" src="{{ asset('assets/frontend/images/airtel.png')}}" alt="">
                    </li>
                    <li>
                        <img width="50" height="50" src="{{ asset('assets/frontend/images/tigopesa.png')}}" alt="">
                    </li>
                    <li>
                        <img width="50" height="50" src="{{ asset('assets/frontend/images/vodacom.jpeg')}}" alt="">
                    </li>
                    {{-- <li>
                        <img width="50" height="50" src="{{ asset('assets/frontend/images/visa.png')}}" alt="">
                    </li> --}}
                    <li>
                        <img width="50" height="50" src="{{ asset('assets/frontend/images/master.png')}}" alt="">
                    </li>
                    {{-- <li>
                        <img width="50" height="50" src="{{ asset('assets/frontend/images/cash.png')}}" alt="">
                    </li> --}}
                </ul>
                <div class="copytext">&copy; 2024 Lalisha. All Rights Reserved.</div>
            </div>
        </div>
    </div>
</div>