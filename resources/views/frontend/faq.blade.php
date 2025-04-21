@extends('frontend.layouts.master')

@section('title', 'Faqs')
{{--@section('keywords', $homepage->seo_keyword)--}}
@section('description', 'faqs')

@section('content')
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="d-icon-home"></i></a></li>
                <li> Faqs </li>
            </ul>
        </div>
    </nav>
    <div class="page-content pb-10 mb-10">
        <div class="container">
            <div class="row mt-3">
            <div class="accordion accordion-simple code-content">
                @foreach($faqs as $faq)
                <div class="card border-no">
                    <div class="card-header">
                        <a href="#collapse{{$faq->id}}" class="{{ $loop->iteration == 1 ?  'collapse' :'expand'  }}">{{ $faq->question }}</a>
                    </div>
                    <div id="collapse{{$faq->id }}" class="card-body {{ $loop->iteration == 1 ? 'expanded' : 'collapsed' }}">
                        <p class="mb-0">{{ $faq->answer }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            </div>

        </div>
    </div>
@endsection

