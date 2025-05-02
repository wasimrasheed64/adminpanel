<section class="">
    <div class="container">
        <h4 class="title title-sm mt-8 title-line title-underline"><span>What our customers says</span></h4>
        <div class="code-template p-2">
            <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                                'items': 3,
                                'nav': false,
                                'dots': true,
                                'loop': false,
                                'margin': 20,
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
                @foreach(App\Models\Testimonial::all() as $testimonial)
                    <div class="testimonial ">
                        <blockquote>{{ $testimonial->description }}</blockquote>
                        <div class="testimonial-info">
                            <figure class="testimonial-author-thumbnail">
                                <img src="{{ $testimonial->image }}" alt="user" width="50" height="50"/>
                            </figure>
                            <cite>
                                {{ $testimonial->name }}
                                <span>{{ $testimonial->designation }}</span>
                            </cite>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
