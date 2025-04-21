@extends('frontend.layouts.master')



@section('title', $category->seo_title)
{{--@section('keywords', $homepage->seo_keyword)--}}
@section('description', $category->seo_description)

@section('content')
    @include('partials.frontend.pageHeader',[
            'image'=> $category->banner_image,
            'title' => $category->name
        ])

    <div class="container ">


        <div class="row mt-5 gutter-lg main-content-wrap">
        <aside class="col-lg-3 sidebar sidebar-fixed sidebar-toggle-remain shop-sidebar sticky-sidebar-wrapper">
							<div class="sidebar-overlay"></div>
							<a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
							<a href="#" class="sidebar-toggle">
								<i class="fas fa-chevron-right"></i>
							</a>
							<div class="sidebar-content">
								<div class="pin-wrapper" style="height: 1328.64px;"><div class="sticky-sidebar" data-sticky-options="{'top': 10}" style="border-bottom: 0px none rgb(102, 102, 102); width: 272.493px;">
									<div class="widget widget-collapsible">
										<h3 class="widget-title ">All Categories<span class="toggle-btn"></span></h3>
										<ul class="widget-body filter-items search-ul" >
										@foreach($categories as $newCategory)
                                        <li><a href="{{ route('dynamic.page',$newCategory->slug) }}">{{ $newCategory->name }}</a></li>
                                        @endforeach

										</ul>
									</div>

								</div></div>
							</div>
						</aside>
                <div class="col-lg-9 main-content">
                    <div class="row cols-2 cols-sm-3 cols-md-3 cols-lg-3 product-wrapper">
                        @foreach($category->products as $product)
                              <div class="mb-1 col-lg-4 col-md-4 col-sm-5 ">
                    <div class="product product-slideup-content product-image-gap  text-center product-variable mb-4 pb-2 ">
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
                    </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div  class="col-lg-12  col-md-12 " >
                            <h4 class="title title-sm mt-8 title-line title-underline"><span>{{ $category->name }}</span></h4>
                            <div class="description" id="shortDescription">
                                {!! $category->short_description !!}
                                <div class="col-lg-2 col-md-2 mt-1">
                                    <a class="btn-product pt-1 pb-1 btn-cart" onclick="showDescription()">Read more</a>
                                </div>
                            </div>
                            <div class="description d-none" id="longDescription">
                                {!! $category->description !!}
                                <div class="col-lg-2 col-md-2 mt-1">
                                    <a class="btn-product pt-1 pb-1 btn-cart" onclick="hideDescription()">Read Less</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- <aside
                class="col-lg-3 sidebar sidebar-fixed sidebar-toggle-remain shop-sidebar sticky-sidebar-wrapper">
                <div class="sidebar-overlay"></div>

                <div class="sidebar-content mt-2">
                    <div class="sticky-sidebar" data-sticky-options="{'top': 15}">
                        <div class="row form-primary-border mt-3">
                            <div class="col-lg-12 p-0">
                                <button class="btn btn-primary w-100">REQUEST A QUOTE</button>
                            </div>


                            @include('partials.frontend.quickQoute',[
                                    'products' => $category->products
                                ])
                        </div>
                    </div>
                </div>
            </aside> -->
        </div>




    </div>


@endsection

@section('extra-scripts')
    <script src="{{ asset('vendor/sticky/sticky.min.js') }}"></script>
    <script>
        function showDescription()
        {
            $('#shortDescription').addClass('d-none');
            $('#longDescription').removeClass('d-none');
        }
        function hideDescription()
        {
            $('#shortDescription').removeClass('d-none');
            $('#longDescription').addClass('d-none');
            window.scrollTo(0, 2000);
        }
    </script>
@endsection
