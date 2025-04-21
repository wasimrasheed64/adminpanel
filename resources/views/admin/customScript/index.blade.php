<x-app-layout>
    <x-slot name="content">
        <div class="content d-flex flex-column flex-column-fluid " id="kt_content">
            @include('partials.breadcrumb',[
            'name' => "Custom Scripts"
        ])
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <div id="kt_content_container" class="container-xxl">
                    <!--begin::Card-->
                    <div class="card">
                        @if(session()->has('message'))
                            @include('partials.alertbox')
                        @endif
                        <div class="card-header border-0 pt-6">
                            <h3>Custom Css or Scripts</h3>
                        </div>
                        <div class="card-body">
                            <form id="kt_account_profile_details_form" class="form"
                                  enctype="multipart/form-data" method="post"
                                  action="{{ route('custom-script.patch') }}">
                            @csrf
                            @method('patch')
                            <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <div class="row">

                                        @include('partials.forms.textarea',[
                                           'name' => 'scripts',
                                           'label' => 'Custom Scripts or custom css',
                                           'class' => 'textarea',
                                           'value' => $customScript->scripts

                                       ])



                                         <span class="mt-3"></span>
                                       @include('partials.forms.buttonUpdate')
                                    </div>
                                </div>
                                <!--end::Card body-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    @section('extra-scripts')

        <script src="{{ asset('assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
{{--        <script>--}}
{{--            tinymce.init({--}}
{{--                selector: '.textarea'--}}
{{--            });--}}
{{--        </script>--}}
    @endsection
</x-app-layout>
