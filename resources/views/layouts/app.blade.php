<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>

            </header>
        @endif

        <!-- Page Content -->
        {{-- <div class="flex flex-row justify-between toggle">
            <label for="dark-toggle" class="flex items-center cursor-pointer">
                <div class="relative">
                    <input type="checkbox" name="dark-mode" id="dark-toggle" class="checkbox hidden">
                    <div class="block border-[1px] dark:border-white border-gray-900 w-14 h-8 rounded-full"></div>
                    <div class="dot absolute left-1 top-1 dark:bg-white bg-gray-800 w-6 h-6 rounded-full transition">
                    </div>
                </div>
                <div class="ml-3 dark:text-white text-gray-900 font-medium">
                    Dark Mode
                </div>
            </label>
        </div> --}}


        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
