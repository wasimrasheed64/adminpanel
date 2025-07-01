<section class="mt-8 appear-animate"
         data-animation-options="{'name': 'fadeInRightShorter', 'delay': '.5s'}">
    <div class="title-wrapper mb-5">
        <div class="container">
            <h2 class="title">Top Categories</h2>
            <span class="title-info">Explore our main product categories.</span>
        </div>
    </div>
    <div class="container">
        <div class="owl-carousel owl-theme owl-shadow-carousel row cols-lg-3 cols-sm-2 cols-1 pb-10"
             data-owl-options="{
                            'items': 3,
                            'margin': 20,
                            'dots': false,
                            'loop': false,
                            'nav': false,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '576': {
                                    'items': 2
                                },
                                '992': {
                                    'items': 3
                                }
                            }
                        }">
            @foreach($mainCategories as $mainCategory)
            <div class="post post-frame overlay-zoom">
                <figure class="post-media">
                    <a href="{{ route('dynamic.page', [$mainCategory->categories()->first()->slug ?? $mainCategory->slug])}}">
                        <img src="{{ $mainCategory->image }}" width="340" height="206"
                             alt="{{ $mainCategory->name }}" />
                    </a>
                </figure>
                <div class="post-details">
                    <h4 class="post-title">{{ $mainCategory->name }}
                    </h4>
                    <a href="{{ route('dynamic.page', [$mainCategory->categories()->first()->slug ?? $mainCategory->slug])}}" class="btn btn-link btn-underline btn-primary">View Products<i class="d-icon-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
