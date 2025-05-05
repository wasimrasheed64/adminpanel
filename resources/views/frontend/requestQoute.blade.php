@extends('frontend.layouts.master')

@section('title', 'Custom Quote')
@section('description', 'custom quote')

@section('content')
    <div class="page-header  align-items-start breadcrumb-resize-padding bg-light text-dark" style="color:white;padding-left:50px;">
        <div class="container">
        <h2 class="page-title  text-dark z-index-1">Custom Quote</h2>
        <ul class="breadcrumb  text-dark z-index-1">
            <li class="z-index-1"><a  class="active" href="{{ route('home') }}"><i class="d-icon-home"></i></a></li>
            <li class="delimiter">/</li>
            <li>Custom Qoute</li>
        </ul>
        </div>
    </div>
    <div class="page-content pb-10 mb-10">
        <div class="container">
            <div class="row mt-3">
                <div class="row form-primary-border mt-3">
                    <div class="col-lg-12 p-0">
                        <h4 class="title title-sm title-line title-underline"><span>Custom Quote Form</span></h4>
                        @include('partials.frontend.quickQoute')
                    </div>
                    <div class="col-lg-12">
                        <h4 class="title title-sm title-line title-underline mt-5"><span>FAQs</span></h4>
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
                </div>


        </div>
    </div>
@endsection

@section('extra-scripts')

@endsection

