<section class="product-wrapper container  pt-5 mb-8">
    <h4 class="title title-sm  title-line title-underline"><span>{{ $title ?? " " }}</span></h4>
    <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2" data-owl-options="{
                                'nav': false,
                                'dots': false,
                                'margin': 20,
                                'autoplay': false,
                                'responsive': {
                                    '0': {
                                        'items': 2
                                    },
                                    '576': {
                                        'items': 2
                                    },
                                    '768': {
                                        'items': 3
                                    },
                                    '992': {
                                        'items': 4
                                    }
                                }
                            }">
        @foreach($products as $product)

            <div class="product text-center cart-full">
                    <figure class="product-media">
                        <a href="{{ route('dynamic.page',$product->slug) }}" >
                            <img src="{{ $product->image_1 }}" alt="{{ $product->name }}" width="280" height="315">
                        </a>
                    </figure>
                    <div class="product-details" style="transform: translateY(0px);">
                        <div class="product-cat">
                            <a href="{{ route('dynamic.page',[$product->category->slug]) }}" >{{ $product->category->name }}</a>
                        </div>
                        <h3 class="product-name">
                            <a href="{{ route('dynamic.page',[$product->slug]) }}" >{{ $product->name }}</a>
                        </h3>

                    </div>
                    <div class="product-hide-details" style="transform: translateY(0px);">

                        <div class="product-action">

                            <a href="{{ route('dynamic.page',[$product->slug])}} " class="btn-product btn-cart" title="Select Options"><span>Request a Qoute</span></a>

                        </div>
                    </div>
                        </div>
        @endforeach
    </div>

</section>





