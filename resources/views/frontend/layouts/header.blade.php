<header class="header">
    <div class="header-middle  sticky-content">
        <div class="container">
            <div class="header-left">
                <a href="#" class="mobile-menu-toggle">
                    <i class="d-icon-bars2"></i>
                </a>
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ $siteSetting->logo }}" alt="logo" width="153" height="44" />
                </a>
            </div>
            <div class="header-middle pr-5 ">
                <div class="header-search hs-simple pr-5">
                    <form action="#" class="input-wrapper">
                        <input type="text" class="form-control" name="search" autocomplete="off"
                            placeholder="Search..." required />
                        <button class="btn btn-search" type="submit" title="submit-button">
                            <i class="d-icon-search"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="header-right">
                <a href="tel:#" class="icon-box icon-box-side ">
                    <div class="icon-box-icon mr-0 mr-lg-2 text-color-orange">
                        <i class="d-icon-phone faa-flash animated "></i>
                    </div>
                    <div class="icon-box-content d-lg-show text-color-orange">
                        <h4 class="icon-box-title ">Call Us Now:</h4>
                        <p class="text-color-orange">{{ $siteSetting->phone }}</p>
                    </div>
                </a>
                <span class="divider"></span>
                <a href="javascript:void(Tawk_API.toggle())" class="icon-box icon-box-side">
                    <div class="icon-box-icon mr-0 mr-lg-2 text-color-orange">
                        <i class="far fa-comment faa-flash animated "></i>
                    </div>
                    <div class="icon-box-content d-lg-show">
                        <h4 class="icon-box-title ">Chat with us</h4>
                        {{--                        <p class="text-color-orange">{{ $siteSetting->email }}</p> --}}
                    </div>
                </a>


            </div>
        </div>
    </div>

    <div class="header-bottom has-center sticky-header fix-top sticky-content d-lg-show">
        <ul class="container-fluid">
            <div class="header-left">

            </div>
            <div class="header-center">
                <nav class="main-nav">
                    <ul class="menu">
                        <li class="active">
                            <a href="{{ route('home') }}">Home</a>
                        </li>

  @foreach($mainCategories as $mainCategory)
                        <li>
                             <a href="{{ route('dynamic.page',$mainCategory->name) }}">{{ $mainCategory->name }}</a>
                            <div class="megamenu">
                                <ul class="row">
                                    @foreach ($mainCategory->categories()->where('is_menu',1)->orderBy('menu_no','ASC')->limit(6)->get() as $boxByStyle)
                                        <div class="col-md-2 pb-2">
                                            <h4 class="menu-title  by-in-heading"><a
                                                    href="{{route('dynamic.page',[$boxByStyle->slug])}}">
                                                    {{ $boxByStyle->name }}</a></h4>
                                            <ul>
                                                @foreach ($boxByStyle->products as $product)
                                                    <li><a href="{{ route('dynamic.page', $product->slug) }}">
                                                            <i class="fas fa-chevron-right"></i>
                                                         {{ ucfirst($product->name) }} 
                                                            <!--{{ Illuminate\Support\Str::limit(ucfirst($product->name),20,'..') }}-->
                                                        </a>
                                                    </li>
                                                    @php
                                                        if ($loop->iteration >= 14) {
                                                            break;
                                                        }
                                                    @endphp
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endforeach
                                </ul>
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
            </div>
    </div>
    </div>
</header>
