@extends('frontend.layouts.master')

@section('title', $homePage->seo_title)
{{--@section('keywords', $homepage->seo_keyword)--}}
@section('description', $homePage->seo_description)

@section('content')
    <!-- Banner -->
    @include('partials.frontend.banner',[
    'banners' => $banners
    ])

    @include('partials.frontend.services-block')
    <!-- Main Category -->



    <!-- company intro -->
    <section class="mt-10 pb-1">
        <div class="container">
            {!!  $homePage->company_intro !!}
        </div>
    </section>

    <!-- Services -->




    <!-- Product list -->
    @include('partials.frontend.productlist',[
        'products' => $featuredProducts,
    ])

    @include('partials.frontend.promotionBanner')


    @include('partials.frontend.productlist',[
       'products' => $productSlider,
        'title'  => "Box By Style"
   ])



    <div class="container">
    <!-- End of Product Section -->
        @include('partials.frontend.testimonials',[
            'testimonials' => $testimonials
            ])

    </div>
    @include('partials.frontend.intro',[
    'description' => $homePage->description
])
    @include('partials.frontend.services',[
     'services' => $services,
     'description' => $homePage->description,
 ])

    @include('partials.frontend.blog')


@endsection
