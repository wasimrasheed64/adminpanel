@php use App\Models\Faq; @endphp
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="title-wrapper mt-5 mb-5 appear-animate"
                 data-animation-options="{'name': 'fadeIn', 'duration': '.3s'}">
                <h4 class="title title-sm title-line title-underline"><span>FAQs</span></h4>
            </div>
            <div
                class="accordion accordion-card-bg accordion-primary accordion-boxed accordion-plus accordion-gutter-md">

                @foreach(Faq::get() as $faq)
                    <div class="card">
                        <div class="card-header">
                            <a href="#collapse6-{{$faq->id }}"
                               class="ml-5 {{ $loop->iteration > 1 ? 'expand' : 'collapse' }} ">{{ $faq->question }}</a>
                        </div>
                        <div id="collapse6-{{$faq->id }}"
                             class="{{ $loop->iteration > 1 ? 'collapsed' : 'expanded' }} p-5">
                            <div class="card-body btn-accordian">
                                <p class="ml-5 mb-0 pb-2">{{ $faq->answer }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-6">
            <div class="title-wrapper mt-5 mb-5 appear-animate"
                 data-animation-options="{'name': 'fadeIn', 'duration': '.3s'}">
                <h4 class="title title-sm title-line title-underline"><span>Custom Qoute</span></h4>
            </div>
            @include('partials.frontend.quickQoute')
        </div>
    </div>
</div>
