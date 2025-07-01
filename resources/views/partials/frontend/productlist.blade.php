<section class="product-wrapper container pb-2 appear-animate fadeIn appear-animation-visible"
         style="animation-duration: 1.2s;">
    @if(isset($title))
        <div class="title-wrapper">
            <div class="container">
                <h2 class="title">{{ $title }}</h2>
                @if(isset($description))
                <span class="title-info">{{$description}}</span>
                @endif
            </div>
        </div>
    @endif
    <div class="row">
        @foreach($products as $product)
            <div class="mb-1 col-lg-3 col-md-4 col-sm-5 ">
                <div class="product product-slideup-content product-image-gap  text-center product-variable mb-4 pb-2 ">
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

                            <a href="{{ route('dynamic.page',[$product->slug])}} " class="btn-product " title="Quick View"><span>Request a Qoute</span></a>

                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</section>
