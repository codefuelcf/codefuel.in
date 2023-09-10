<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="robots" content="index, follow" />
    <x-front.seo-meta-tags
        :title="$title ?? 'Websites, Web Application & Designing'"
        :url="url()->current()"
        :featured-image="$featuredImage ?? url('/assets/img/meta-image.jpg')"
        :description="$description ?? 'Codefuel is a creative digital agency providing development, designing and hosting solutions'"
    />

    <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon/favicon.ico') }}" type="image/x-icon">
    
    <title>
        Codefuel - {{ $title ?? 'Websites, Web Application & Designing' }}
    </title>

    @vite(['resources/css/tailwind.css', 'resources/css/front.css'])
    @stack('stylesheets')
</head>

<body>
    <x-front.header />
    @yield('mainContent')
    <x-front.footer />

    @vite('resources/js/front.js')
    @stack('javascripts')

</body>

</html>