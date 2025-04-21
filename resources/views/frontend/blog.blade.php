@extends('frontend.layouts.master')

@section('title', 'blogs')
{{--@section('keywords', $homepage->seo_keyword)--}}
@section('description', 'blogs post')

@section('content')
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="d-icon-home"></i></a></li>
                <li> Blog Posts</li>
            </ul>
        </div>
    </nav>
    <div class="page-content pb-10 mb-10">
        <div class="container">

            <div class="posts grid row" data-grid-options="{
                        'layoutMode': 'fitRows'
                    }">
                @foreach($blogPosts as $post)
                <div class="grid-item col-sm-12 lifestyle shopping winter-sale">
                    <article class="post post-grid">
                        <figure class="post-media">
                            <a href="{{ route('blog.single',$post->slug) }}">
                                <img src="{{ $post->image }}" width="500" height="400" alt="post" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <h4 class="post-title">
                                <a href="{{ route('blog.single',$post->slug) }}">
                                {{ $post->title }}
                                </a>
                            </h4>
                            <p class="post-content">
                                {{ $post->short_description }}
                            </p>
                            <a href="{{ route('blog.single',$post->slug) }}" class="btn btn-link btn-underline btn-primary">Read
                                more<i class="d-icon-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            <ul class="pagination justify-content-center mt-5">
                <li class="page-item disabled">
                    <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
                       aria-disabled="true">
                        <i class="d-icon-arrow-left"></i>Prev
                    </a>
                </li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item">
                    <a class="page-link page-link-next" href="#" aria-label="Next">
                        Next<i class="d-icon-arrow-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection

