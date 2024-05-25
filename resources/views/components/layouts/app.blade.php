<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <link rel="apple-touch-icon" sizes="180x180" href="https://laravel.com/img/favicon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="https://laravel.com/img/favicon/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="https://laravel.com/img/favicon/favicon-16x16.png" />
        <link rel="manifest" href="https://laravel.com/img/favicon/site.webmanifest" />
        <link rel="mask-icon" href="https://laravel.com/img/favicon/safari-pinned-tab.svg" color="#ff2d20" />
        <link rel="shortcut icon" href="https://laravel.com/img/favicon/favicon.ico" />

        <meta name="application-name" content="{{ config('app.name') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ $title }} | {{ config('app.name') }}</title>

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        @filamentStyles
        @vite([
            'public/css/style.css',
            'resources/css/app.css',
        ])
    </head>

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[650px]" src="{{ asset('img/blue-background.svg') }}" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                {{ $slot }}
            </div>
        </div>

        @livewire('notifications')

        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>
