<div class="home">
<section class="pb-5 mt-8 pt-4 service-list-section p-relative">
    <div class="shape-divider shape4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>
    <div class="container">
        <div class="service-list service-list-lg appear-animate" data-animation-options="{
                        'name': 'fadeInUpShorter',
                        'delay': '.2s'
                    }">
            <div class="owl-carousel owl-theme owl-shadow-carousel show-shadow" data-owl-options="{
                            'margin':20,
                            'nav':false,
                            'dots':false,
                            'autoplay': true,
                            'autoplayTimeout': 4000,
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
<section class="banner-section pt-md-6 pb-8">
    <div class="container">
        <div class="row">
            <div class="col-md-12 appear-animate"
                 data-animation-options="{'name': 'fadeInRightShorter', 'delay': '.3s'}">
                <div class="tab tab-nav-center tab-nav-boxed
                tab-outline2">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link text-dark  " href="#tab6-1">FAQS</a>
                        </li>
                        <li class="nav-item text-dark">
                            <a class="nav-link active" href="#tab6-2">Qoute Form</a>
                        </li>
                        <li class="nav-item text-dark">
                            <a class="nav-link " href="#tab6-3">Description</a>
                        </li>
                    </ul>
                    <div class="tab-content p-5">
                        <div class="tab-pane " id="tab6-1">
                            <div class="accordion accordion-border accordion-boxed accordion-plus">

                                    @foreach(\App\Models\Faq::get() as $faq)
                                    <div class="card">
                                    <div class="card-header btn-accordian">
                                        <a href="#collapse2-{{$faq->id }}" class="ml-5 {{ $loop->iteration > 1 ? 'expand' : 'collapse' }} ">{{ $faq->question }}</a>
                                    </div>
                                    <div id="collapse2-{{$faq->id }}" class="{{ $loop->iteration > 1 ? 'collapsed' : 'expanded' }} p-5">
                                        <div class="card-body btn-accordian">
                                            <p class="ml-5 mb-0 pb-2">{{ $faq->answer }}</p>
                                        </div>
                                    </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane active text-dark bg-white" id="tab6-2">
                            @include('partials.frontend.quickQoute')
                        </div>
                        <div class="tab-pane text-dark bg-white" id="tab6-3">
                            <div class="row p-5">
                                <div class="col-sm-1">

                                </div>
                                <div class="col-lg-10" style="height:500px; overflow: scroll">
                                    {!! $description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-10 pb-10 shape-divider shape5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                            c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                            c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>
</section>
</div>
