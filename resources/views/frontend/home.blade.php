@extends('frontend.layouts.master')

@section('title', $homePage->seo_title)
{{--@section('keywords', $homepage->seo_keyword)--}}
@section('description', $homePage->seo_description)

@section('content')
    <!-- Banner -->
    @include('partials.frontend.banner',[
    'banners' => $banners
    ])
    @include('partials.frontend.promotionBanner')

    <!-- company intro -->

    <section class="mt-8 pt-5 appear-animate"
             data-animation-options="{'name': 'fadeIn', 'duration': '1s', 'delay': '.4s'}">
            <div class="container">
                {!!  $homePage->company_intro !!}
            </div>
    </section>

    <!-- Services -->




    <!-- Product list -->
    @include('partials.frontend.productlist',[
        'products' => $featuredProducts,
    ])

    <!-- Main Category -->

    @include('partials.frontend.mainCategory')

    @include('partials.frontend.services',[
      'services' => $services,
      'description' => $homePage->description,
      'short_description' => $homePage->short_description,
  ])

{{--    @include('partials.frontend.testimonials',[--}}
{{--            'testimonials' => $testimonials--}}
{{--            ])--}}

    @include('partials.frontend.productlist',[
      'products' => $productSlider,
       'title'  => "Box By Style",
       'description'  => "Discover curated product boxes tailored to your style."
  ])

    @include('partials.frontend.blog')

    <section class="mt-8 pt-4" style="background-color: #D7E9E9">
        <div class="banner container cta-simple">
            <div class="banner-content  d-lg-flex align-items-center justify-content-between">
                <div class="banner-header pr-lg-7 pb-lg-0 pb-4 mb-lg-0 mb-6">
                    <h3 class="banner-title font-weight-bold ls-s text-uppercase">Get in Touch</h3>
                    <h4 class="banner-subtitle font-weight-normal ls-s text-body">Order and save</h4>
                </div>
                <div class="banner-text mb-lg-0 mb-4 mr-lg-4 pl-lg-6 pr-lg-0 pl-2 pr-2">
                    <a href="{{route('custom.quote')}}" class="btn btn-primary btn-ellipse">Request A Quote<i
                            class="d-icon-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </section>

@endsection
