@extends('frontend.layouts.master')

@section('title', $homePage->seo_title)
{{--@section('keywords', $homepage->seo_keyword)--}}
@section('description', $homePage->seo_description)

@section('content')
    <!-- Banner -->
    @include('partials.frontend.banner',[
    'banners' => $banners
    ])

    <!-- Main Category -->

  @include('partials.frontend.services',[
        'services' => $services
    ])

    <!-- company intro -->
    <section class="mt-8 pb-1">
        <div class="container">
            {!!  $homePage->company_intro !!}
        </div>
    </section>

    <!-- Services -->




    <!-- Product list -->
    @include('partials.frontend.productlist',[
        'products' => $featuredProducts,
        'title' => 'Featured Products'
    ])

    @include('partials.frontend.productSlider',[
         'products' => $productSlider,
         'title'  => "Box By Style"
    ])

    <div class="container">
    @include('partials.frontend.promotionBanner')
    </div>



    <div class="container">
    <!-- End of Product Section -->

        @include('partials.frontend.testimonials',[
            'testimonials' => $testimonials
            ])


    </div>


    <div class="container">
    <div class="row">
        <div  class="col-lg-12 col-md-12 p-120 " >
            <div class="home-page-description " id="companyIntro">
               {!! $homePage->description !!}
           </div>
        </div>
    </div>
    </div>
@endsection
