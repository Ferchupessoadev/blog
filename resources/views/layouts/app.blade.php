<!DOCTYPE html>
<html class="h-full min-h-screen w-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <!-- TODO: change favicon -->
    <link rel="icon" href="{{ asset('img/logo_2_ferchudev.png')}}" type="image/x-icon">
    <title>ferchudev.com | @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Icons -->
</head>
<body class="text-white min-h-screen dark:bg-background-dark bg-background text-text dark:text-text-dark">
    <x-header></x-header>
    @yield('content')
    <x-footer></x-footer>
    <!-- Lucide -->
</body>
</html>
