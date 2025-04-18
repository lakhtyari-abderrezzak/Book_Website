<x-layouts.app>

    <!-- Hero Section with Background Image -->
    <header class="relative bg-gray-900 text-white text-center py-24 flex flex-col items-center justify-center">

        <div class="absolute inset-0 bg-cover bg-center brightness-50"
        style="background-image: url('{{ asset('images/book.jpg') }}');">
    </div>

    <!-- Blur Overlay -->
    <div class="absolute inset-0 backdrop-blur-sm bg-black/30"></div>
           <div class="relative z-10 px-6">
            <h1 class="text-4xl font-bold">Discover Your Next Favorite Book</h1>
            <p class="mt-4 text-lg text-gray-300">Explore a vast collection of books, from classics to the latest
                releases.</p>
            <a href="/books" wire:navigate
                class="mt-6 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg font-semibold shadow-md hover:bg-blue-600 transition">
                Browse Books
            </a>
        </div>
    </header>

    <!-- Featured Books Section -->
    <section class="container mx-auto mt-10 p-6">
        <h2 class="text-3xl font-semibold text-center text-gray-200 mb-6 underline decoration-blue-500">Featured Books</h2>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- Sample Book Card -->
            @foreach ($featuredBooks as $book)
                <div class="bg-gray-800 p-4 shadow-lg rounded-lg hover:shadow-xl transition">
                    <img src="{{ $book->img_path }}" alt="Book Cover" class="w-full h-auto object-contain rounded">
                    <h3 class="text-xl font-bold mt-3 text-white">{{ $book->title }}</h3>
                    <p class="text-gray-400">{{ $book->author }}</p>
                    <p class="text-gray-300 mt-2 line-clamp-3">{{ $book->description }}</p>
                    <p class="text-gray-500 mt-2">Edition: {{ \Carbon\Carbon::parse($book->edition)->format('Y') }}</p>
                    <a href="/books/{{ $book->id }}" class="text-blue-400 font-semibold mt-2 inline-block hover:text-blue-300 transition">Read More →</a>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Latest Books Section -->
    <section class="container mx-auto mt-10 p-6">
        <h2 class="text-3xl font-semibold text-center text-gray-200 mb-6 underline decoration-blue-500">Latest Books</h2>
        <p class="text-center text-gray-400 mb-6">Stay updated with the latest releases in the literary world.</p>
        <div class="flex justify-center mb-6">
            <a href="/books" wire:navigate
                class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg font-semibold shadow-md hover:bg-blue-600 transition">
                View All Books
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach ($latestBooks as $book)
                <div class="bg-gray-800 p-4 shadow-lg rounded-lg hover:shadow-xl transition">
                    <img src="{{ $book->img_path }}" alt="Book Cover" class="w-full h-auto object-contain rounded">
                    
                    <h3 class="text-xl font-bold mt-3 text-white">{{ $book->title }}</h3>
                    <p class="text-gray-400">{{ $book->author }}</p>
        
                    <p class="text-gray-300 mt-2 line-clamp-3">{{ $book->description }}</p>
                    <p class="text-gray-500 mt-2">Edition: {{ \Carbon\Carbon::parse($book->edition)->format('Y') }}</p>
        
                    <a href="/books/{{$book->id}}" class="text-blue-400 font-semibold mt-3 inline-block hover:text-blue-300 transition">
                        Read More →
                    </a>
                </div>
            @endforeach
        </div>
        
    </section>

    <!-- Call to Action -->
    <section class="bg-gray-950 text-white text-center py-12 mt-12">
        <h2 class="text-3xl font-bold">Join Our Community</h2>
        <p class="mt-2 text-lg text-gray-400">Stay updated with new releases, book recommendations, and exclusive
            content.</p>
        <a wire:navigate href="{{route('login')}}"
            class="mt-6 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg font-semibold shadow-md hover:bg-blue-600 transition">
            Sign Up Now
        </a>
    </section>





</x-layouts.app>
