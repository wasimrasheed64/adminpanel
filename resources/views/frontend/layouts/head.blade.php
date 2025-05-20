<!-- ========== Meta Tags ========== -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="csrf-token" content="{{csrf_token()}}">

<!-- ========== Page Title ========== -->
<title>@yield('title') </title>

<!-- ========== Favicon Icon ========== -->
<link rel="shortcut icon" href="{{ $siteSetting->favicon }}" type="image/x-icon">

<!-- ========== Start Stylesheet ========== -->

<link rel="preload" href="{{ asset('fonts/riode.ttf?5gap68') }}" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="{{ asset('vendor/fontawesome-free/webfonts/fa-solid-900.woff2') }}" as="font" type="font/woff2"
      crossorigin="anonymous">
<link rel="preload" href="{{  asset('vendor/fontawesome-free/webfonts/fa-brands-400.woff2') }}" as="font" type="font/woff2"
      crossorigin="anonymous">
<script>
    WebFontConfig = {
        google: {
            families: ['Poppins:300,400,500,600,700,800']
        }
    };
    (function (d) {
        var wf = d.createElement('script'),
            s = d.scripts[0];
        wf.src = '{{ asset('js/webfont.js') }}';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
    })(document);
</script>



<link rel="stylesheet" type="text/css" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.min.css') }}">

<!-- Plugins CSS File -->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl-carousel/owl.carousel.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('vendor/sticky-icon/stickyicon.css') }}">

<!-- Main CSS File -->
<!-- <link rel="stylesheet" type="text/css" href="css/demo1.min.css"> -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/demo23.min.css') }}">

<!-- Global site tag (gtag.js) - Google Analytics -->
@php
$customScript = \App\Models\CustomScript::first();
@endphp
{!! $customScript->scripts !!}

@yield('vendor-head')

@yield('extra-head')

