<x-app-layout>
    <x-slot name="content">
        <div class="content d-flex flex-column flex-column-fluid " id="kt_content">
            @include('partials.breadcrumb',[
               'name' => "About Page"
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
                            <h3>Site Setting</h3>
                        </div>
                        <div class="card-body">
                            <form id="kt_account_profile_details_form" class="form"
                                  enctype="multipart/form-data" method="post"
                                  action="{{ route('admin.site.setting.patch') }}">
                            @csrf
                            @method('patch')
                            <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <div class="row">
                                        @include('partials.forms.imageInput',[
                                            'label'=>' Logo',
                                             'name' => "Logo",
                                             "class" => "col-md-4",
                                             "value" => $siteSetting->logo
                                        ])

                                        @include('partials.forms.imageInput',[
                                             'label'=>'Footer Logo',
                                             'name' => "footerLogo",
                                             "class" => "col-md-4",
                                             "value" => $siteSetting->footer_logo
                                        ])

                                        @include('partials.forms.imageInput',[
                                             'label'=>'Favicon',
                                             'name' => "favIcon",
                                             "class" => "col-md-3",
                                             "value" => $siteSetting->favicon
                                        ])

                                        @include('partials.forms.formInput',[
                                               "name" => "email",
                                               "label" => "Email",
                                               "class" => "col-md-6",
                                               "value" => $siteSetting->email
                                           ])

                                        @include('partials.forms.formInput',[
                                          "name" => "address",
                                          "label" => "Address",
                                          "class" => "col-md-6",
                                          "value" => $siteSetting->address
                                      ])

                                        @include('partials.forms.formInput',[
                                          "name" => "phone",
                                          "label" => "Phone",
                                          "class" => "col-md-6",
                                          "value" => $siteSetting->phone
                                      ])
                                        @include('partials.forms.formInput',[
                                           "name" => "working_hours",
                                           "label" => "Weekly Working Hours",
                                           "class" => "col-md-6",
                                           "value" => $siteSetting->working_hours
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
</x-app-layout>
