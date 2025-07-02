<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <div class="welcome-msg">
                    <a href="#" class="help"><i class="d-icon-info"></i>Free Standard Shipping</a>
                </div>
            </div>
            <div class="header-right">
                <a class="call ls-m d-lg-show" href="tel:{{ $siteSetting->phone }}">
                    <i class="d-icon-phone"></i>
                    <span>Call us: </span>{{ $siteSetting->phone }}
                </a>
{{--                <a href="ajax/login.html" class="login-link mr-0"><i class="d-icon-user"></i>Login</a>--}}
            </div>
        </div>
    </div>
    <!-- End HeaderTop -->
    <div class="header-middle sticky-header fix-top sticky-content">
        <div class="container">
            <div class="header-left">
                <a href="#" class="mobile-menu-toggle mr-0">
                    <i class="d-icon-bars2"></i>
                </a>
                <a href="{{ route('home') }}" class="logo d-none d-lg-block">
                    <img src="{{ $siteSetting->logo }}" alt="logo" width="154" height="43" />
                </a>
                <!-- End Logo -->
            </div>
            <div class="header-center d-flex justify-content-center">
                <a href="{{ route('home') }}" class="logo d-block d-lg-none">
                    <img src="{{ $siteSetting->logo }}" alt="logo" width="154" height="43" />
                </a>
                <!-- End Logo -->
            </div>
            <div class="header-right">
                <nav class="main-nav mr-4">
                    <ul class="menu menu-active-underline">
                        <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        @foreach($mainCategories as $mainCategory)
                        <li>
                            <a href="{{ route('dynamic.page',$mainCategory->categories()->first()->slug) }}">{{$mainCategory->name}}</a>
                            <div class="megamenu">
                                <div class="row">
                                    @foreach ($mainCategory->categories()->where('is_menu',1)->orderBy('menu_no','ASC')->limit(6)->get() as $boxByStyle)
                                    <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                        <h4 class="menu-title">{{ $boxByStyle->name }} </h4>
                                        <ul>
                                            @foreach ($boxByStyle->products as $product)
                                                <li class="{{ Request::is($product->slug) ? 'active' : '' }}"><a href="{{ route('dynamic.page', $product->slug) }}"> {{ ucfirst($product->name) }}</a></li>
                                                @if($loop->index == 5)
                                                    @break
                                                @endif
                                            @endforeach
                                            <li><a href="{{ route('dynamic.page', [$boxByStyle->slug])}}"><b>View All Products</b></a>
                                        </ul>
                                    </div>
                                    @endforeach
                                    <!-- End Megamenu -->
                                </div>
                            </div>
                        </li>
                        @endforeach
                        <li class="{{ Request::is('blog') ? 'active' : '' }}">
                            <a href="{{ route('dynamic.page', 'blog') }}">Blog</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'contact.form' ? 'active' : '' }}">
                            <a href="{{ route('contact.form') }}">Contact Us</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'custom.quote' ? 'active' : '' }}">
                            <a href="{{ route('custom.quote') }}">Request a Quote</a>
                        </li>
                    </ul>
                </nav>

                <span class="divider mr-4"></span>
                <div class="header-search hs-toggle d-block">
                    <a href="#" class="search-toggle d-flex align-items-center" title="search">
                        <i class="d-icon-search"></i>
                    </a>
                    <form action="#" class="input-wrapper">
                        <input type="text" class="form-control" name="search" autocomplete="off"
                               placeholder="Search your keyword..." required />
                        <button class="btn btn-search" type="submit" title="submit-button">
                            <i class="d-icon-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->
