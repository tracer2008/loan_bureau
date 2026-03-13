<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" href="/favicon.ico">

    <link rel="canonical" href="{{url()->current()}}" />

    @include("app.include._yandex_metrika")

{{--    @yield('seo')--}}
    @if($subdomain != null)
        <title>Займы в {{$city->cityName}}, {{$city->regionName}}</title>
        <meta name="description" content='Займы на карту в {{$city->cityName}}, {{$city->regionName}}, онлайн без отказа в МФО'>
    @else
        <title>Займы</title>
        <meta name="description" content='Займы на карту, онлайн без отказа в МФО'>
    @endif


    <link href="{{ mix("css/desktop.css") }}" rel="stylesheet">


</head>

<body>

<div class="body">
    <div id="app">

        @include("app.include.header")

        <div class="main_content">
            @yield('content')
        </div>

        @include("app.include.footer")
        @include("app.include._modal_menu")

    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>

{{--@include('app.include._script_for_article')--}}

@stack('scripts')


</body>

</html>
