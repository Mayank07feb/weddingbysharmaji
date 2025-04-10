@extends('components.main')

@section('content')
    <!-- Banner Section -->
    <section class="relative h-[400px] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('{{ asset('asset/images/banner.jpg') }}');">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 text-center px-6">
            <h1 class="text-5xl font-bold mb-2">Pre-Wedding Moments</h1>
            <p class="text-lg text-gray-200">Celebrate your love story before the big day</p>
        </div>
    </section>

    <!-- Pre-Wedding Showcase -->
    <section class="py-24 bg-white">
        <div class="container mx-auto max-w-7xl px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-gray-800 mb-3">Romantic Pre-Wedding Shoots</h2>
                <p class="text-gray-600 text-lg">Capturing the chemistry, the glances, and the quiet promises before “I do”.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Pre-Wedding 1 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="{{ asset('asset/images/services-1.jpg') }}" alt="Pre-Wedding Shoot"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Sunset Beach Romance</h3>
                        <p class="text-gray-600 mb-4">Barefoot walks and golden skies, the perfect prelude to forever.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>

                <!-- Pre-Wedding 2 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="{{ asset('asset/images/services-2.jpg') }}" alt="Pre-Wedding Shoot"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Urban Chic Couple Shoot</h3>
                        <p class="text-gray-600 mb-4">City streets, rooftop views, and love in every frame.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>

                <!-- Pre-Wedding 3 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="{{ asset('asset/images/services-3.jpg') }}" alt="Pre-Wedding Shoot"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Countryside Love Story</h3>
                        <p class="text-gray-600 mb-4">Rustic charm, vintage bikes, and natural moments captured forever.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-orange-500 text-white text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready for Your Pre-Wedding Shoot?</h2>
        <p class="text-lg mb-6">Let’s create beautiful memories before your big day arrives.</p>
        <a href="/contact"
            class="inline-block bg-white text-orange-500 font-bold px-8 py-3 rounded-full hover:bg-orange-100 transition">
            Plan Your Shoot
        </a>
    </section>
@endsection
