<!-- BEGIN: Vendor JS-->
<!--end::Main-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{URL::to('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{URL::to('assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{URL::to('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{URL::to('assets/js/custom/widgets.js')}}"></script>
<script src="{{URL::to('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{URL::to('assets/js/custom/modals/create-app.js')}}"></script>
<script src="{{URL::to('assets/js/custom/modals/upgrade-plan.js')}}"></script>
<!--end::Page Custom Javascript-->

<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
@yield('vendor-scripts')

@yield('extra-scripts')
<!-- END: Page JS-->


