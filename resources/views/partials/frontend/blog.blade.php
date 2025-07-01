<div class="parallax-section2 p-relative pt-1">
    <div class="shape-divider2">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px" viewBox="0 57 100 4.4" enable-background="new 0 57 100 4.4"
             xml:space="preserve">
                            <path fill="#FFFFFF" d="M0,60.7c0,0,8.7-2.7,16.1-3c7.4-0.3,16.6,3.9,27.9,2.8c8.7-0.8,9.5-2.9,23.4-3.5c7.8-0.3,17.4,3.2,23.7,4
                                c6.3,0.8,9-0.3,9-0.3V57H0V60.7z"></path>
                        </svg>
    </div>
    <div class="parallax" style="background-color: #D7E9E9"
         data-parallax-options="{'speed':10,'parallaxHeight':'110%','offset':60}"
         data-image-src="">
    </div>
    <div class="shape-divider4">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px" width="1920px" height="333.685px" viewBox="0 0 1920 333.685"
             enable-background="new 0 0 1920 333.685" xml:space="preserve" preserveAspectRatio="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M1920,221.322c-99.207,71.121-408.589,227.236-984.515-29.646
                                c-593.735-264.827-935.792,0-935.792,0V59.411H1920V221.322z" style="opacity: .3;">
                            </path>
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M1069.111,144.92C437.355,449.328,103.156,261.719,0,180.615
                                V-1.944L1919.902,0.02v144.9C1919.902,144.92,1654.825-137.301,1069.111,144.92z"
                  style="opacity: .3;"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M-1,99.586l766.898-0.277c0,0-347.053,156.721-766.898,199.021
                                V99.586z" style="opacity: .3;"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M1920,325.707c-163.159-2.652-337.318-38.631-509.596-131.365
                                c-160.974-86.652-317.795-63.449-422.109-59.617V76.862L1920,77.566V325.707z"
                  style="opacity: .3;"></path>
                        </svg>
    </div>
</div>
<section class="blog-section appear-animate"
         data-animation-options="{'name': 'fadeInRightShorter', 'delay': '.5s'}">
    <div class="title-wrapper mb-5">
        <div class="container">
            <h2 class="title">From Our Blog</h2>
            <span class="title-info">Share your latest posts or best articles will post here</span>
        </div>
    </div>
    <div class="container">
        <div class="owl-carousel owl-theme owl-shadow-carousel row cols-lg-3 cols-sm-2 cols-1 pb-10"
             data-owl-options="{
                            'items': 3,
                            'margin': 20,
                            'dots': false,
                            'loop': false,
                            'nav': false,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '576': {
                                    'items': 2
                                },
                                '992': {
                                    'items': 3
                                }
                            }
                        }">
            @foreach($blogPosts as $post)
            <div class="post post-frame overlay-zoom">
                <figure class="post-media">
                    <a href="{{ route('blog.single',$post->slug) }}">
                        <img src="{{$post->image}}" width="340" height="206"
                             alt="{{$post->title}}" />
                    </a>
                    <div class="post-calendar">
                        <span class="post-day">{{ \Carbon\Carbon::parse($post->created_at)->day }}</span>
                        <span class="post-day">{{ \Carbon\Carbon::parse($post->created_at)->month }}</span>
                    </div>
                </figure>
                <div class="post-details">
                    <h4 class="post-title"><a href="{{ route('blog.single',$post->slug) }}">{{ $post->title }}</a>
                    </h4>
                    <p class="post-content">{!! $post->short_description !!}</p>
                    <a href="{{ route('blog.single',$post->slug) }}" class="btn btn-link btn-underline btn-primary">Read
                        More<i class="d-icon-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('dynamic.page', 'blog') }}" class="btn btn-primary btn-rounded">View all<i
                class="d-icon-arrow-right"></i></a>
    </div>
</section>
