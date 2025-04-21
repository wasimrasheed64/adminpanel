<section class="pb-8 service-list-section p-relative overflow-hidden">
    <div class="container">
        <div class="service-list service-list-lg appear-animate">
            <div class="owl-carousel owl-theme show-shadow" data-owl-options="{
                                'margin':40,
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
                                        'items':5
                                    }
                                }
                            }">

                @foreach($services as $service)
                  <div class="icon-box icon-box-side  border-orange icon-box-side-1 flex-column appear-animate"
                     data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'delay': '.2s'
                                }">
                    <i class="icon-box-icon {{ $service->description }} mr-0 wcb-service" style="font-size: 5rem;"></i>
                    <div class="icon-box-content mb-1 text-center">
                        <h4 class="icon-box-title mb-1 text-normal">{{ $service->heading }}</h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
