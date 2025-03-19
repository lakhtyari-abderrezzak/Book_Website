<x-layouts.app>

    <!-- Hero Section with Background Image -->
    <header class="relative bg-gray-900 text-white text-center py-24 flex flex-col items-center justify-center">
        <div
            class="absolute inset-0 bg-[url('https://source.unsplash.com/1600x900/?books,library')] bg-cover bg-center brightness-50">
        </div>
        <div class="relative z-10 px-6">
            <h1 class="text-4xl font-bold">Discover Your Next Favorite Book</h1>
            <p class="mt-4 text-lg text-gray-300">Explore a vast collection of books, from classics to the latest
                releases.</p>
            <a href="/books"
                class="mt-6 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg font-semibold shadow-md hover:bg-blue-600 transition">
                Browse Books
            </a>
        </div>
    </header>

    <!-- Featured Books Section -->
    <section class="container mx-auto mt-10 p-6">
        <h2 class="text-3xl font-semibold text-center text-gray-200 mb-6">Featured Books</h2>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- Sample Book Card -->
            @foreach ($featuredBooks as $book)
                <div class="bg-gray-800 p-4 shadow-lg rounded-lg hover:shadow-xl transition">
                    <img src="{{ $book->img_path }}" alt="Book Cover" class="w-full rounded">
                    <h3 class="text-xl font-bold mt-3 text-white">{{ $book->title }}</h3>
                    <p class="text-gray-400">{{ $book->author }}</p>
                    <a href="#" class="text-blue-400 font-semibold mt-2 inline-block hover:text-blue-300 transition">Read More →</a>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Latest Books Section -->
    <section class="container mx-auto mt-10 p-6">
        <h2 class="text-3xl font-semibold text-center text-gray-200 mb-6">Latest Books</h2>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- Sample Book Card -->
            @foreach ($latestBooks as $book)
                <div class="bg-gray-800 p-4 shadow-lg rounded-lg hover:shadow-xl transition">
                    <img src="{{ $book->img_path }}" alt="Book Cover" class="w-full rounded">
                    <h3 class="text-xl font-bold mt-3 text-white">{{ $book->title }}</h3>
                    <p class="text-gray-400">{{ $book->author }}</p>
                    <a href="#" class="text-blue-400 font-semibold mt-2 inline-block hover:text-blue-300 transition">Read More →</a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gray-950 text-white text-center py-12 mt-12">
        <h2 class="text-3xl font-bold">Join Our Community</h2>
        <p class="mt-2 text-lg text-gray-400">Stay updated with new releases, book recommendations, and exclusive
            content.</p>
        <a href="/signup"
            class="mt-6 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg font-semibold shadow-md hover:bg-blue-600 transition">
            Sign Up Now
        </a>
    </section>





</x-layouts.app>
