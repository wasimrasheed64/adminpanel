@extends('frontend.layouts.master')

@section('title', 'Custom Quote')
{{--@section('keywords', $homepage->seo_keyword)--}}
@section('description', 'custom quote')

@section('content')
    <div class="page-header align-items-start breadcrumb-resize-padding bg-dark" style="color:white;padding-left:50px;">
        <h2 class="page-title z-index-1">Custom Qoute</h2>
        <ul class="breadcrumb z-index-1">
            <li class="z-index-1"><a  class="active" href="{{ route('home') }}"><i class="d-icon-home"></i></a></li>
            <li class="delimiter">/</li>
            <li>Custom Qoute</li>
        </ul>
    </div>
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="d-icon-home"></i></a></li>
                <li> Custom Quote </li>
            </ul>
        </div>
    </nav>
    <div class="page-content pb-10 mb-10">
        <div class="container">
            <div class="row mt-3">
                <div class="row form-primary-border mt-3">
                    <div class="col-lg-12 p-0">
                        <button class="btn btn-primary w-100">REQUEST A QUOTE</button>
                    </div>
                    <form action="" method="post" accept-charset="utf-8" class="form-horizontal form-input-box">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group"><span class="icon-case width-15"><i class="fa fa-fa fa-user"></i></span> <input type="text" placeholder="*Name" name="name" value="" class="form-control" id="name" required="">
                                    <span class="text-danger"></span></div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="form-group"><span class="icon-case width-15"><i class="fa fa-phone"></i></span> <input placeholder="Phone Number" type="text" name="phone" value="" class="form-control" id="phone" required=""> <span class="text-danger"></span></div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6 ">
                                <div class="form-group"><span class="icon-case width-15"><i class="fa fa-envelope"></i></span> <input type="text" placeholder="*Email" name="email2" value="" class="form-control" id="email2" required=""> <span class="text-danger"></span></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"><span class="icon-case width-15"><i class="fas fa-cart-arrow-down"></i></span>
                                    <select name="stock" class="form-control" required="">
                                        <option value="">Select A Product</option>
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 padding-left-17">
                                <div class="form-group"><span class="icon-case width-15"><i class="fa fa-sticky-note"></i></span>
                                    <select name="stock" class="form-control" required="">
                                        <option value="">Stock</option>
                                        <option value="12pt Cardboard Stock">12pt Cardboard Stock</option>
                                        <option value="14pt Cardboard Stock">14pt Cardboard Stock</option>
                                        <option value="16pt Cardboard Stock">16pt Cardboard Stock</option>
                                        <option value="18pt Cardboard Stock">18pt Cardboard Stock</option>
                                        <option value="20pt Cardboard Stock">20pt Cardboard Stock</option>
                                        <option value="22pt Cardboard Stock">22pt Cardboard Stock</option>
                                        <option value="24pt Cardboard Stock">24pt Cardboard Stock</option>
                                        <option value="Kraft Stock">Kraft Stock</option>
                                        <option value="Recycled BuxBoard">Recycled BuxBoard</option>
                                        <option value="Corrugated Stock">Corrugated Stock</option>
                                        <option value="No Printing Required">No Printing Required</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><span class="icon-case width-15"><i class="fa fa-paint-brush"></i></span> <select name="color" class="form-control" required="">
                                        <option value="">Select Color</option>
                                        <option value="None">None</option>
                                        <option value="1 Colour">1 Colour</option>
                                        <option value="2 Colour">2 Colour</option>
                                        <option value="3 Colour">3 Colour</option>
                                        <option value="4 Colour">4 Colour</option>
                                        <option value="4/1 Colour">4/1 Colour</option>
                                        <option value="4/2 Colour">4/2 Colour</option>
                                        <option value="4/3 Colour">4/3 Colour</option>
                                        <option value="4/4 Colour">4/4 Colour</option>
                                    </select> <span class="text-danger"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"><span class="icon-case width-15"><i class="fa fa-compress "></i></span> <input type="text" placeholder="Size Length" name="size_length" value="" class="form-control" id="size_length" required="">
                                    <span class="text-danger"></span></div>
                            </div>
                            <div class="col-md-6 padding-left-17">
                                <div class="form-group"><span class="icon-case width-15"><i class="fas fa-grip-lines"></i></span> <input placeholder="Size Width" type="text" name="size_width" value="" class="form-control" id="size_width" required=""> <span class="text-danger"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"><span class="icon-case width-15"><i class="fas fa-grip-lines-vertical"></i></span> <input placeholder="Size Height" type="text" name="size_height" value="" class="form-control" id="size_height" required=""> <span class="text-danger"></span></div>
                            </div>
                            <div class="col-md-6 padding-left-17">
                                <div class="form-group"><span class="icon-case width-15"><i class="fa fa-calculator"></i></span> <select name="size_unit" class="form-control" required="">
                                        <option value="">Select Size Unit</option>
                                        <option value="Inches">Inches</option>
                                        <option value="cm">cm</option>
                                        <option value="mm">mm</option>
                                    </select> <span class="text-danger"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"><span class="icon-case width-15"><i class="fa fa-cubes"></i></span> <input placeholder="Qty1" type="text" name="size_qty1" value="" class="form-control" id="size_qty1" required=""> <span class="text-danger"></span></div>
                            </div>
                            <div class="col-md-6 padding-left-17">
                                <div class="form-group"><span class="icon-case width-15"><i class="fa fa-cubes"></i></span>
                                    <input placeholder="QTY2" type="text" name="size_qty2" value="" class="form-control"
                                           id="size_qty2" required=""> <span class="text-danger"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="icon-case width-15">
                                        <i class="fas fa-file-upload "></i>
                                    </span>
                                    <div onclick="uploadFile()" class="pointer-cursour custom-upload-artwork">
                                        Upload Your ArtWork
                                    <input id="uploadArtWork" class="d-none" type="file"  required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group"><span class="icon-case width-15 min-height"><i class="fa fa-comments"></i></span>
                                <textarea placeholder="Comment" type="text" name="comments" class="form-control textarea" id="comments"
                                          style="width: 88%!important;"
                                          required=""> </textarea>
                                <span class="text-danger"></span></div>
                        </div>
                        <div class="form-group">
                            <div class="text-center col-sm-12">
                                <button type="submit" class="btn btn-product btn-primary pl-2 pr-2 w-100 pt-2 pb-2 mt-2 mb-2 btn-cart"> Get Quote
                                </button>
                            </div>
                        </div>
                    </form>
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

