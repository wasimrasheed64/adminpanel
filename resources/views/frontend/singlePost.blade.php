@extends('frontend.layouts.master')

@section('title',$post->title )
{{--@section('keywords', $homepage->seo_keyword)--}}
@section('description',$post->title)

@section('content')
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="d-icon-home"></i></a></li>
                <li><a href="{{ route('dynamic.page','blog') }}" class="active">Blog</a></li>
                <li>{{ $post->title }}</li>
            </ul>
        </div>
    </nav>

    <div class="page-content with-sidebar">
        <div class="container">
            <div class="row gutter-lg">
                <div class="col-lg-1">

                </div>
                <div class="col-lg-9 ">
                    <article class="post-single">
                        <figure class="post-media">
                            <a href="#">
                                <img src="{{ $post->image }}" width="880" height="450" alt="post" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <div class="post-meta">
                                by <a href="#" class="post-author">{{ $post->user->name }}</a>
                            </div>
                            <h4 class="post-title"><a href="#">{{ $post->title }}</a></h4>
                            <div class="post-body mb-7">
                              {!!  $post->description !!}
                            </div>


                        </div>
                    </article>
                    <nav class="page-nav">
                        @if(!isset($post->previous->id))
                        <a class="pager-link pager-link-prev disabled" href="#">
                            Previous Post
                            <span class="pager-link-title">First Post</span>
                        </a>
                        @else
                            <a class="pager-link pager-link-prev disabled" href="{{ route('blog.single',$post->previous->slug)}}">
                                Previous Post
                                <span class="pager-link-title">{{ $post->previous->title }}</span>
                            </a>
                        @endif
                        @if(!isset($post->next->id))
                            <a class="disabled pager-link pager-link-next" href="#">
                                Go To Post
                                <span class="pager-link-title">Last Post</span>
                            </a>
                        @else
                                <a class="pager-link pager-link-next" href="{{ route('blog.single',$post->next->slug)}}">
                                    Go To Post
                                    <span class="pager-link-title">{{ $post->next->title }}</span>
                                </a>
                        @endif
                    </nav>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('extra-scripts')
    <script src="{{ asset('vendor/sticky/sticky.min.js') }}"></script>
@endsection
