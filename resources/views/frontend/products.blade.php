@extends('components.main')

@section('content')
    <!-- Banner Section -->
    <section class="relative h-[400px] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('{{ asset('asset/images/banner.jpg') }}');">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 text-center px-6">
            <h1 class="text-5xl font-bold mb-2">Product Photography</h1>
            <p class="text-lg text-gray-200">Visuals that make your products irresistible</p>
        </div>
    </section>

    <!-- Products Showcase -->
    <section class="py-24 bg-white">
        <div class="container mx-auto max-w-7xl px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-gray-800 mb-3">Bring Your Products to Life</h2>
                <p class="text-gray-600 text-lg">Sharp, stylish, and high-converting photos for your brand and eCommerce.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Product 1 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="{{ asset('asset/images/services-1.jpg') }}" alt="Product Shot"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Minimalist Studio Product</h3>
                        <p class="text-gray-600 mb-4">Clean backdrop highlighting product details perfectly.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="{{ asset('asset/images/services-2.jpg') }}" alt="Lifestyle Product"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Lifestyle Product Shot</h3>
                        <p class="text-gray-600 mb-4">Real-world settings that tell your product’s story beautifully.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="{{ asset('asset/images/services-3.jpg') }}" alt="Creative Product Setup"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Creative Flat Lay</h3>
                        <p class="text-gray-600 mb-4">Stylized flat lays for social media and advertising campaigns.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-orange-500 text-white text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Need Product Photos That Sell?</h2>
        <p class="text-lg mb-6">Let us help you showcase your product in the best light — literally.</p>
        <a href="/contact"
            class="inline-block bg-white text-orange-500 font-bold px-8 py-3 rounded-full hover:bg-orange-100 transition">
            Book a Product Shoot
        </a>
    </section>
@endsection
