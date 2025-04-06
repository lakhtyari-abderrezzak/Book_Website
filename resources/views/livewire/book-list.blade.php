<div class="flex flex-col min-h-screen">

    <!-- Main Content -->
    <div class="container mx-auto mt-8 p-6 bg-gray-900 shadow-lg rounded-lg flex-grow">
        <h2 class="text-2xl font-semibold text-gray-400 mb-4">Book List</h2>
        
        <div class="w-full flex flex-col sm:flex-row justify-between items-center text-gray-300 my-3 gap-4">
            <div>
                <h3 class="text-lg sm:text-xl lg:text-2xl font-semibold">Hi! </h3>
            </div>
            <div class="w-full sm:w-auto">
                <form wire:submit.prevent class="flex items-center gap-3 bg-gray-800 p-2 rounded-lg">
                    <span class="text-gray-400">Search:</span>
                    <input type="text" wire:model.live.debounce.500ms="search" 
                           class="bg-gray-700 text-white p-2 rounded w-full sm:w-60 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </form>
            </div>
        </div>

        <!-- Card Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($books as $book)
            <div class="bg-gray-800 p-4 rounded-lg shadow-lg text-gray-300">
                <img src="{{ $book->img_path }}" alt="Book Cover" class="w-full rounded">

                <h3 class="text-lg sm:text-xl font-semibold text-white">{{ $book->title }}</h3>
                <p class="text-gray-400 mt-1">Author: {{ $book->author }}</p>
                <p class="text-gray-300 mt-2 line-clamp-3">{{ $book->description }}</p>
                <p class="text-gray-500 mt-2">Edition: {{ \Carbon\Carbon::parse($book->edition)->format('Y') }}</p>
                <a wire:navigate href="{{ route('books.show', $book->id)}}"
                    class="text-blue-400 mt-4 block hover:text-blue-300 transition">Explore →</a>
            </div>
            @endforeach
        </div>
        <div class="my-4">
            {{ $books->links() }}
        </div>
    </div>
</div>
