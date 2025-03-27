<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" 
    x-show="show" class="bg-green-500 text-white p-4 rounded-lg shadow-md text-center transition-opacity duration-500">
   {{ session('success') }}
</div>