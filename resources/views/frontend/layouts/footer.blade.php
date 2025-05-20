<!-- End of Main -->
<section class="banner banner-newsletter bg-primary">
    <div class="container">
        <div class="banner-content row">
            <div class="col-lg-5 d-flex">
                <div class="icon-box icon-box-side appear-animate"
                     data-animation-options="{'name': 'fadeInLeftShorter'}">
                    <div class="icon-box-content">
                        <h4 class="icon-box-title font-weight-bold text-white">Subscribe to the
                            newsletter</h4>
                        <p class="text-white">Stay up to date regarding the newest product & offers</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-lg-block d-flex justify-content-center">
                <form action="#" method="get"
                      class="input-wrapper input-wrapper-inline ml-lg-auto appear-animate"
                      data-animation-options="{'name': 'fadeInRightShorter'}">
                    <input type="email" class="form-control font-primary font-italic form-solid"
                           name="email" id="email" placeholder="Enter Your E-mail Address..." required="">
                    <button class="btn btn-dark" type="submit">Subscribe<i
                            class="d-icon-arrow-right"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>
{{--<footer class="footer">--}}
{{--    <div class="container">--}}
{{--        <div class="footer-middle">--}}
{{--            <div class="row pt-2">--}}
{{--                <div class="col-lg-3 d-flex flex-column align-items-center">--}}

{{--                    <a href="{{ route('home') }}" class="logo-footer">--}}
{{--                        <img src="{{ $siteSetting->footer_logo }}" alt="logo-footer"  />--}}
{{--                    </a>--}}
{{--                    <p class="text-white">--}}
{{--                        {{ $siteSetting->footer_description }}--}}
{{--                    </p>--}}

{{--                </div>--}}
{{--                <div class="col-lg-3 col-contact col-md-6">--}}
{{--                    <div class="widget widget-contact ml-5">--}}
{{--                        <h4 class="widget-title">Get In Touch</h4>--}}
{{--                        <ul class="widget-body">--}}
{{--                            <li>--}}
{{--                                <label>Phone</label>--}}
{{--                                <a href="tel:{{ $siteSetting->phone }}">{{ $siteSetting->phone }}</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <label>Email</label>--}}
{{--                                <a href="mailto:{{ $siteSetting->email }}">{{ $siteSetting->email }}</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <label>Address</label>--}}
{{--                                <a href="#">{{ $siteSetting->address }}</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <label>WORKING DAYS / HOURS</label>--}}
{{--                                <a href="#">{{ $siteSetting->working_hours }}</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-account col-md-6">--}}
{{--                    <div class="widget">--}}
{{--                        <h4 class="widget-title">Our Links</h4>--}}
{{--                        <ul class="widget-body">--}}
{{--                            <li>--}}
{{--                                <a href="{{ route('contact.form')  }}">Home</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="{{ route('custom.quote') }}">Request a Quote</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="{{ route('blog') }}">Blog</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="{{ route('contact.form')  }}">Contact Us</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3">--}}
{{--                    <div class="widget widget-newsletter form-wrapper">--}}
{{--                        <div class="newsletter-info">--}}
{{--                            <h4 class="widget-title">Subscribe Newsletter</h4>--}}
{{--                            <p>Subscribe to the Riode eCommerce Newsletter. Receive timely updates from your--}}
{{--                                favourite products.</p>--}}
{{--                        </div>--}}
{{--                        <form action="#" class="input-wrapper input-wrapper-inline">--}}
{{--                            <input type="email" class="form-control" name="email" id="email"--}}
{{--                                   placeholder="Email address here..." required />--}}
{{--                            <button class="btn btn-primary btn-rounded btn-md ls-normal ml-2"--}}
{{--                                    type="submit">subscribe<i class="d-icon-arrow-right"></i></button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <div class="social-links">--}}
{{--                        @foreach($socialLinks as $social)'--}}
{{--                            <a href="{{ $social->link }}" title="social-link" class="social-link social-wcb {{ $social->icon }}"></a>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- End FooterMiddle -->--}}
{{--        <div class="footer-bottom">--}}
{{--            <div class="footer-left">--}}
{{--                <p class="copyright">Copyright &copy; {{ Date('Y') }} Usboxprinting. All Rights Reserved.</p>--}}
{{--            </div>--}}
{{--            <div class="footer-right">--}}
{{--                <figure class="d-flex">--}}
{{--                    <img src="{{ asset('images/demos/demo32/payment.png') }}" alt="payment" width="272" height="20">--}}
{{--                </figure>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- End FooterBottom -->--}}
{{--</footer>--}}
<!-- End Footer -->
<!-- End Main -->
<footer class="footer">
    <div class="container">
        <div class="footer-middle">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="widget widget-about">
                        <a href="{{ route('home') }}" class="logo-footer">
                            <img src="{{ $siteSetting->footer_logo }}" alt="logo-footer"  />
                        </a>
                        <div class="widget-body">
                            <p>
                                {{ $siteSetting->footer_description   }}
                            </p>
                        </div>
                        <figure class="payment">
                            <img src="images/payment.png" alt="payment" width="159" height="29" />
                        </figure>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="widget">
                                <h4 class="widget-title">Top Products</h4>
                                <ul class="widget-body">
                                    <li>
                                        <a href="about-us.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Order History</a>
                                    </li>
                                    <li>
                                        <a href="#">Returns</a>
                                    </li>
                                    <li>
                                        <a href="#">Custom Service</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms &amp; Condition</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="widget">
                                <h4 class="widget-title">Top Categories</h4>
                                <ul class="widget-body">
                                    <li>
                                        <a href="#">Payment Methods</a>
                                    </li>
                                    <li>
                                        <a href="#">Money-back Guarantee!</a>
                                    </li>
                                    <li>
                                        <a href="#">Returns</a>
                                    </li>
                                    <li>
                                        <a href="#">Shipping</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms and Conditions</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="widget">
                                <h4 class="widget-title">About us</h4>
                                <ul class="widget-body">
                                    <li>
                                        <a href="#">Sign in</a>
                                    </li>
                                    <li>
                                        <a href="cart.html">View Cart</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">My Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="#">Track My Order</a>
                                    </li>
                                    <li>
                                        <a href="#">Help</a>
                                    </li>
                                </ul>

                            </div>
                            <div class="social-links">
                                <a href="#" title="social-link" class="social-link social-facebook fab fa-facebook-f"></a>
                                <a href="#" title="social-link" class="social-link social-twitter fab fa-twitter"></a>
                                <a href="#" title="social-link" class="social-link social-linkedin fab fa-linkedin-in"></a>
                            </div>
                            <!-- End Widget -->
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- End Footer Middle -->
        <div class="footer-bottom">
            <div class="footer-left">

            </div>
            <div class="footer-center">
                <p class="copyright">Riode eCommerce &copy; 2021. All Rights Reserved</p>
            </div>
            <div class="footer-right">

            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer -->
