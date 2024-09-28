<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name=”robots” content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

  <title>Codefuel</title>

  <!-- Fonts -->
  @googlefonts

  <!-- Routes -->
  @routes

  <!-- Scripts -->
  @viteReactRefresh
  @vite(['resources/js/app.jsx'])
  @inertiaHead
</head>

<body>

  @inertia

  <x-front.google-analytics-tag />

</body>

</html>