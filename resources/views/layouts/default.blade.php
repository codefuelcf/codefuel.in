<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{ $title ?? '' }} - Codefuel</title>

    <link rel="shortcut icon" href="{{ asset('/assets/svg/logo.svg') }}" type="image/svg">
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">
</head>
<body>
    @include('layouts.partials.header')

    <main class="px-6 | md:px-32">
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    <script src="{{ asset('/assets/js/app.js') }}"></script>

</body>
</html>