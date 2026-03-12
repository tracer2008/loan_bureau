@extends('layouts.desktop')

@section('SEO')
    <title>Бюро займов</title>
    <meta name="description" content='Бюро займов'>
@endsection

@section('content')

    @include("app.pages.zaimy_na_kartu.zaimy_na_kartu")

    @include("app.pages.kak_vzat_zaim.kak_vzat_zaim")

    @include("app.pages.calculator.calculator")

    @include("app.pages.kak_oplatit_zaim.kak_oplatit_zaim")

    @include("app.pages.usloviya_zaimov.usloviya_zaimov")

    @include("app.pages.kak_prodlit_zaim.kak_prodlit_zaim")

{{--    @include("app.pages.article.article")--}}









@endsection

@push('scripts')

@endpush
