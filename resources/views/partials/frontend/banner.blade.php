{{--<section--}}
{{--    class="intro-slider home animation-slider owl-carousel owl-theme owl-nav-bg owl-nav-arrow row cols-1 gutter-no"--}}
{{--    data-owl-options="{--}}
{{--                    'items': 1,--}}
{{--                    'loop': true,--}}
{{--                    'nav': true,--}}
{{--                    'dots': false,--}}
{{--                    'autoplay': true,--}}
{{--                    'animateIn': 'fadeIn',--}}
{{--                    'animateOut': 'fadeOut'--}}
{{--                }">--}}
{{--    @foreach($banners as $banner)--}}
{{--    <div class="intro-slide1 banner banner-fixed" style="background-color: #fff">--}}
{{--        <figure>--}}
{{--            <img src="{{ $banner->image }}" alt="banner" width="1903" height="300" />--}}
{{--        </figure>--}}
{{--        <div class="container">--}}
{{--            <div class="banner-content">--}}
{{--                <div class="slide-animate">--}}
{{--                    <h4 class="banner-subtitle text-uppercase slide-animate appear-animate mb-1"--}}
{{--                        data-animation-options="{--}}
{{--                                        'name': 'fadeInUpShorter',--}}
{{--                                        'duration': '1s',--}}
{{--                                        'delay': '.3s'--}}
{{--                                    }">From Online Store</h4>--}}
{{--                    <h3 class="banner-title font-weight-bold slide-animate appear-animate"--}}
{{--                        data-animation-options="{--}}
{{--                                        'name': 'blurIn',--}}
{{--                                        'duration': '1s',--}}
{{--                                        'delay': '.5s'--}}
{{--                                    }">Originals Comper<br>Star. Shoes</h3>--}}
{{--                    <p class="text-dark font-primary text-uppercase slide-animate appear-animate"--}}
{{--                       data-animation-options="{--}}
{{--                                        'name': 'fadeInRightShorter',--}}
{{--                                        'duration': '1s',--}}
{{--                                        'delay': '.7s'--}}
{{--                                    }"><span class="ls-super font-weight-bold">For-Men</span>--}}
{{--                        <br>--}}
{{--                        Product Identifier: DD1160</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @endforeach--}}
{{--</section>--}}
<section class="intro-section">
    <div class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 gutter-no"
         data-owl-options="{
                        'nav': true,
                        'dots': true,
                        'loop': false,
                        'items': 1,
                        'autoplay': false,
                        'autoplayTimeout': 8000
                    }">

        @foreach($banners as $banner)
            <div class="banner banner-fixed intro-slide1" style="background-color: #46b2e8;">
                <figure>
                    <img src="{{ $banner->image }}" alt="intro-banner" width="1903"
                         height="630" style="background-color: #34ace5;"/>
                </figure>
{{--                @if($banner->heading)--}}
{{--                    <div class="container">--}}
{{--                        <div class="banner-content y-50 {{ $banner->position }}">--}}
{{--                            <h4 class="banner-subtitle font-weight-bold ls-l">--}}
{{--                                        <span class="d-inline-block slide-animate"--}}
{{--                                              data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">--}}
{{--                                            {{ $banner->heading }}--}}
{{--                                        </span>--}}
{{--                            </h4>--}}
{{--                            <p class="slide-animate text-white ls-s mb-7"--}}
{{--                               data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">--}}
{{--                                {{ $banner->description }}--}}
{{--                            </p>--}}
{{--                            <a href="{{ $banner->link }}" class="btn btn-dark btn-rounded slide-animate"--}}
{{--                               data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">--}}
{{--                                {{ $banner->button_text }}--}}
{{--                                <i class="d-icon-arrow-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endif--}}
            </div>
        @endforeach
        {{--        <div class="banner banner-fixed intro-slide2" style="background-color: #dddee0;">--}}
        {{--            <figure>--}}
        {{--                <img src="images/demos/demo1/slides/slide2.jpg" alt="intro-banner" width="1903"--}}
        {{--                     height="630" style="background-color: #d8d9d9;" />--}}
        {{--            </figure>--}}
        {{--            <div class="container">--}}
        {{--                <div class="banner-content y-50 ml-auto text-right">--}}
        {{--                    <h4 class="banner-subtitle ls-s mb-1 slide-animate"--}}
        {{--                        data-animation-options="{'name': 'fadeInUp', 'duration': '.7s'}"><span--}}
        {{--                            class="d-block text-uppercase mb-2">Coming soon</span><strong--}}
        {{--                            class="font-weight-semi-bold ls-m">Riode Birthday</strong></h4>--}}
        {{--                    <h2 class="banner-title mb-2 d-inline-block font-weight-bold text-primary slide-animate"--}}
        {{--                        data-animation-options="{'name': 'fadeInRight', 'duration': '1.2s', 'delay': '.5s'}">--}}
        {{--                        Sale</h2>--}}
        {{--                    <p class="slide-animate font-primary ls-s text-dark mb-4"--}}
        {{--                       data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '1.2s'}">--}}
        {{--                        Up to 70% off on all products <br />online &amp; Free Shipping over $90</p>--}}
        {{--                    <a href="shop.html" class="btn btn-dark btn-rounded slide-animate"--}}
        {{--                       data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '1.4s'}">Shop--}}
        {{--                        Now<i class="d-icon-arrow-right"></i></a>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
</section>
