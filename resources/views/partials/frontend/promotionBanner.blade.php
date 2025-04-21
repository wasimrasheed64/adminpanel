
    <section class="pt-md-2 creative-grid-section">

        <div class="row grid gutter-sm">
            @foreach(App\Models\Promotion::where('page',1)->get() as $promotion)
            <div class="grid-item col-sm-6  col-md-{{ $promotion->class }} height-2">
                <div class="category category-banner overlay-zoom category-absolute text-white appear-animate"
                     data-animation-options="{
                                    'name': 'fadeInDownShorter',
                                    'delay': '.3s'
                                }">
                    <figure class="category-media" style="background: #e2e2e2">
                        <a href="{{ $promotion->link }}">
                            <img src="{{ $promotion->image }}" alt="{{ $promotion->image }}"/>
                        </a>
                    </figure>
                </div>
            </div>
            @endforeach

            <div class="col-1 grid-space"></div>
        </div>
    </section>
    <!-- Categories Section -->
