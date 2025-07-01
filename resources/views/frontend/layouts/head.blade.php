<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>@yield('title')</title>

    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ $siteSetting->favicon }}">
    <!-- Preload Font -->
    <link rel="preload" href="{{ asset('fonts/riode.ttf?5gap68') }}" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('vendor/fontawesome-free/webfonts/fa-solid-900.woff2') }}" as="font" type="font/woff2"
          crossorigin="anonymous">
    <link rel="preload" href="{{ asset('vendor/fontawesome-free/webfonts/fa-brands-400.woff2')}}" as="font" type="font/woff2"
          crossorigin="anonymous">
    <script>
        WebFontConfig = {
            google: { families: [ 'Jost:300,400,500,600,700', 'Poppins:300,400,500,600,700,800' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = '{{ asset('js/webfont.js') }}';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.min.css')}}">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl-carousel/owl.carousel.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sticky-icon/stickyicon.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo-diamart.min.css')}}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    @php
        $customScript = \App\Models\CustomScript::first();
    @endphp
    {!! $customScript->scripts !!}

    @yield('vendor-head')

    @yield('extra-head')
</head>
