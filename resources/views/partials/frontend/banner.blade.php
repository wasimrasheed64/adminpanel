<section class="intro-section">
    <div class="owl-carousel owl-theme row owl-nav-fade intro-slider animation-slider cols-1 gutter-no"
         data-owl-options="{
                        'nav': false,
                        'dots': false,
                        'loop': true,
                        'items': 1,
                        'autoplay': false,
                        'autoplayTimeout': 8000,
                        'responsive': {
                            '992': {
                                'nav': true
                            }
                        }
                    }">
        @foreach($banners as $banner)
            <div class="intro-slide1 banner banner-fixed" style="background-color: #f6f6f6;">
                <figure>
                    <img src="{{$banner->image}}" alt="intro-banner" width="1903"
                         height="800" style="background-color: #f6f6f6;" />
                </figure>
                <div class="container">
{{--                    <div class="banner-content {{$banner->position}}">--}}
{{--                        <h2 class="banner-title mb-2 font-weight-bold slide-animate text-dark"--}}
{{--                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '1s'}">--}}
{{--                            {{$banner->heading}}</h2>--}}
{{--                        <p class="slide-animate"--}}
{{--                           data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">--}}
{{--                            {!!$banner->description!!}--}}
{{--                        </p>--}}
{{--                        <a href="{{ route('home') }}" class="btn btn-dark btn-ellipse ls-m slide-animate"--}}
{{--                           data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">--}}
{{--                            {{$banner->button_text}}</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        @endforeach
    </div>
    <div class="shape-divider">
        <div class="shape1">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1920px"
                 height="317.318px" viewBox="0 0 1920 317.318" enable-background="new 0 0 1920 317.318"
                 xml:space="preserve" preserveAspectRatio="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF"
                                      d="M1920.5,321.029L-0.493,319.064V188.854
                                    c0,0,266.042,282.328,851.688,0C1483.531-115.985,1817.728,72.4,1920.5,153.396V321.029z" style="opacity: .2;"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF"
                      d="M-0.5,270.412V113.073
                                    c98.208-70.839,407.683-228.759,985.305,29.007c593.667,264.928,935.688,0,935.688,0v128.332H-0.5z" style="opacity: .2;"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M1920.5,234.867c-401.555-0.201-766.128-0.385-766.128-0.385
                                    s346.533-156.566,765.94-199.011c0.063-0.006,0.125-0.012,0.188-0.019V234.867z"
                      style="opacity: .2;"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF"
                      d="M-0.5,288.449V13.697
                                    c163.401-0.867,337.865,32.776,510.441,125.717c160.954,86.684,317.758,63.473,422.06,59.639v88.85L-0.5,288.449z" style="opacity: .2;"></path>
                            </svg>
        </div>
        <div class="shape2">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-0.6 23.7 100 6"
                 enable-background="new -0.6 23.7 100 6" xml:space="preserve">
                                <path fill="#FFFFFF" d="M99.4,24.5c0,0-8.7,3.7-16.1,4c-7.4,0.3-16.6-5-27.9-3.9c-8.7,0.8-9.5,4.4-23.4,4.9
                                    c-7.8,0.3-17.4-4.6-23.7-5.5c-6.3-0.8-9,0.3-9,0.3v5.4h100V24.5z"></path>
                            </svg>
        </div>
    </div>
</section>
<section class="pb-8 service-list-section p-relative overflow-hidden">
    <div class="container">
        <div class="service-list service-list-lg appear-animate" data-animation-options="{
                            'name': 'fadeInUpShorter',
                            'delay': '.2s'
                        }">
            <div class="owl-carousel owl-theme show-shadow" data-owl-options="{
                                'margin':20,
                                'nav':false,
                                'dots':false,
                                'responsive':{
                                    '992':{
                                        'items':3
                                    },
                                    '768':{
                                        'items':2
                                    },
                                    '576':{
                                        'items':2
                                    },
                                    '0':{
                                        'items':1
                                    },
                                    '1200':{
                                        'items':4
                                    }
                                }
                            }">

                <div class="icon-box icon-box-side flex-column">
                    <i class="icon-box-icon d-icon-truck mr-0"></i>
                    <div class="icon-box-content mb-1 text-center">
                        <h4 class="icon-box-title text-normal">Free Shipping &amp; Return</h4>
                        <p class="text-grey">Get free delivery of your orders<br />
                            all over the world.</p>
                    </div>
                </div>
                <div class="icon-box icon-box-side flex-column">
                    <i class="icon-box-icon d-icon-service mr-0"></i>
                    <div class="icon-box-content mb-1 text-center">
                        <h4 class="icon-box-title text-normal">Customer Support</h4>
                        <p class="text-grey">We provide convenient support of<br />24/7 for
                            our customers.</p>
                    </div>
                </div>
                <div class="icon-box icon-box-side flex-column">
                    <i class="icon-box-icon d-icon-money mr-0"></i>
                    <div class="icon-box-content mb-1 text-center">
                        <h4 class="icon-box-title text-normal">Moneyback Guarantee</h4>
                        <p class="text-grey">We fully guarantee our money<br />
                            back policy with no doubt.</p>
                    </div>
                </div>
                <div class="icon-box icon-box-side flex-column">
                    <i class="icon-box-icon d-icon-card mr-0"></i>
                    <div class="icon-box-content mb-1 text-center">
                        <h4 class="icon-box-title text-normal">20% Off Your First Order</h4>
                        <p class="text-grey">Get our first gift - 20% off for your<br />
                            first ordered product.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
