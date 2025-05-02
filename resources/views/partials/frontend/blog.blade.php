<section class="blog-section">
    <div class="container appear-animate"
         data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.3s'}">
        <div class="title-wrapper mt-1 mb-5 appear-animate"
             data-animation-options="{'name': 'fadeIn', 'duration': '.3s'}">
            <h4 class="title title-sm title-line title-underline"><span>Our Latest Blog</span></h4>
        </div>
        <div class="owl-carousel owl-theme owl-shadow-carousel row cols-lg-3 cols-sm-2 cols-1"
             data-owl-options="{
                            'items': 3,
                            'margin': 20,
                            'dots': true,
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
                                    'items': 3,
                                    'dots': false
                                }
                            }
                        }">
            @foreach($blogPosts as $post)
            <div class="post post-frame overlay-zoom">
                <figure class="post-media">
                    <a href="{{ route('blog.single',$post->slug) }}">
                        <img src="{{ $post->image }}" width="340" height="206" alt="post" />
                    </a>
                    <div class="post-calendar">
                        <span class="post-day">03</span>
                        <span class="post-month">DEC</span>
                    </div>
                </figure>
                <div class="post-details">
                    <h4 class="post-title"><a href="{{ route('blog.single',$post->slug) }}">{{ $post->title }}</a></h4>
                    <p class="post-content">
                        {{ $post->short_description }}
                    </p>
                    <a href="{{ route('blog.single',$post->slug) }}" class="btn btn-link btn-underline btn-primary">Read
                        More<i class="d-icon-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
