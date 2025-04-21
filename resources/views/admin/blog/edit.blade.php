<x-app-layout>
    <x-slot name="content">

        <div class="container">
            <div class="row">
                <div class="card mb-4 p-5">
                    <form id="kt_modal_new_target_form" method="post"
                          class="form fv-plugins-bootstrap5 fv-plugins-framework"
                          action="{{ route('blog.update',$blog->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                    <!--begin::Heading-->

                        <div class="mb-3 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-15 mt-3">Update Blog {{ $blog->title }}</h1>
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
                                       "value" => $blog->image
                                    ])
                            </div>
                            @include('partials.forms.fileinput',[
                                     "name" => "blogImage",
                                     "label" => "Blog Image",
                                      "class" => "col-md-6",
                                      "id" => "blogImage",
                                      "function" => "1",
                                      ])


                            @include('partials.forms.formInput',[
                                "name" => "seo_title",
                                "label" => "Seo Title",
                                "class" => "col-md-6",
                                "value" => $blog->seo_title
                            ])


                            @include('partials.forms.formInput',[
                              "name" => "title",
                              "label" => "Blog Title",
                              "class" => "col-md-12",
                              "value" => $blog->title
                          ])


                            @include('partials.forms.textarea',[
                                'name' => 'short_description',
                                'label' => 'Short Description',
                                "value" => $blog->short_description

                            ])

                            @include('partials.forms.textarea',[
                               'name' => 'description',
                               'label' => 'Description',
                               'class' => 'textarea',
                               "value" => $blog->description
                           ])

                            @include('partials.forms.checkbox',[
                                "name" => 'is_active',
                                 "label" => 'Is active',
                                 "value" => $blog->is_active
                            ])

                            @include('partials.forms.buttonUpdate')
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
