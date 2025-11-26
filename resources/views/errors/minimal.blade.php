<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{ asset('img/logo.jpg')}}" type="image/x-icon">
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body {
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }
        </style>
    </head>
    <body class="text-white min-h-screen dark:bg-background-dark bg-background text-text dark:text-text-dark">
        <x-header></x-header>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
                    <div class="px-4 text-lg text-gray-500 border-r border-gray-400">
                        @yield('code')
                    </div>
                    <div class="px-4 text-lg font-medium text-gray-500">
                        @yield('message')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
