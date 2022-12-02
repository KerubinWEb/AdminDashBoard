<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PushCart.Com</title>

    <!-- Fonts -->
    <link rel="shortcut icon" href="{{url('/icon/icons8-shopping-cart-40.png')}}" type="image/x-icon">

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="font-sans antialiased" x-data="mainState" :class="{dark: isDarkMode}" x-cloak>
        <div class="flex flex-col min-h-screen text-gray-900 bg-gray-100 dark:bg-dark-bg dark:text-gray-200">
            {{ $slot }}

            <x-footer />
        </div>

        <div class="fixed top-10 right-10">
            <x-button type="button" iconOnly variant="secondary" srText="Toggle dark mode" @click="toggleTheme">
                <x-heroicon-o-moon x-show="!isDarkMode" aria-hidden="true" class="w-6 h-6" />
                <x-heroicon-o-sun x-show="isDarkMode" aria-hidden="true" class="w-6 h-6" />
            </x-button>
        </div>
    </div>
</body>

</html>