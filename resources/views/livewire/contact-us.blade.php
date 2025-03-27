<div class="bg-gray-800 p-6 shadow-lg rounded-lg text-white">
    <h2 class="text-3xl font-semibold mb-4">Send Us a Message</h2>
    @if (session()->has('success'))
        <x-success-message />
    @endif
    <form  wire:submit.prevent='submitForm' class="space-y-4">

        <div>
            <label for="name" class="block text-gray-300">Full Name</label>
            <input type="text" id="name" wire:model="name" required
                class="w-full p-3 bg-gray-900 text-white rounded-lg border border-gray-700 focus:border-blue-400 focus:ring focus:ring-blue-400">
            @error('name')
                <div class="text-red-600 text-sm my-2">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email" class="block text-gray-300">Email Address</label>
            <input type="email" id="email" wire:model="email" required
                class="w-full p-3 bg-gray-900 text-white rounded-lg border border-gray-700 focus:border-blue-400 focus:ring focus:ring-blue-400">
            @error('email')
                <div class="text-red-600 text-sm my-2">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="body" class="block text-gray-300">Your Message</label>
            <textarea id="body" wire:model="body" rows="4" required
                class="w-full p-3 bg-gray-900 text-white rounded-lg border border-gray-700 focus:border-blue-400 focus:ring focus:ring-blue-400"></textarea>
            @error('body')
                <div class="text-red-600 text-sm my-2">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" wire:loading.attr='disabled'
            class="w-full bg-blue-500 text-white py-3 rounded-lg font-semibold shadow-md hover:bg-blue-600 transition">
            <span wire:loading.remove>Send Message</span>
            <span wire:loading class="flex items-center">
                {{-- <svg class="animate-spin h-5 w-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4l3-3-3-3V4a8 8 0 00-8 8H4z"></path>
                </svg> --}}
                Sending...
            </span>
        </button>
    </form>
</div>
