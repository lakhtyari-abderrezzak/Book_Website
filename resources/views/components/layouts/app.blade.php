<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <!-- Alpine.js for mobile menu toggle -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    @vite('resources/css/app.css')
    @livewireStyles
</head>


<body class="bg-black/90 flex flex-col min-h-screen">



    <livewire:navigation-menu />




    <div class="flex-grow">
        {{ $slot }}
    </div>

    <footer class="text-center p-4 bg-gray-800 text-white mt-10">
        &copy; 2025 Book Haven. All rights reserved.
    </footer>

    @livewireScripts

    <script>
          document.addEventListener('DOMContentLoaded', () => {
        const menuBtn = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    });
    </script>
</body>

</html>
