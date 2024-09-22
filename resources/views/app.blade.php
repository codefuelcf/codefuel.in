<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

  <title inertia>{{ config('app.name', 'Codefuel') }}</title>

  <!-- Fonts -->
  <!-- @googlefonts -->

  <!-- Routes -->
  <!-- @routes -->

  <!-- Scripts -->
  @viteReactRefresh
  @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
  @inertiaHead
</head>

<body>
  @inertia
</body>

</html>