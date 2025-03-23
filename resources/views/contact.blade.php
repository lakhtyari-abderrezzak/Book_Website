<x-layouts.app>

    <!-- Hero Section -->
    <header class="relative bg-gray-900 text-white text-center py-24 flex flex-col items-center justify-center">
        <div class="absolute inset-0 bg-cover bg-center brightness-50"
            style="background-image: url('{{ asset('images/contact-us.jpg') }}');"></div>
        <div class="absolute inset-0 backdrop-blur-sm bg-black/30"></div>
        <div class="relative z-10 px-6">
            <h1 class="text-4xl font-bold">Get in Touch</h1>
            <p class="mt-4 text-lg text-gray-300">We’d love to hear from you! Reach out with any questions or feedback.
            </p>
        </div>
    </header>

    <!-- Contact Section -->
    <section class="container mx-auto mt-10 p-6">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Contact Info -->
            <div class="bg-gray-800 p-6 shadow-lg rounded-lg text-white">
                <h2 class="text-3xl font-semibold mb-4">Contact Information</h2>
                <p class="text-gray-400">Feel free to reach out to us using the details below or fill out the form.</p>

                <div class="mt-6 space-y-4">
                    <div class="flex items-center space-x-4">
                        <i class="fas fa-phone text-blue-400 text-xl"></i>
                        <span class="text-gray-300">+1 234 567 890</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <i class="fas fa-envelope text-blue-400 text-xl"></i>
                        <span class="text-gray-300">contact@bookstore.com</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <i class="fas fa-map-marker-alt text-blue-400 text-xl"></i>
                        <span class="text-gray-300">123 Book Street, New York, NY</span>
                    </div>
                </div>

                <!-- Social Icons -->
                <div class="mt-6 flex space-x-4">
                    <a href="#" class="text-blue-400 text-2xl hover:text-blue-300"><i
                            class="fab fa-facebook"></i></a>
                    <a href="#" class="text-blue-400 text-2xl hover:text-blue-300"><i
                            class="fab fa-twitter"></i></a>
                    <a href="#" class="text-blue-400 text-2xl hover:text-blue-300"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-gray-800 p-6 shadow-lg rounded-lg text-white">
                <h2 class="text-3xl font-semibold mb-4">Send Us a Message</h2>
                <form action="" method="POST" class="space-y-4">
                
                    <div>
                        <label for="name" class="block text-gray-300">Full Name</label>
                        <input type="text" id="name" wire:model="name" required
                            class="w-full p-3 bg-gray-900 text-white rounded-lg border border-gray-700 focus:border-blue-400 focus:ring focus:ring-blue-400">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-300">Email Address</label>
                        <input type="email" id="email" wire:model="email" required
                            class="w-full p-3 bg-gray-900 text-white rounded-lg border border-gray-700 focus:border-blue-400 focus:ring focus:ring-blue-400">
                    </div>
                    <div>
                        <label for="message" class="block text-gray-300">Your Message</label>
                        <textarea id="message" wire:model="message" rows="4" required
                            class="w-full p-3 bg-gray-900 text-white rounded-lg border border-gray-700 focus:border-blue-400 focus:ring focus:ring-blue-400"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-3 rounded-lg font-semibold shadow-md hover:bg-blue-600 transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

</x-layouts.app>
