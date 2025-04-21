{{--<div class="container">--}}
{{--    <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{--}}
{{--                                'nav': false,--}}
{{--                                'dots': true,--}}
{{--                                'items': 3,--}}
{{--                                'margin':  20,--}}
{{--                                'loop': true,--}}
{{--                                'responsive': {--}}
{{--                                    '0': {--}}
{{--                                        'items': 1--}}
{{--                                    },--}}
{{--                                    '576': {--}}
{{--                                        'items': 2--}}
{{--                                    },--}}
{{--                                    '992': {--}}
{{--                                        'items': 3,--}}
{{--                                        'dots': false--}}
{{--                                    }--}}
{{--                                }--}}
{{--                            }">--}}
{{--        <div class="category category-group-image ">--}}
{{--            <a href="#">--}}
{{--                <figure class="category-media">--}}
{{--                    <img src="images/categories/category13.jpg" alt="category" width="190"--}}
{{--                         height="169" />--}}
{{--                </figure>--}}
{{--            </a>--}}
{{--            <div class="category-content">--}}
{{--                <h4 class="category-name"><a href="shop.html">Electronics</a></h4>--}}
{{--                <ul class="category-list">--}}
{{--                    <li><a href="#">Air conditioners</a></li>--}}
{{--                    <li><a href="#">Machines</a></li>--}}
{{--                    <li><a href="#">Musical instrument</a></li>--}}
{{--                    <li><a href="#">Office Electronics</a></li>--}}
{{--                    <li><a href="#">TV</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="category category-group-image">--}}
{{--            <a href="#">--}}
{{--                <figure class="category-media">--}}
{{--                    <img src="images/categories/category14.jpg" alt="category" width="190"--}}
{{--                         height="169" />--}}
{{--                </figure>--}}
{{--            </a>--}}
{{--            <div class="category-content">--}}
{{--                <h4 class="category-name"><a href="shop.html">Fashion &amp; Clothings</a></h4>--}}
{{--                <ul class="category-list">--}}
{{--                    <li><a href="#">Accessories</a></li>--}}
{{--                    <li><a href="#">Bags &amp; Backpacks</a></li>--}}
{{--                    <li><a href="#">Men's</a></li>--}}
{{--                    <li><a href="#">Shoes &amp; Boots</a></li>--}}
{{--                    <li><a href="#">Women’s</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="category category-group-image">--}}
{{--            <a href="#">--}}
{{--                <figure class="category-media">--}}
{{--                    <img src="images/categories/category15.jpg" alt="category" width="190"--}}
{{--                         height="169" />--}}
{{--                </figure>--}}
{{--            </a>--}}
{{--            <div class="category-content">--}}
{{--                <h4 class="category-name"><a href="shop.html">Computers</a></h4>--}}
{{--                <ul class="category-list">--}}
{{--                    <li><a href="#">Desktop PC</a></li>--}}
{{--                    <li><a href="#">Laptop</a></li>--}}
{{--                    <li><a href="#">PC Components</a></li>--}}
{{--                    <li><a href="#">PC Gaming</a></li>--}}
{{--                    <li><a href="#">Storage &amp; Memory</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="container mt-4">
    <div class="row">
 @foreach($mainCategories as $mainCategory)
    <div class="col-sm-4">
        <div class="banner-shortcode-wrap style-1">
            <a href="">
                <div class="banner-content">
                    <div class="banner-label-outer"><span class="banner-label">View Products</span></div>
                    <img width="600" height="375"
                         src="{{ $mainCategory->image }}"
                         alt="{{ $mainCategory->name }}">
                    <div class="banner-content-title"><h3 class="banner-title">{{ $mainCategory->name }}</h3>
                        <div class="overlay-bg bg-ff8a43"></div>
                    </div>
                </div>
            </a></div>
    </div>
   @endforeach

    </div>
</div>
