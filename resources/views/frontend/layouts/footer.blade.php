<!-- End of Main -->
<footer class="footer">
    <div class="container">
        <div class="footer-middle">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget-about">
                        <h4 class="widget-title">About Us</h4>
                        <div class="widget-body">
                            <p class="font-primary ls-normal mb-4 pr-lg-3">{{ $siteSetting->footer_description }}</p>
                        </div>
                        <a href="{{ route('home') }}" class="logo-footer pb-4 pb-lg-0">
                            <img src="{{ $siteSetting->footer_logo }}" alt="logo-footer" width="154"
                                 height="43" />
                        </a>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget">
                        <h4 class="widget-title">Useful links</h4>
                        <ul class="widget-body">
                            <li>
                                <a href="{{ route('contact.form')  }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('custom.quote') }}">Request a Quote</a>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li>
                                <a href="{{ route('contact.form')  }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget-info mb-0">
                        <h4 class="widget-title">Contact Us</h4>
                        <ul class="widget-body mb-5">
                            <li>
                                <label>WORKING DAYS / HOURS:</label>
                                <a href="#">{{ $siteSetting->working_hours }}</a>
                            </li>
                            <li>
                                <label>Address:</label>
                                <a href="#">{{ $siteSetting->address }}</a>
                            </li>
                            <li>
                                <label>Phone:</label>
                                <a href="tel:{{ $siteSetting->phone }}">{{ $siteSetting->phone }}</a>
                            </li>
                            <li>
                                <label>Email:</label>
                                <a href="mailto:{{ $siteSetting->email }}">{{ $siteSetting->email }}</a>
                            </li>
                        </ul>
                        <div class="social-links">
                            @foreach($socialLinks as $social)'
                            <a href="{{ $social->link }}" title="social-link"
                               class="social-link social-wcb {{ $social->icon }}"></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End FooterMiddle -->
        <div class="footer-bottom">
            <div class="footer-left mb-0">
            </div>
            <div class="footer-center mb-0">
                <p class="copyright">Copyright &copy; {{ Date('Y') }} Boxprinting. All Rights Reserved.</p>
            </div>
            <div class="footer-right mb-0">
            </div>
        </div>
        <!-- End FooterBottom -->
    </div>
</footer>
<!-- End Footer -->
