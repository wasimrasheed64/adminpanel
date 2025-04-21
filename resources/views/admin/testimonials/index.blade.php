<x-app-layout>
    @section('extra-styles')
        <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
              type="text/css"/>
    @endsection

    <x-slot name="content">
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        @include('partials.breadcrumb',[
         'name' => "Testimonials"
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
                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                              height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                              fill="black"/>
														<path
                                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                            fill="black"/>
													</svg>
												</span>
                                    <!--end::Svg Icon-->
                                    <input type="text" data-kt-customer-table-filter="search"
                                           class="form-control form-control-solid w-250px ps-15"
                                           placeholder=""/>
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                                    <!--begin::Add Category-->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#add_new_social">Add Testimonial
                                    </button>
                                    <!--end::Add customer-->
                                </div>
                                <!--end::Toolbar-->

                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                                <!--begin::Table head-->
                                <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">#</th>
                                    <th class="min-w-125px">Name</th>
                                    <th class="min-w-125px">Created At</th>
                                    <th class=" min-w-70px">Actions</th>
                                </tr>
                                <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-bold text-gray-600">

                                @foreach($testimonials  as $testimonial)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $testimonial->name }}</td>
                                        <td>{{ $testimonial->created_at->format('M d,Y') }}</td>
                                        <td>
                                            <a  class="btn btn-sm text-white px-5 mr-2 badge badge-primary"
                                                data-bs-toggle="modal"
                                                data-bs-target="#updatemainCategory{{ $testimonial->id }}">Edit</a>
                                            <span class="menu-link btn btn-sm text-white ml-2 px-3 badge badge-danger"
                                                  onclick='deleteData("{{ $testimonial->id }}", "{{ route('testimonial.delete', $testimonial->id) }}")'>Delete</span>
                                        </td>

                                        <!--begin::Modal - Create App-->
                                        <div class="modal fade" id="updatemainCategory{{ $testimonial->id }}" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-900px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header">
                                                        <!--begin::Modal title-->
                                                        <h2>Update Testimonial </h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                             data-bs-dismiss="modal">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                                          transform="rotate(-45 6 17.3137)" fill="black"/>
                                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                          transform="rotate(45 7.41422 6)" fill="black"/>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>
                                                    <!--end::Modal header-->
                                                    <!--begin::Modal body-->
                                                    <div class="modal-body py-lg-10 px-lg-10">
                                                        <form method="post" action="{{ route('testimonial.update',$testimonial->id) }}"
                                                                enctype="multipart/form-data">
                                                            @csrf
                                                            @method('patch')
                                                            {{--                                                            <div class="mb-10">--}}
                                                            {{--                                                                <label for="categoryName" class="required form-label">Icon</label>--}}
                                                            {{--                                                                <input type="text" class="form-control form-control-solid"--}}
                                                            {{--                                                                       name="name" placeholder="Example input" id="categoryName"--}}
                                                            {{--                                                                       value="{{ $testimonial->name }}"--}}
                                                            {{--                                                                       required/>--}}
                                                            {{--                                                            </div>--}}

                                                            <div class="mb-10">
                                                                @include('partials.forms.imageInput',[
                                                                        'label'=>' Image',
                                                                         'name' => "testimonialImage",
                                                                         "class" => "col-md-12",
                                                                         "value" => $testimonial->image
                                                                    ])

                                                            </div>

                                                            <div class="mb-10">
                                                                <label for="categoryName" class="required form-label">
                                                                    Name
                                                                </label>
                                                                <input type="text" class="form-control form-control-solid"
                                                                       name="name" placeholder="Example input" id="categoryName"
                                                                       value="{{ $testimonial->name }}"
                                                                       required/>
                                                            </div>

                                                            <div class="mb-10">
                                                                <label for="categoryName" class="required form-label">Designation</label>
                                                                <input type="text" class="form-control form-control-solid"
                                                                       name="designation" placeholder="Example input" id="categoryName"
                                                                       value="{{ $testimonial->designation }}"
                                                                       required/>
                                                            </div>

                                                            <div class="mb-10">
                                                                @include('partials.forms.textarea',[
                                                                        "label" => 'Description',
                                                                        "name" => 'description',
                                                                        "value" => $testimonial->description
                                                                        ])
                                                            </div>

                                                            <button class="btn btn-primary " type="submit">
                                                                Submit
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <!--end::Modal body-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                        </div>
                                        <!--end::Modal - Create App-->
                                    </tr>
                                @endforeach
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Post-->
        </div>
        <!--begin::Modal - Create Category-->
        <div class="modal fade" id="add_new_social" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-900px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2>Add Testimonial</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="black"/>
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="black"/>
								</svg>
							</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-lg-10 px-lg-10">
                        <form method="post" action="{{ route('testimonial.store') }}" enctype="multipart/form-data">
                            @csrf
                            {{--                            <div class="mb-10">--}}
                            {{--                                <label for="categoryName" class="required form-label">Name</label>--}}
                            {{--                                <input type="text" class="form-control form-control-solid"--}}
                            {{--                                       name="name" placeholder="Example input" id="categoryName" required/>--}}
                            {{--                            </div>--}}

                            <div class="mb-10">
                                @include('partials.forms.imageInput',[
                                        'label'=>' Image',
                                         'name' => "testimonialImage",
                                         "class" => "col-md-12",
                                    ])

                            </div>

                            <div class="mb-10">
                                <label for="categoryName" class="required form-label">Name</label>
                                <input type="text" class="form-control form-control-solid"
                                       name="name" placeholder="Example input" id="categoryName"
                                       required/>
                            </div>

                            <div class="mb-10">
                                <label for="categoryName" class="required form-label">Designation</label>
                                <input type="text" class="form-control form-control-solid"
                                       name="designation" placeholder="Example input" id="categoryName"
                                       required/>
                            </div>

                            <div class="mb-10">
                                @include('partials.forms.textarea',[
                                        "label" => 'Description',
                                        "name" => 'description',

                                        ])
                            </div>
                            <button class="btn btn-primary " type="submit">
                                Submit
                            </button>
                        </form>
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Create Category-->
    </x-slot>

    @section('extra-scripts')
    <!--begin::Page Vendors Javascript(used by this page)-->
        <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <!--end::Page Vendors Javascript-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="{{ asset('assets/js/custom/apps/customers/list/export.js') }}"></script>
        <script src="{{ asset('assets/js/custom/apps/customers/list/list.js') }}"></script>
    @endsection

</x-app-layout>

