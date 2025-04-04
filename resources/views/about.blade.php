<x-layouts.app>
    <!-- Hero Section with Background Image -->
    <header class="relative bg-gray-900 text-white text-center py-24 flex flex-col items-center justify-center">
        <div class="absolute inset-0 bg-cover bg-center brightness-50"
            style="background-image: url('{{ asset('images/book.jpg') }}');"></div>
        <div class="absolute inset-0 backdrop-blur-sm bg-black/30"></div>
        <div class="relative z-10 px-6">
            <h1 class="text-4xl font-bold">Discover Your Next Favorite Book</h1>
            <p class="mt-4 text-lg text-gray-300">Explore a vast collection of books, from classics to the latest
                releases.</p>
            <a wire:navigate href="/books"
                class="mt-6 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg font-semibold shadow-md hover:bg-blue-600 transition">Browse
                Books</a>
        </div>
    </header>

    <!-- Book Categories Section -->
    <section class="container mx-auto mt-10 p-6">
        <h2 class="text-3xl font-semibold text-center text-gray-200 mb-6">Explore Book Categories</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach ($categories as $category)
                <div class="bg-gray-800 p-6 shadow-lg rounded-lg hover:shadow-xl transition text-center">
                    <img src="{{ asset('storage/' . $category->img_path) }}" alt="{{ $category->name }} Image"
                        class="w-32 h-32 object-cover mx-auto rounded-full border-4 border-gray-700 shadow-md mb-4">
                    <h3 class="text-xl font-bold text-white">{{ $category->name }}</h3>
                    <p class="text-gray-400 mt-2">{{ Str::limit($category->body, 100) }}</p>
                    <a wire:navigate href="{{ route('categories.show', $category->id)}}"
                        class="text-blue-400 mt-4 block hover:text-blue-300 transition">Explore →</a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Readers' Testimonials Section -->
    <section class="bg-gray-950 text-white py-16 mt-12">
        <h2 class="text-3xl font-semibold text-center text-gray-200 mb-6">What Our Readers Say</h2>
        <div class="flex justify-center gap-10">
            @foreach ($testimonials as $testimonial)
            <div class="bg-gray-800 p-6 shadow-lg rounded-lg max-w-xs text-center">
                <p class="text-gray-300 italic">"{{ $testimonial->body }}"</p>
                <h3 class="text-xl font-bold mt-4 text-white">{{ $testimonial->name }}</h3>
                <p class="text-gray-400 text-sm">Ireland, Europe</p>
            </div> 
            @endforeach
        </div>
    </section>

    <!-- Interesting Book Facts Section -->
    <section class="container mx-auto mt-10 p-6">
        <h2 class="text-3xl font-semibold text-center text-gray-200 mb-6">Fun Book Facts</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
           @foreach ($bookFacts as $fact)
                <div class="bg-gray-800 p-6 shadow-lg rounded-lg hover:shadow-xl transition text-center">
                    <h3 class="text-xl font-bold text-white">Did You Know?</h3>
                    <p class="text-gray-400 mt-4">{{ $fact->fun_facts}}</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gray-950 text-white text-center py-12 mt-12">
        <h2 class="text-3xl font-bold">Join Our Community</h2>
        <p class="mt-2 text-lg text-gray-400">Stay updated with new releases, book recommendations, and exclusive
            content.</p>
        <a wire:navigate href="/login"
            class="mt-6 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg font-semibold shadow-md hover:bg-blue-600 transition">Sign
            Up Now</a>
    </section>


</x-layouts.app>
