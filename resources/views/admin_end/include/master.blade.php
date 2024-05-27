<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('panel_title')</title>
    <link rel="shortcut icon" href="{{ asset('admin_assets/assets/media/image/favicon.png')}}">
    <meta name="theme-color" content="#5867dd">
    @include('admin_end.include.header_styles')
</head>

<body class="small-navigation">

     <!-- start::navigation -->
    @include('admin_end.include.sidebar')
    <!-- end::navigation -->

    <!-- begin::header -->
    @include('admin_end.include.header')
    <!-- end::header -->

    <!-- begin::main content -->
    @yield('panel_main_content')

    @include('admin_end.include.footer_scripts')
</body>
@stack('admin_scripts')

</html>
