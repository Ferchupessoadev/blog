<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Alpine JS -->
    <!-- TODO: change to vite -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Favicon -->
    <!-- TODO: change favicon -->
    <link rel="icon" href="{{ asset('favicon.svg')}}" type="image/x-icon">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Icons -->
    <!-- TODO: change to vite -->
    <script src="https://kit.fontawesome.com/f845b9182b.js" crossorigin="anonymous"></script>
</head>
<body>
    {{ $slot }}
</body>
</html>
