<header class="header">
    <!-- End HeaderTop -->
    <div class="header-middle sticky-header fix-top sticky-content">
        <div class="container">
            <div class="header-left">
                <a href="#" class="mobile-menu-toggle">
                    <i class="d-icon-bars2"></i>
                </a>
                <a href="{{ route('home') }}" class="logo d-none d-lg-block">
                    <img src="{{ $siteSetting->logo }}" alt="logo" width="154" height="43"/>
                </a>
                <!-- End Logo -->

                <!-- End Header Search -->
            </div>
            <div class="header-right">
                <a href="tel:#" class="icon-box icon-box-side">
                    <div class="icon-box-icon mr-0 mr-lg-2">
                        <i class="d-icon-phone"></i>
                    </div>
                    <div class="icon-box-content d-lg-show">
                        <h4 class="icon-box-title">Call Us Now:</h4>
                        <p>{{ $siteSetting->phone }}</p>
                    </div>
                </a>
                <span class="divider"></span>
                <span class="divider"></span>
                <div class="header-search hs-toggle mobile-search">
                    <a href="#" class="search-toggle">
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
                <!-- End of Header Search -->
            </div>
        </div>
    </div>

    <div class="header-bottom d-lg-show sticky-header fix-top sticky-content padding-y-0">
        <div class="container">
            <div class="header-left">
                <nav class="main-nav ml-0">
                    <ul class="menu">
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
            </div>
            <div class="header-right">
                <a href="https://d-themes.com/buynow/riode.html" class="ml-6">Buy Riode!</a>
            </div>
        </div>
    </div>
</header>
