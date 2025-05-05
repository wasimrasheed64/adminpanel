@extends('frontend.layouts.master')

@section('title', 'Contact us')
{{--@section('keywords', $homepage->seo_keyword)--}}
@section('description', 'Contact us')

@section('content')
    <div class="page-header align-items-start breadcrumb-resize-padding bg-light" style="color:white;padding-left:50px;">
        <div class="container">
        <h2 class="page-title z-index-1">Contact Us</h2>
        <ul class="breadcrumb z-index-1">
            <li class="z-index-1"><a  class="active" href="{{ route('home') }}"><i class="d-icon-home"></i></a></li>
            <li class="delimiter">/</li>
            <li>Contact Us</li>
        </ul>
        </div>
    </div>
    <div class="page-content pb-10 mb-10">
        <div class="container">
            <div class="row mt-3">
                <div class="row  mt-3">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-9">
                        <form class="pl-lg-2" action="#">
                            <h4 class="ls-m font-weight-bold">Let’s Connect</h4>
{{--                            <p>Your email address will not be published. Required fields are--}}
{{--                                marked *</p>--}}
                            <div class="row mb-2">

                                <div class="col-md-6 mb-4">
                                    <input class="form-control" type="text" placeholder="Name *" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input class="form-control" type="email" placeholder="Email *" required>
                                </div>
                                <div class="col-12 mb-4">
                                                <textarea class="form-control" required
                                                          placeholder="Comment*"></textarea>
                                </div>

                            </div>
                            <button class="btn btn-dark btn-rounded">Submit<i
                                    class="d-icon-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('extra-scripts')
    <script>
        function uploadFile() {
            // let button = document.querySelector("#IDofItem");
            document.getElementById("uploadArtWork").click();
                // $('#uploadArtWork').click();
        }
    </script>
@endsection

