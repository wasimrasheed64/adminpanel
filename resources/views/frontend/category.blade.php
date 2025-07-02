@extends('frontend.layouts.master')


@section('title', $category->seo_title)
{{--@section('keywords', $homepage->seo_keyword)--}}
@section('description', $category->seo_description)

@section('content')
    @include('partials.frontend.pageHeader',[
            'image'=> $category->banner_image,
            'main_category' => $category->mainCategory->name,
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
{{--                <div class="title-wrapper">--}}
{{--                    <div class="container">--}}
{{--                        <h2 class="title"> {{ $category->name }}</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="row cols-2 cols-sm-3 cols-md-3 cols-lg-3 product-wrapper">
                    @if($category->products->isEmpty())
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <span class="title-info"><strong>Sorry!</strong> No products found in this category.</span>
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
                                           class="btn-product " title="Quick View"><span>Quick View</span></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <hr>
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
                                                    {!! $category->description !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
{{--                <div class="tab tab-nav-simple tab-nav-center tab-nav-boxed">--}}
{{--                    <ul class="nav nav-tabs" role="tablist">--}}
{{--                        <li class="nav-item text-dark btn-qoute--}}
{{--                         border-radius">--}}
{{--                            <a class="nav-link active text-white" href="#tab6-2">Get Quick Qoute</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item text-dark btn-qoute border-radius">--}}
{{--                            <a class="nav-link text-white " href="#tab6-3">Description</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <div class="tab-content p-5">--}}
{{--                        <div class="tab-pane active text-dark bg-white border-qoute-form" id="tab6-2">--}}
{{--                            @include('partials.frontend.quickQoute')--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane text-dark bg-white border-qoute-form" id="tab6-3">--}}
{{--                            <div class="row p-5">--}}
{{--                                <div class="col-sm-1">--}}

{{--                                </div>--}}
{{--                                <div class="col-lg-10" style="height:800px; overflow: scroll">--}}
{{--                                    {!! $category->description !!}--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

        </div>


    </div>

@endsection

@section('extra-scripts')
    <script src="{{ asset('vendor/sticky/sticky.min.js') }}"></script>
@endsection
