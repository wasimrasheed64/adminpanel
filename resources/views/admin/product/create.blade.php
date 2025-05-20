<x-app-layout>
    <x-slot name="content">

        <div class="container">
            <div class="row">
                <div class="card mb-4 p-5">
                    <form id="kt_modal_new_target_form" method="post"
                          class="form fv-plugins-bootstrap5 fv-plugins-framework"
                          action="{{ route('product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Heading-->

                        <div class="mb-3 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-15 mt-3">Add New Product</h1>
                            <!--end::Title-->
                            <!--begin::Description-->

                            @if(session()->has('message'))
                                @include('partials.alertbox')
                            @endif
                            <!--end::Description-->
                        </div>
                    <div  class="row">
                        <div class="col-lg-10 col-sm-10 col-xs-12">
                            <div class="row">
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
                                  "label" => "Product Name",
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
                                   "class" => "col-md-6",
                               ])


                                @include('partials.forms.selectInput',[
                                    "name" => "category_id",
                                    "label" => "Category",
                                    "class" => "col-md-6",
                                    "placeholder" => "Select the category",
                                    "options" => $categories
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
                                    "name" => 'is_featured',
                                     "label" => 'Is Featured'
                                ])
                                @include('partials.forms.checkbox',[
                                    "name" => 'is_menu',
                                     "label" => 'Is Menu'
                                ])
                                @include('partials.forms.checkbox',[
                           "name" => 'is_footer',
                            "label" => 'Show in Footer',

                       ])

                                @include('partials.forms.buttonSubmit')
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-2 col-xs-12">

                            @include('partials.forms.imageInput',[
                                      "name" => 'imageOne',
                                      "label" => "Product Featured Image",
                                      "class" => "col-md-12"
                                    ])
                                <br>
                            @include('partials.forms.imageInput',[
                                      "name" => 'imageTwo',
                                      "label" => "Product  Image 2",
                                      "class" => "col-md-12"
                                    ])
                            <br>
                            @include('partials.forms.imageInput',[
                                      "name" => 'imageThree',
                                      "label" => "Product  Image 3",
                                      "class" => "col-md-12"
                                    ])
                            <br>
                            @include('partials.forms.imageInput',[
                                      "name" => 'imageFourth',
                                      "label" => "Product  Image 4",
                                      "class" => "col-md-12"
                                    ])
                        </div>
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
