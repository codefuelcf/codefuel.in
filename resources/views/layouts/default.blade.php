<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="keywords" content="Websites, Web Applications, Development, Designing" />
    <meta name="robots" content="index, follow" />
    <meta property="title" content="{{ $meta->title ?? 'Websites, Web Application & Designing' }}" />
    <meta property="url" content="{{ url()->current() }}" />
    <meta property="image" content="{{ $meta->image ?? url('/assets/img/meta-image.jpg') }}" />
    <meta name="description" content="{{ $meta->description ?? 'Codefuel is a creative digital agency providing development, designing and hosting solutions' }}" />
    <meta property="og:title" content="{{ $meta->title ?? 'Websites, Web Application & Designing' }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ $meta->image ?? url('/assets/img/meta-image.jpg') }}" />
    <meta property="og:description" content="{{ $meta->description ?? 'Codefuel is a creative digital agency providing development, designing and hosting solutions' }}" />
    <meta property="twitter:title" content="{{ $meta->title ?? 'Websites, Web Application & Designing' }}" />
    <meta property="twitter:url" content="{{ url()->current() }}" />
    <meta property="twitter:image" content="{{ $meta->image ?? url('/assets/img/meta-image.jpg') }}" />
    <meta property="twitter:description" content="{{ $meta->description ?? 'Codefuel is a creative digital agency providing development, designing and hosting solutions' }}" />

    <title>{{ $title ?? '' }} | Codefuel</title>

    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ url(mix('assets/css/app.css')) }}">
    @stack('stylesheets')
</head>
<body>
    @include('layouts.partials.header')

    @yield('beforeMainContent')

    @yield('mainContent')

    @yield('afterMainContent')

    @include('layouts.partials.footer')

    <script src="{{ url(mix('assets/js/app.js')) }}"></script>
    @stack('javascripts')

</body>
</html>