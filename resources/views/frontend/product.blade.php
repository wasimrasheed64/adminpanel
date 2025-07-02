@extends('frontend.layouts.master')

@section('extra-head')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/photoswipe/photoswipe.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/photoswipe/default-skin/default-skin.min.css') }}">
@endsection


@section('title', $product->seo_title)
@section('description', $product->seo_description)

@section('content')
    <div class="page-header align-items-start breadcrumb-resize-padding bg-light mb-10" style="background-image:url({{$promotion ? $promotion->image : ''}});color:white;padding-left:50px;">
        <div class="container">
            <h2 class="page-title z-index-1">{{ $product->name }}</h2>
            <ul class="breadcrumb z-index-1">

                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="delimiter">/</li>
                                    <li>
                                        <a href="{{ route('dynamic.page',$product->category->slug) }}">{{ ucwords($product->category->name) }}</a>
                                    </li>
                <li class="delimiter">/</li>
                                    <li><a class="active"
                                           href="{{ route('dynamic.page',$product->slug) }}">{{ ucwords($product->name) }}</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="col-lg-12">
            <div class="product product-single row">
            <div class="col-md-6">
                <div class="product-gallery product-gallery-sticky mb-lg-9 mb-4">
                    <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1">
                        <figure class="product-image">
                            <img src="{{ $product->image_1 }}"
                                 data-zoom-image="{{ $product->image_1 }}"
                                 alt="{{ $product->name }}" width="600" height="675">
                        </figure>
                        <figure class="product-image">
                            <img src="{{ $product->image_2 }}"
                                 data-zoom-image="{{ $product->image_2 }}"
                                 alt="{{ $product->name }}" width="600" height="675">
                        </figure>
                        <figure class="product-image">
                            <img src="{{ $product->image_3 }}"
                                 data-zoom-image="{{ $product->image_3 }}"
                                 alt="{{ $product->name }}" width="600" height="675">
                        </figure>
                        <figure class="product-image">
                            <img src="{{ $product->image_4 }}"
                                 data-zoom-image="{{ $product->image_4 }}"
                                 alt="{{ $product->name }}" width="600" height="675">
                        </figure>
                    </div>
                    <div class="product-thumbs-wrap">
                        <div class="product-thumbs">
                            <div class="product-thumb active">
                                <img src="{{ $product->image_1 }}" alt="{{ $product->name }}"
                                     width="150" height="169">
                            </div>
                            <div class="product-thumb">
                                <img src="{{ $product->image_2 }}" alt="{{ $product->name }}"
                                     width="150" height="169">
                            </div>
                            <div class="product-thumb">
                                <img src="{{ $product->image_3 }}" alt="{{ $product->name }}"
                                     width="150" height="169">
                            </div>
                            <div class="product-thumb">
                                <img src="{{ $product->image_4 }}" alt="{{ $product->name }}"
                                     width="150" height="169">
                            </div>
                        </div>
                        <button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
                        <button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-details">
                    <div class="product-navigation ls-normal">
                        <ul class="breadcrumb breadcrumb-lg">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('dynamic.page',$product->category->slug) }}">{{ ucwords($product->category->name) }}</a></li>
                            <li><a href="{{ route('dynamic.page',$product->slug) }}">{{ ucwords($product->name) }}</a></li>
                        </ul>
                    </div>

                    <h1 class="product-name">{{ ucwords($product->name) }}</h1>
                    <p class="product-short-desc">{!! $product->short_description !!}</p>

                    <hr class="product-divider">
                    <div class="row p-2">
                        <div class="col-lg-12 ">
                            <h2 class="title title-sm mt-5 mb-3 text-primary">Get Free Quote</h2>
                            <div class="form-group quoteForm">
                                <div class="row">
                                    <div class="col-sm-8 col-md-8 col-xs-8"><label for="Size">Size For
                                            Custom Software Boxes (in inches):</label></div>
                                    <div class="col-sm-4 col-md-4 col-xs-4"><label for="Color"> Quantity:</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 col-md-8 col-xs-8">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 col-xs-4"><input type="text"
                                                                                           class="input-min-height bg-white form-control"
                                                                                           id="length" name="length"
                                                                                           placeholder="Length"
                                                                                           required=""></div>
                                            <div class="col-sm-4 col-md-4 col-xs-4"><input type="text"
                                                                                           class="input-min-height bg-white form-control"
                                                                                           id="width" name="width"
                                                                                           placeholder="Width"
                                                                                           required=""></div>
                                            <div class="col-sm-4 col-md-4 col-xs-4"><input type="text"
                                                                                           class="input-min-height bg-white form-control"
                                                                                           id="height" name="height"
                                                                                           placeholder="Height"
                                                                                           required=""></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text"
                                               class="input-min-height bg-white form-control"
                                               id="Quantity" name="Quantity"
                                               placeholder="Quantity"
                                               required="">
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4"><label for="email">Stock
                                            Thickness:</label><select id="stock" name="stock"
                                                                      class="input-min-height bg-white form-control">
                                            <option value="">--Please Select--</option>
                                            <option>14Pt SBS</option>
                                            <option>18pt SBS</option>
                                            <option>24pt SBS</option>
                                            <option>Brown Kraft</option>
                                            <option>White Kraft</option>
                                            <option>Textured Linen</option>
                                            <option>White Corrugated</option>
                                            <option>Brown Corrugated</option>
                                            <option>Thick Chipboard</option>
                                        </select></div>
                                    <div class="col-md-4"><label for="email">Coating
                                            Option:</label><select id="coating" name="coating"
                                                                   class="input-min-height bg-white form-control">
                                            <option value="">--Please Select--</option>
                                            <option>No Coating</option>
                                            <option>High Gloss UV / Lamination</option>
                                            <option>Matte Lamination</option>
                                            <option>Spot UV (Matte + Gloss UV)</option>
                                            <option>Aqueous Coating</option>
                                            <option>Semi Gloss Finish</option>
                                        </select></div>
                                    <div class="col-md-4"><label for="usr">Color Options</label>
                                        <select id="printoption"
                                                name="printoption"
                                                class="input-min-height bg-white form-control">
                                            <option value="">--Please Select--</option>
                                            <option>No Printing</option>
                                            <option>1 Color Printing</option>
                                            <option>2 Color Printing</option>
                                            <option>3 Color Printing</option>
                                            <option>Full Color Printing</option>
                                            <option>PMS Color Printing</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4"><label for="usr">Full Name:</label><input
                                            type="text" class="input-min-height bg-white form-control"
                                            placeholder="Enter Full Name" id="name" name="name"></div>
                                    <div class="col-md-4"><label for="usr"> Email :</label><input
                                            type="text" class="input-min-height bg-white form-control"
                                            placeholder="xyz@company.com" id="email"
                                            name="email"></div>
                                    <div class="col-md-4"><label for="usr">Phone Number:</label><input
                                            type="text" class="input-min-height bg-white form-control"
                                            placeholder="Enter Phone Number" id="phone" name="phone">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12"><label for="usr">Notes /
                                            Details:</label><textarea class="input-min-height bg-white form-control" rows="5"
                                                                      id="notes" name="notes"></textarea></div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button class=" w-100 btn btn-primary btn-product">Submit Request</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab tab-nav-simple product-tabs mt-5">
            <ul class="nav nav-tabs justify-content-start" role="tablist">
                <li class="nav-item custom-nav-tab">
                    <a class="nav-link  active" href="#product-tab-specification">Specification</a>
                </li>
                <li class="nav-item custom-nav-tab">
                    <a class="nav-link " href="#product-tab-description">Description</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active in" id="product-tab-specification">
                    <div class="row mt-5">
                        @include('partials.frontend.specificationTable',['productName' => $product->name])
                    </div>
                </div>
                <div class="tab-pane" id="product-tab-description">
                    {!!  $product->description !!}
                </div>

            </div>
        </div>
    </div>
    </div>
    @include('partials.frontend.productSlider',[
      'products' => $productSlider,
       'title'  => "Related Products"
    ])


@endsection

@section('extra-scripts')
    <script src="{{ asset('vendor/sticky/sticky.min.js') }}"></script>
    <script src="{{ asset('vendor/elevatezoom/jquery.elevatezoom.min.js') }}"></script>
    <script src="{{ asset('vendor/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
@endsection
