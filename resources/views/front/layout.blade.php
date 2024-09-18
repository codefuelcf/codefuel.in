<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <meta name="robots" content="index, follow" />
    <x-front.seo-meta-tags
        :title="$title ?? 'Websites, Web Application & Designing'"
        :url="url()->current()"
        :featured-image="$featuredImage ?? url('/assets/img/meta-image.jpg')"
        :description="$description ?? 'Codefuel is a creative digital agency providing development, designing and hosting solutions'"
    />

    <title>
        {{ $title ?? 'Websites, Web Application & Designing' }} | Codefuel
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

    <x-front.google-analytics-tag />
</body>

</html>