<x-app-layout>
    @section('extra-styles')
        <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
              type="text/css"/>
                <style>
                .paginate_button{
                     margin-right: 0.5rem;
                     cursor : pointer;
                    }
</style>
    @endsection

    <x-slot name="content">
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
         @include('partials.breadcrumb',[
                'name' => "Products"
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
                            </div>
                            <!--begin::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                                    <!--begin::Add Category-->
                                    <a href="{{ route('product.create') }}">
                                        <button type="button" class="btn btn-primary">
                                            Add New Product
                                        </button>
                                    </a>
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

                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->created_at->format('M d,Y') }}</td>
                                    <td>
                                                <a  class="btn btn-sm text-white px-5 mr-2 badge badge-primary"
                                                    href="{{ route('product.edit',$product) }}">Edit</a>
                                                <span class="menu-link btn btn-sm text-white ml-2 px-3 badge badge-danger"
                                                      onclick='deleteData("{{ $product->id }}",
                                                          "{{ route('product.delete', $product->id) }}")'>Delete</span>
                                    </td>
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

    </x-slot>

    @section('extra-scripts')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>

		    $("#kt_customers_table").DataTable({
		        paging: true,
		    });
		</script>

    @endsection

</x-app-layout>

