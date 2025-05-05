{{--<div class="page-header" style="background-image: url('{{ $image ?? '' }}')">--}}

{{--    <h3 class="page-title z-index-1"></h3>--}}
{{--    <ul class="breadcrumb z-index-1">--}}
{{--        <li><a class="z-index-1" href="{{ route('home') }}"><i class="d-icon-home"></i></a></li>--}}
{{--        <li class="delimiter">/</li>--}}
{{--        <li>{{ $title ?? '' }}</li>--}}
{{--    </ul>--}}
{{--</div>--}}



    <div class="page-header  align-items-start breadcrumb-resize-padding bg-light" style="
        color:white;padding-left:50px;">
        <div class="container">
        <h2 class="page-title z-index-1">{{ $title ?? "" }}</h2>
        <ul class="breadcrumb z-index-1">
            <li class="z-index-1"><a  class="active" href="{{ route('home') }}"><i class="d-icon-home"></i></a></li>
            <li class="delimiter">/</li>
            <li>{{ $title ?? '' }}</li>
        </ul>
        </div>
    </div>
