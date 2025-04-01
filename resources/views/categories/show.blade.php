<x-layouts.app>
    <div class="container mx-auto mt-10 p-6">
        <h1 class="text-4xl font-bold text-white">{{ $category->name }}</h1>
        <p class="text-gray-300 mt-2">Explore books under this category.</p>
        
        <div class="grid md:grid-cols-3 gap-6 mt-6">
            @foreach ($category->books as $book)
                <div class="bg-gray-800 p-4 shadow-lg rounded-lg hover:shadow-xl transition">
                    <img src="{{ $book->img_path }}" alt="Book Cover" class="w-full rounded">
                    <h3 class="text-xl font-bold mt-3 text-white">{{ $book->title }}</h3>
                    <a href="{{ route('books.show', $book->id) }}" class="text-blue-400 font-semibold mt-2 inline-block hover:text-blue-300 transition">Read More →</a>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>


