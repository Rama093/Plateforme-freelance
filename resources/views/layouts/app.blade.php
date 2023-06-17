<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Freelance'sn</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.2/dist/alpine.min.js" defer></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  @livewireStyles
</head>

<body>
  <div class="container mx-auto px-4">
    @include('partials.navbar')
    @yield('content')
  </div>
  <div class="container mx-auto mt-40">
    @include('partials.footer')
  </div>
  @livewireScripts
</body>

</html>