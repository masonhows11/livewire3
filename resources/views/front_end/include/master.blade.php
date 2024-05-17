<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('front_title')</title>
    @include('front_end.include.header_styles')
</head>

<body>

    @include('front_end.include.header')

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        @yield('front_main')
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    @include('front_end.include.footer')

    @include('front_end.include.footer_scripts')
</body>



</html>
