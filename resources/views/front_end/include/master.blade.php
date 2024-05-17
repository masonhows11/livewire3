<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('front_title')</title>
    <livewire:front.layout.header_styles/>
</head>

<body>

    <livewire:front.layout.header/>

    <!-- **************** MAIN CONTENT START **************** -->
    {{ $slot }}
    {{-- <main>
        @yield('front_main')
    </main> --}}
    <!-- **************** MAIN CONTENT END **************** -->

    <livewire:front.layout.footer/>

    <livewire:front.layout.footer_scripts/>
</body>



</html>
