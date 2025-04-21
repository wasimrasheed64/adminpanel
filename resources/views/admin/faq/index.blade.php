<x-app-layout>
    @section('extra-styles')
        <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
              type="text/css"/>
    @endsection

    <x-slot name="content">
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        @include('partials.breadcrumb',[
        'name' => "Faqs "
    ])
            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <div id="kt_content_container" class="container-xxl">
                    <!--begin::Card-->
                    <div class="card">
                        @if(session()->has('message'))
                            @include('partials.alertbox')
                    @endif
                    <!--begin::Card header-->
                        <div class="card-header border-0 pt-6">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                   Faqs
                                    <!--end::Svg Icon-->

                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">

                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <form action="{{ route('admin.faqs.patch') }}" method="post" class="invoice-repeater">
                                @method('patch')
                                @csrf

                                <div data-repeater-list="faqs">
                                    @foreach($faqs as $faq)
                                        <div data-repeater-item>
                                        <div class="row d-flex align-items-end">

                                            @include('partials.forms.textarea',[
                                                  'name' => 'question',
                                                  'label' => 'Question',
                                                  'row' => '2',
                                                  'value' => $faq->question
                                              ])
                                            @include('partials.forms.textarea',[
                                               'name' => 'answer',
                                               'label' => 'Answer',
                                               'class' => 'textarea',
                                               'value' => $faq->answer
                                           ])


                                            <div class="col-md-2 mt-2 col-12 mb-50">
                                                <div class="form-group">
                                                    <button class="btn btn-danger p-2 "
                                                            data-repeater-delete type="button">
                                                        <i data-feather="x" class="mr-25"></i>
                                                        <span>Delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-12">
                                        <button class=" btn px-2 py-2 btn-success" type="button" data-repeater-create>
                                            <span>Add New</span>
                                        </button>
                                    </div>
                                    <div class="col-lg-4">
                                        <button class="btn px-2 ml-4  py-2 btn-primary" type="submit">
                                            <span> Submit Form </span>
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Post-->
        </div>

    </x-slot>

    @section('extra-scripts')
    <!--begin::Page Vendors Javascript(used by this page)-->
        <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <!--end::Page Vendors Javascript-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="{{ asset('assets/js/custom/apps/customers/list/export.js') }}"></script>
        <script src="{{ asset('assets/js/custom/apps/customers/list/list.js') }}"></script>
        <script src="{{ asset('assets/repeater/jquery.repeater.min.js') }}"></script>
        <script>
            $((function () {
                "use strict";
                $(".invoice-repeater, .repeater-default").repeater({
                    show: function () {
                        $(this).slideDown(), feather && feather.replace({width: 14, height: 14})
                    }, hide: function (e) {
                        confirm("Are you sure you want to delete this element?") && $(this).slideUp(e)
                    }
                })
            }));
        </script>
    @endsection

</x-app-layout>

