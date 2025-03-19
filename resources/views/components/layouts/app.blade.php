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
</head>

<body class="bg-black/90">



    <nav x-data="{ open: false }" class="bg-gray-900 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <x-app-logo />

            <!-- Mobile Menu Button -->
            <button @click="open = !open" class="md:hidden focus:outline-none" aria-label="Toggle menu">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>

            <!-- Desktop Navigation Links -->
            <ul class="hidden md:flex space-x-6">
                <li><a href="/" class="hover:text-yellow-400">Home</a></li>
                <li><a href="/books" class="hover:text-yellow-400">Books</a></li>
                <li><a href="/about" class="hover:text-yellow-400">About</a></li>
                <li><a href="/contact" class="hover:text-yellow-400">Contact</a></li>
            </ul>
        </div>

        <!-- Mobile Dropdown Menu -->
        <div x-show="open" class="md:hidden bg-gray-800 text-white mt-2 rounded-lg shadow-lg">
            <ul class="flex flex-col space-y-2 p-4">
                <li><a href="/" class="block py-2 px-4 hover:bg-gray-700 rounded">Home</a></li>
                <li><a href="/books" class="block py-2 px-4 hover:bg-gray-700 rounded">Books</a></li>
                <li><a href="/about" class="block py-2 px-4 hover:bg-gray-700 rounded">About</a></li>
                <li><a href="/contact" class="block py-2 px-4 hover:bg-gray-700 rounded">Contact</a></li>
            </ul>
        </div>
    </nav>




    {{ $slot }}


    <footer class="text-center p-4 bg-gray-800 text-white mt-10">
        &copy; 2025 Book Haven. All rights reserved.
    </footer>

</body>

</html>
