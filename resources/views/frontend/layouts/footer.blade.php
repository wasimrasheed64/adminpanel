<!-- End of Main -->
<footer class="footer">
    <div class="container">
        <div class="footer-middle">
            <div class="row pt-2">
                <div class="col-lg-3 d-flex flex-column align-items-center">

                    <a href="{{ route('home') }}" class="logo-footer">
                        <img src="{{ $siteSetting->footer_logo }}" alt="logo-footer"  />
                    </a>
                    <p class="text-white">
                        {{ $siteSetting->footer_description }}
                    </p>

                </div>
                <div class="col-lg-3 col-contact col-md-6">
                    <div class="widget widget-contact">
                        <h4 class="widget-title">Get In Touch</h4>
                        <ul class="widget-body">
                            <li>
                                <label>Phone</label>
                                <a href="tel:{{ $siteSetting->phone }}">{{ $siteSetting->phone }}</a>
                            </li>
                            <li>
                                <label>Email</label>
                                <a href="mailto:{{ $siteSetting->email }}">{{ $siteSetting->email }}</a>
                            </li>
                            <li>
                                <label>Address</label>
                                <a href="#">{{ $siteSetting->address }}</a>
                            </li>
                            <li>
                                <label>WORKING DAYS / HOURS</label>
                                <a href="#">{{ $siteSetting->working_hours }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-account col-md-6">
                    <div class="widget">
                        <h4 class="widget-title">My Account</h4>
                        <ul class="widget-body">
                            <li>
                                <a href="{{ route('contact.form')  }}">Contact Us</a>
                            </li>
                            <li>
                                <a href="#">Our Services</a>
                            </li>
                            <li>
                                <a href="#">Payment Methods</a>
                            </li>
                            <li>
                                <a href="#">Service Guide</a>
                            </li>
                            <li>
                                <a href="faq.html">Contact Us</a>
                            </li>
                            <li>
                                <a href="#">Service Support</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">About Riode</a>
                            </li>
                            <li>
                                <a href="#">Our Guarantees</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget widget-newsletter form-wrapper">
                        <div class="newsletter-info">
                            <h4 class="widget-title">Subscribe Newsletter</h4>
                            <p>Subscribe to the Riode eCommerce Newsletter. Receive timely updates from your
                                favourite products.</p>
                        </div>
                        <form action="#" class="input-wrapper input-wrapper-inline">
                            <input type="email" class="form-control" name="email" id="email"
                                   placeholder="Email address here..." required />
                            <button class="btn btn-primary btn-rounded btn-md ls-normal ml-2"
                                    type="submit">subscribe<i class="d-icon-arrow-right"></i></button>
                        </form>
                    </div>
                    <div class="social-links">
                        @foreach($socialLinks as $social)'
                            <a href="{{ $social->link }}" title="social-link" class="social-link social-wcb {{ $social->icon }}"></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End FooterMiddle -->
        <div class="footer-bottom">
            <div class="footer-left">
                <p class="copyright">Copyright &copy; {{ Date('Y') }} Usboxprinting. All Rights Reserved.</p>
            </div>
            <div class="footer-right">
                <figure class="d-flex">
                    <img src="{{ asset('images/demos/demo32/payment.png') }}" alt="payment" width="272" height="20">
                </figure>
            </div>
        </div>
    </div>
    <!-- End FooterBottom -->
</footer>
<!-- End Footer -->
