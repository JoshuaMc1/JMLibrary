<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="{{ session('theme', 'emerald') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="description" content="@yield('description', 'JMLibrary: sistema de gestión para bibliotecas.')">
    <meta name="keywords" content="@yield('keywords', 'JMLibrary, sistema de gestión, bibliotecas, administración, system, library, management')">
    <meta name="author" content="Joshua Mclean">
    <meta name="robots" content="@yield('robots', 'index, follow, translate')">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @laravelPWA
    <script src="{{ asset('src/js/app/theme-min.js') }}" async></script>
    @vite('resources/css/app.css')
    @yield('styles')
</head>

<body class="min-h-screen">
    @auth
        <x-navbar />
        <x-container class="px-3 py-3 md:px-0 md:py-6">
            @if (session('status'))
                <div class="flex justify-center items-center my-4">
                    <x-alert.alert :type="session('status.type')" :message="session('status.message')" />
                </div>
            @endif

            @yield('content')
        </x-container>
    @else
        @yield('content')
    @endauth

    @vite('resources/js/app.js')

    @yield('scripts')

    @auth
        <script src="{{ asset('src/js/app/nav-min.js') }}" async></script>
    @endauth

    <script src="{{ asset('src/js/app/lang-min.js') }}" async></script>
</body>

</html>
