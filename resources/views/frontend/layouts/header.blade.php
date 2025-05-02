<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <div class="welcome-msg">
                    <a href="{{ route('contact.form') }}" class="contact"><i class="d-icon-info"></i>
                        Contact Us
                    </a>
                    <a href="#" class="help"><i class="d-icon-map"></i>
                        {{ $siteSetting->address }}</a>
                </div>
            </div>
            <div class="header-right">
                <a class="call" href="tel:{{$siteSetting->phone}}">
                    <i class="d-icon-phone"></i>
                    <span> Call us: </span>{{ $siteSetting->phone }}
                </a>
                <div class="dropdown wishlist wishlist-dropdown off-canvas">
                </div>
                <a href="ajax/login.html" class="login-link"><i class="d-icon-user"></i>Login</a>

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
                    <img src="{{ $siteSetting->logo }}" alt="logo" width="154" height="43"/>
                </a>
                <!-- End Logo -->
            </div>
            <div class="header-center d-flex justify-content-center">
                <a href="{{ route('home') }}" class="logo d-block d-lg-none">
                    <img src="{{ $siteSetting->logo }}" alt="logo" width="154" height="43"/>
                </a>
                <!-- End Logo -->
            </div>
            <div class="header-right">
                <nav class="main-nav mr-4">
                    <ul class="menu menu-active-underline">
                        <li class="active">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        @foreach($mainCategories as $mainCategory)
                            <li class="submenu submenu-container">
                                <a href="{{ route('dynamic.page',$mainCategory->name) }}">{{ $mainCategory->name }}</a>
                                <div class="megamenu">
                                    <div class="row">
                                        @foreach ($mainCategory->categories()->where('is_menu',1)->orderBy('menu_no','ASC')->limit(6)->get() as $boxByStyle)
                                            <div class="col-md-2">
                                                <h5 class="menu-title"><a
                                                        href="{{route('dynamic.page',[$boxByStyle->slug])}}">
                                                        {{ $boxByStyle->name }}</a></h5>
                                                <ul>
                                                    @foreach ($boxByStyle->products as $product)
                                                        <li><a href="{{ route('dynamic.page', $product->slug) }}">
                                                                {{ ucfirst($product->name) }}
                                                            </a>
                                                        </li>
                                                        @if($loop->index == 7)
                                                            @break
                                                        @endif
                                                    @endforeach
                                                    <li>
                                                        <a href="{{ route('dynamic.page', [$boxByStyle->slug])}}">
                                                            <b>View All Products</b>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                        @endforeach


                        <li>
                            <a href="{{ route('dynamic.page', 'blog') }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('contact.form') }}">Contact Us</a>
                        </li>

                        <li>
                            <a href="{{ route('custom.quote') }}">Request a Qoute</a>
                        </li>
                    </ul>
                </nav>

                <span class="divider mr-4"></span>
                <div class="header-search hs-toggle d-block">
                    <a href="#" class="search-toggle d-flex align-items-center">
                        <i class="d-icon-search"></i>
                    </a>
                    <form action="#" class="input-wrapper">
                        <input type="text" class="form-control" name="search" autocomplete="off"
                               placeholder="Search your keyword..." required/>
                        <button class="btn btn-search" type="submit">
                            <i class="d-icon-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
