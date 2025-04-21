
<title>{{ config('app.name', 'Laravel') }} - Admin Panel</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="{{URL::to('assets/media/logos/favicon.ico')}}" />
<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<!--end::Fonts-->
<!--begin::Page Vendor Stylesheets(used by this page)-->
<link href="{{URL::to('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
<!--end::Page Vendor Stylesheets-->
<!--begin::Global Stylesheets Bundle(used by all pages)-->
    @if(session()->has('darkMode'))
        <link href="{{URL::to('assets/plugins/global/plugins.dark.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('assets/css/style.dark.bundle.css')}}" rel="stylesheet" type="text/css" />
    @else
        <link href="{{URL::to('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    @endif
<!--end::Global Stylesheets Bundle-->

@yield('vendor-styles')

@yield('extra-styles')
