<!doctype html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}-UA">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600,800,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ mix('css/site/app.css') }}">
    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="theme-color" content="">
    @section('rel_alternate_pagination')
        <link rel="canonical" href="{{ LaravelLocalization::getLocalizedURL() }}">
    @endsection
    @yield('rel_alternate_pagination')
    <link rel="alternate" hreflang="{{ 'ru-ua' }}"
          href="{{ LaravelLocalization::getLocalizedURL('ru') }}">
    <link rel="alternate" hreflang="{{ 'uk-ua' }}"
          href="{{ LaravelLocalization::getLocalizedURL('uk') }}">
    @yield('jsonld')

</head>
<body id="@yield('body_id')" class="@yield('body_class')">

    <div class="page">

        @include('site.components.header')
        @yield('content')
        @include('site.components.footer')

    </div>

    @include('site.components.mobile-menu')

    <script type="text/javascript" src="{{ mix('js/site/app.js') }}"></script>

    @yield('javascript')

</body>
</html>
