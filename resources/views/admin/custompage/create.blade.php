<x-app-layout>
    <x-slot name="content">

        <div class="container">
            <div class="row">
                <div class="card mb-4 p-5">
                    <form id="kt_modal_new_target_form" method="post"
                          class="form fv-plugins-bootstrap5 fv-plugins-framework"
                          action="{{ route('custompage.store') }}" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Heading-->

                        <div class="mb-3 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-15 mt-3">Add New Page</h1>
                            <!--end::Title-->
                            <!--begin::Description-->

                            @if(session()->has('message'))
                                @include('partials.alertbox')
                            @endif
                            <!--end::Description-->
                        </div>
                    <div  class="row">

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



                                @include('partials.forms.textarea',[
                                   'name' => 'description',
                                   'label' => 'Description',
                                   'class' => 'textarea'
                               ])

                                @include('partials.forms.checkbox',[
                                    "name" => 'is_header',
                                     "label" => 'Show in Header'
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
