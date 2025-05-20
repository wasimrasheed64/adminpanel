<x-app-layout>
    <x-slot name="content">

        <div class="container">
            <div class="row">
                <div class="card mb-4 p-5">
                    <form id="kt_modal_new_target_form" method="post"
                          class="form fv-plugins-bootstrap5 fv-plugins-framework"
                          action="{{ route('category.store') }}" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Heading-->

                        <div class="mb-3 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-15 mt-3">Add New Category</h1>
                            <!--end::Title-->
                            <!--begin::Description-->

                            @if(session()->has('message'))
                                @include('partials.alertbox')
                            @endif
                            <!--end::Description-->
                        </div>

                        <div class="row">


                            <div class="col-lg-12">
                                @include('partials.forms.inputPreviewImage',[
                                       "width" => "250px",
                                    ])
                            </div>
                            @include('partials.forms.fileinput',[
                                     "name" => "image",
                                     "label" => "Breadcrumb image",
                                      "class" => "col-md-6",
                                      "id" => "breadcrumbImage",
                                      "function" => "1",
                                      ])


                            @include('partials.forms.formInput',[
                                "name" => "seo_title",
                                "label" => "Seo Title",
                                "class" => "col-md-6",
                            ])

                            @include('partials.forms.formInput',[
                              "name" => "seo_description",
                              "label" => "Seo Description",
                              "class" => "col-md-6",
                          ])

                            @include('partials.forms.formInput',[
                              "name" => "name",
                              "label" => "Category Name",
                              "class" => "col-md-6",
                          ])
                           @include('partials.forms.formInput',[
                              "name" => "slug",
                              "label" => "Seo Url",
                              "class" => "col-md-6",
                          ])

                             @include('partials.forms.formInput',[
                                   "name" => "menu_no",
                                   "label" => "Menu No",
                                   "class" => "col-md-4",
                               ])


                            @include('partials.forms.selectInput',[
                                "name" => "main_category_id",
                                "label" => "Main Category",
                                "class" => "col-md-6",
                                "placeholder" => "Select the category",
                                "options" => $mainCategories
                            ])

                            @include('partials.forms.textarea',[
                                'name' => 'short_description',
                                'label' => 'Short Description'
                            ])

                            @include('partials.forms.textarea',[
                               'name' => 'description',
                               'label' => 'Description',
                               'class' => 'textarea'
                           ])

                            @include('partials.forms.checkbox',[
                                "name" => 'is_active',
                                 "label" => 'Is active'
                            ])

                            @include('partials.forms.checkbox',[
                               "name" => 'is_menu',
                                "label" => 'Is Menu'
                           ])
                            @include('partials.forms.checkbox',[
                             "name" => 'is_footer',
                              "label" => 'Show in Footer'
                         ])

                            @include('partials.forms.buttonSubmit')
                        </div>


                    </form>
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
