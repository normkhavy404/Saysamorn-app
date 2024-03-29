<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- @hasSection('title')
        <title>@yield('title')</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif --}}
    <title class="text-base font-muol">សាលាបឋមសិក្សា សាយសាម៉ន</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/storage/images/thsis.png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    @yield('body')

    @livewireScripts

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <x-livewire-alert::scripts />
</body>

</html>
