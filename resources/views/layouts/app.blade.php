<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'StockSense') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-screen bg-[#F8FAFC] text-[#0F172A] antialiased">
    <div class="min-h-screen flex flex-col">
        <x-navbar />

        <main class="flex-1 py-8 px-4 sm:px-6 lg:px-8">
            @yield('content')
        </main>

        <x-footer />
    </div>

    @livewireScripts
</body>

</html>