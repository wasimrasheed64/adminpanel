<x-app-layout>
    <x-slot name="content">
        <div class="content d-flex flex-column flex-column-fluid " id="kt_content">
            @include('partials.breadcrumb',[
             'name' => "Home Pages"
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
                            <h3>Home Page</h3>
                        </div>
                        <div class="card-body">
                            <form id="kt_account_profile_details_form" class="form"
                                  enctype="multipart/form-data" method="post"
                                  action="{{ route('admin.homepage.patch') }}">
                            @csrf
                            @method('patch')
                            <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <div class="row">
                                        @include('partials.forms.formInput',[
                                               "name" => "seo_title",
                                               "label" => "Seo Title",
                                               "class" => "col-md-6",
                                               "value" => $homePage->seo_title
                                           ])

                                        @include('partials.forms.formInput',[
                                          "name" => "seo_description",
                                          "label" => "Seo Description",
                                          "class" => "col-md-6",
                                          "value" => $homePage->seo_description
                                      ])

                                        @include('partials.forms.textarea',[
                                           'name' => 'company_intro',
                                           'label' => 'Company Intro',
                                           'class' => 'textarea',
                                            "value" => $homePage->company_intro
                                       ])


                                        @include('partials.forms.textarea',[
                                              'name' => 'short_description',
                                              'label' => 'Short Description',
                                               "value" => $homePage->short_description
                                          ])
                                        @include('partials.forms.textarea',[
                                           'name' => 'description',
                                           'label' => 'Description',
                                           'class' => 'textarea',
                                            "value" => $homePage->description
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
        <script>
            tinymce.init({
                selector: '.textarea'
            });
        </script>
    @endsection
</x-app-layout>
