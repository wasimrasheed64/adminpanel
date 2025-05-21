@php use App\Models\Product; @endphp
@php use App\Models\Category; @endphp
    <!-- End of Main -->
<section class="banner banner-newsletter bg-primary mt-5">
    <div class="container">
        <div class="banner-content row">
            <div class="col-lg-12">
                    <div class="text-center">
                        <h4 class="icon-box-title text-center font-weight-bold text-white line-height-3">From flat to fantastic — we bring boxes to life.</h4>
                        <p class="text-white line-height-3">Let’s design yours!</p>
                        <a class="btn btn-secondary border-radius-20">Request a Quote</a>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- End Main -->
<footer class="footer">
    <div class="container">
        <div class="footer-middle">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="widget widget-about">
                        <a href="{{ route('home') }}" class="logo-footer">
                            <img src="{{ $siteSetting->footer_logo }}" alt="logo-footer"/>
                        </a>
                        <div class="widget-body ">
                            <p>
                                {{ $siteSetting->footer_description   }}
                            </p>
                        </div>
                        <ul class="widget-body mb-5">
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

                        </ul>

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
                                    @foreach(Product::where('is_footer',1)->get() as $product)
                                        <li>
                                            <a href="{{ route('dynamic.page', $product->slug) }}">{{ $product->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="widget">
                                <h4 class="widget-title">Top Categories</h4>
                                <ul class="widget-body">
                                    @foreach(Category::where('is_footer',1)->get() as $category)
                                        <li>
                                            <a href="{{ route('dynamic.page', $category->slug) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="widget">
                                <h4 class="widget-title">Our Links</h4>
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

                            <div class="social-links mb-5">
                                @foreach($socialLinks as $social)
                                    <a href="{{ $social->link }}" title="social-link"
                                       class="social-link social-wcb {{ $social->icon }}"></a>
                                @endforeach
                            </div>
                            <figure class="payment">
                                <img src="{{ asset('images/payment.png') }}" alt="payment" width="159" height="29"/>
                            </figure>
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
                <p class="copyright"> {{ env('APP_NAME') }} &copy; {{ date('Y') }}. All Rights Reserved</p>
            </div>
            <div class="footer-right">

            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer -->
