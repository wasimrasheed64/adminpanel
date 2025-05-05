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
                    <div class="pin-wrapper" style="height: 1328.64px;">
                        <div class="sticky-sidebar" data-sticky-options="{'top': 10}"
                             style="border-bottom: 0px none rgb(102, 102, 102); width: 272.493px;">
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title ">All Categories<span class="toggle-btn"></span></h3>
                                <ul class="widget-body filter-items search-ul" style="height: 800px; overflow: scroll">
                                    @foreach($categories as $newCategory)
                                        <li>
                                            <a href="{{ route('dynamic.page',$newCategory->slug) }}">{{ $newCategory->name }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </aside>
            <div class="col-lg-9 main-content">
                <h4 class="title title-sm title-line title-underline"><span>{{ $category->name }}</span></h4>
                <div class="row cols-2 cols-sm-3 cols-md-3 cols-lg-3 product-wrapper">
                    @if($category->products->isEmpty())
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <strong>Sorry!</strong> No products found in this category.
                    </div>
                    @endif

                    @foreach($category->products as $product)
                        <div class="mb-1 col-lg-4 col-md-4 col-sm-5 ">
                            <div
                                class="product product-slideup-content product-image-gap  text-center product-variable mb-4 pb-2 ">
                                <figure class="product-media">
                                    <a href="{{ route('dynamic.page',$product->slug) }}">
                                        <img src="{{ $product->image_1 }}" alt="{{ $product->name }}" width="280"
                                             height="315">
                                    </a>
                                </figure>
                                <div class="product-details" style="transform: translateY(0px);">
                                    <div class="product-cat">
                                        <a href="{{ route('dynamic.page',[$product->category->slug]) }}">{{ $product->category->name }}</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="{{ route('dynamic.page',[$product->slug]) }}">{{ $product->name }}</a>
                                    </h3>

                                </div>
                                <div class="product-hide-details" style="transform: translateY(0px);">
                                    <div class="product-action">

                                        <a href="{{ route('dynamic.page',[$product->slug])}} "
                                           class="btn-product btn-cart"
                                           title="Select Options"><span>Request a Quote</span></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <hr>
                <div class="tab  tab-nav-boxed
                tab-outline2">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item text-dark btn-qoute border-radius">
                            <a class="nav-link active text-white" href="#tab6-2">Get Quick Qoute</a>
                        </li>
                        <li class="nav-item text-dark btn-qoute border-radius">
                            <a class="nav-link text-white " href="#tab6-3">Description</a>
                        </li>
                    </ul>
                    <div class="tab-content p-5">
                        <div class="tab-pane active text-dark bg-white border-qoute-form" id="tab6-2">
                            @include('partials.frontend.quickQoute')
                        </div>
                        <div class="tab-pane text-dark bg-white border-qoute-form" id="tab6-3">
                            <div class="row p-5">
                                <div class="col-sm-1">

                                </div>
                                <div class="col-lg-10" style="height:800px; overflow: scroll">
                                    {!! $category->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>

@endsection

@section('extra-scripts')
    <script src="{{ asset('vendor/sticky/sticky.min.js') }}"></script>
@endsection
