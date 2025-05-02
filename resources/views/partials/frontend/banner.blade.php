<section class="intro-section p-relative">
    <div class="owl-carousel owl-theme row owl-nav-fade intro-slider animation-slider cols-1 gutter-no"
         data-owl-options="{
                        'nav': false,
                        'dots': false,
                        'loop': false,
                        'items': 1,
                        'autoplay': true,
                        'autoplayTimeout': 8000,
                        'responsive': {
                            '992': {
                                'nav': true
                            }
                        }
                    }">
        @foreach($banners as $banner)
        <div class="intro-slide1 banner banner-fixed height-50" style="background-color: #f6f6f6;">
            <figure>
                <img src="{{$banner->image}}" alt="intro-banner" width="1920"
                     height="500" style="background-color: #f6f6f6;" />
            </figure>
            <div class="container">
                <div class="banner-content">

                </div>
            </div>
        </div>
        @endforeach
    </div>

</section>
