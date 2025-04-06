<x-layouts.app >
    <div class="min-h-screen bg-gray-900 text-white py-12 px-6">
        <div class="max-w-3xl mx-auto bg-gray-800 rounded-2xl shadow-xl p-8 space-y-6">
            <!-- Book Cover -->
            <div class="flex justify-center">
                <img src="{{ asset('storage/' .  $book->img_path) ?? 'https://via.placeholder.com/300x400?text=No+Cover' }}"
                     alt="{{ $book->title }}"
                     class="w-64 h-auto rounded-xl shadow-md border border-gray-700">
            </div>
    
            <!-- Book Details -->
            <div class="space-y-2">
                <h1 class="text-3xl font-bold">{{ $book->title }}</h1>
                <p class="text-lg text-gray-400">by <span class="text-white">{{ $book->author }}</span></p>
                <p class="text-sm text-gray-500">Published: {{ \Carbon\Carbon::parse($book->edition)->format('Y') }}</p>
    
                <div class="mt-4">
                    <h2 class="text-xl font-semibold mb-2">Description</h2>
                    <p class="text-gray-300 leading-relaxed">{{ $book->body }}</p>
                </div>
            </div>
    
            <!-- Back Button -->
            <div class="mt-6">
                <a href="{{ url('/books') }}" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg transition">
                    ← Back to Book List
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>
