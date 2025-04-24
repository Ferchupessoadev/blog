<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FerchuDev - @yield('title')</title>
    <!-- Alpine JS-->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.svg')}}" type="image/x-icon">
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/f845b9182b.js" crossorigin="anonymous"></script>
</head>
<body class="dark:bg-background-dark bg-background-light dark:text-text-dark text-text min-h-screen">
    <x-header></x-header>
    @yield('content')
    <x-footer></x-footer>
</body>
</html>
