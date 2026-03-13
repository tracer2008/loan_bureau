<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="canonical" href="{{url()->current()}}" />

    @include("app.include._yandex_metrika")

{{--    @yield('seo')--}}
    <title>Займы в {{$city->cityName}}, {{$city->regionName}}</title>
    <meta name="description" content='Займы на карту в {{$city->cityName}}, {{$city->regionName}}, онлайн без отказа в МФО'>

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
