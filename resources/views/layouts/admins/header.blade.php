<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <header class="min-w-screen bg-blue-900 h-fit">
            <div class="navbar p-4 spacex-2 flex justify-between">
                <p class="text-white font-semibold italic items-center justify-center text-2xl">Konselink.v2</p>
                <input class="rounded border-2 border-yellow-500" type="text" placeholder="search">
            </div>
        </header>
    </body>
</html>
