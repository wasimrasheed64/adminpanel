<div>
{{--    style="background-color: rgba(215, 233, 233, 0.3);">--}}
<section class="grey-section mt-8 pt-10 pb-10" style="background-color: #D7E9E9">
    <div class="container mt-4 mb-4">
        <div class="service-list service-list-lg appear-animate" data-animation-options="{
                        'name': 'fadeInUpShorter',
                        'delay': '.2s'
                    }">
            <h1 class="title title-center mb-0">One place to get your custom packaging</h1>
            <p class="text-center mb-5">offers a variety of custom packaging solutions and project assistance<br/>
                with pricing and service you'll love.</p>
            <div class="code-template">
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
                <div class="icon-box icon-border text-center">
    <span class="icon-box-icon">
        <i class="d-icon-service"></i>
    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Customer Support
                        </h4>
                        <p>We provide convenient support of<br />24/7 for
                            our customers.</p>
                    </div>
                </div>
                <div class="icon-box icon-border text-center">
    <span class="icon-box-icon">
        <i class="d-icon-truck"></i>
    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Free Shipping &amp; Return
                        </h4>
                        <p>Get free delivery of your orders<br />
                            all over the world.</p>
                    </div>
                </div>
                <div class="icon-box icon-border text-center">
    <span class="icon-box-icon">
        <i class="d-icon-money"></i>
    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Moneyback Guarantee
                        </h4>
                        <p>We fully guarantee our money<br />
                            back policy with no doubt.</p>
                    </div>
                </div>
                <div class="icon-box icon-border text-center">
    <span class="icon-box-icon">
        <i class="d-icon-abacus"></i>
    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Customize Size
                            & Style
                        </h4>
                        <p>fully customize Size
                            & Style <br/>of your choice</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<section class="banner-section mt-8 pt-md-6 pb-8">
    <div class="container">
        <div class="row">
            <div class="col-md-12 appear-animate"
                 data-animation-options="{'name': 'fadeInRightShorter', 'delay': '.3s'}">
                <div class="tab tab-nav-simple tab-nav-center tab-nav-boxed">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item text-dark">
                            <a class="nav-link  " href="#tab6-1">FAQS</a>
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
</section>
</div>

