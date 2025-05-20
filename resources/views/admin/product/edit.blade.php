<x-app-layout>
    <x-slot name="content">

        <div class="container">
            <div class="row">
                <div class="card mb-4 p-5">
                    <form id="kt_modal_new_target_form" method="post"
                          class="form fv-plugins-bootstrap5 fv-plugins-framework"
                          action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <!--begin::Heading-->

                        <div class="mb-3 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-15 mt-3">Update Product {{ $product->name }}</h1>
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
                                        'value' => $product->seo_title
                                    ])

                                    @include('partials.forms.formInput',[
                                      "name" => "seo_description",
                                      "label" => "Seo Description",
                                      "class" => "col-md-6",
                                      'value' => $product->seo_description
                                  ])

                                    @include('partials.forms.formInput',[
                                       "name" => "name",
                                       "label" => "Product Name",
                                       "class" => "col-md-6",
                                       'value' => $product->name
                                   ])
                                    @include('partials.forms.formInput',[
                                       "name" => "slug",
                                       "label" => "Seo Url",
                                       "class" => "col-md-6",
                                       'value' => $product->slug
                                   ])
                                     @include('partials.forms.formInput',[
                                   "name" => "menu_no",
                                   "label" => "Menu No",
                                    'value' => $product->menu_no,
                                   "class" => "col-md-6",
                               ])



                                    @include('partials.forms.selectInput',[
                                        "name" => "category_id",
                                        "label" => "Category",
                                        "class" => "col-md-6",
                                        "placeholder" => "Select the category",
                                        "options" => $categories,
                                        'value' => $product->category_id
                                    ])

                                    @include('partials.forms.textarea',[
                                        'name' => 'short_description',
                                        'label' => 'Short Description',
                                        'value' => $product->short_description
                                    ])

                                    @include('partials.forms.textarea',[
                                       'name' => 'description',
                                       'label' => 'Description',
                                       'class' => 'textarea',
                                       'value' => $product->description
                                   ])

                                    @include('partials.forms.checkbox',[
                                        "name" => 'is_active',
                                         "label" => 'Is active',
                                         'value' => $product->is_active

                                    ])

                                    @include('partials.forms.checkbox',[
                                        "name" => 'is_featured',
                                         "label" => 'Is Featured',
                                         'value' => $product->is_featured
                                    ])
                                    @include('partials.forms.checkbox',[
                                        "name" => 'is_menu',
                                         "label" => 'Is Menu',
                                         'value' => $product->in_menu
                                    ])

                                    @include('partials.forms.checkbox',[
                           "name" => 'is_footer',
                            "label" => 'Show in Footer',
                             "value" => $product->is_footer
                       ])

                                    @include('partials.forms.buttonSubmit')
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-12">

                                @include('partials.forms.imageInput',[
                                        "name" => 'imageOne',
                                        "label" => "Product Main Image",
                                        "class" => "col-md-12",
                                        "value" => $product->image_1
                                      ])
                                <br>
                                @include('partials.forms.imageInput',[
                                          "name" => 'imageTwo',
                                          "label" => "Product  Image 2",
                                          "class" => "col-md-12",
                                          "value" => $product->image_2
                                        ])
                                <br>
                                @include('partials.forms.imageInput',[
                                          "name" => 'imageThree',
                                          "label" => "Product  Image 3",
                                          "class" => "col-md-12",
                                          "value" => $product->image_3
                                        ])
                                <br>
                                @include('partials.forms.imageInput',[
                                          "name" => 'imageFourth',
                                          "label" => "Product  Image 4",
                                          "class" => "col-md-12",
                                          "value" => $product->image_4
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
