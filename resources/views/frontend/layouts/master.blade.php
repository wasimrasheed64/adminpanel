<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.head')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body>
<div class="page-wrapper">
@include('frontend.layouts.header')
<main class="main">
    <div class="page-content">
@yield('content')
    </div>
</main>



    <!-- BEGIN: Footer-->
    <!-- ============================================= -->
        @include('frontend.layouts.footer')
    <!-- End: Footer-->

</div>


@include('frontend.layouts.scripts')


</body>
</html>
