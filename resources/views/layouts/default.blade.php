<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{ $title ?? '' }} - Codefuel</title>

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