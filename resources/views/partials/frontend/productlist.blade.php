<section class="product-wrapper container mt-6 appear-animate fadeIn appear-animation-visible"
         style="animation-duration: 1.2s;">
    @if(isset($title))
        <h4 class="title title-sm mt-8 title-line title-underline"><span>{{ $title ?? " " }}</span></h4>
    @endif
    <div class="row">
        @foreach($products as $product)
            <div class="mb-1 col-lg-3 col-md-4 col-sm-5 ">
                <div class="product text-center cart-full">
                    <figure class="product-media">
                        <a href="{{ route('dynamic.page',$product->slug) }}" >
                            <img src="{{ $product->image_1 }}" alt="{{ $product->name }}" width="280" height="315">
                        </a>
                    </figure>
                    <div class="product-details" style="transform: translateY(0px);">
                        <div class="product-cat">
                            @if(isset($product->category->slug))
                            <a href="{{ route('dynamic.page',[$product->category->slug]) }}" >{{ $product->category->name }}</a>
                            @endif
                        </div>
                        <h3 class="product-name">
                            <a href="{{ route('dynamic.page',[$product->slug]) }}" >{{ $product->name }}</a>
                        </h3>

                    </div>
                    <div class="product-hide-details" style="transform: translateY(0px);">

                        <div class="product-action">

                            <a href="{{ route('dynamic.page',[$product->slug])}} " class="btn-product btn-cart" title="Select Options"><span>Request a Quote</span></a>

                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</section>
