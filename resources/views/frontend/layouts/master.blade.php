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
    <body class="w-full antialiased text-white font-roboto">
            <div class="min-h-screen bg-black">
                <div class="max-w-[1249px] w-full mx-auto">
                    <div class="flex">
                        @include('frontend.layouts.left-sidebar')
                        <div class="max-w-[600px] w-full border-solid border-x-[1px] border-white-border">
                            @yield('content')
                        </div>
                        @include('frontend.layouts.right-sidebar')
                    </div>
                </div>
            </div>
    </body>
</html>
