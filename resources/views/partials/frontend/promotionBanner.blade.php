<div class="banners-group masonry-section mt-8">
    <div class="container">
        <div class="row grid gutter-md">
            @foreach(App\Models\Promotion::where('page',1)->get() as $index => $promotion)
            <div class="grid-item col-md-{{ $promotion->class }} height-x{{$promotion->home_page_height}} appear-animate" data-animation-options="{
                                'name': 'fadeIn',
                                'delay': '.5s'
                            }">
                <div class="banner">
                    <a href="{{$promotion->link}}">
                        <figure>
                            <img src="{{ $promotion->image }}" alt="promotion" width="580"
                                 height="320" style="background-color: #E1EAEF" />
                        </figure>
                    </a>
                </div>
            </div>
            @endforeach
            <div class="col-1 grid-space"></div>
        </div>
    </div>
</div>
