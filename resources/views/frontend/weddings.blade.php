@extends('components.main')

@section('content')
    <!-- Banner Section -->
    <section class="relative h-[400px] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('{{ asset('asset/images/banner.jpg') }}');">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 text-center px-6">
            <h1 class="text-5xl font-bold mb-2">Weddings</h1>
            <p class="text-lg text-gray-200">Capturing timeless love stories through our lens</p>
        </div>
    </section>

    <!-- Wedding Showcase -->
    <section class="py-24 bg-white">
        <div class="container mx-auto max-w-7xl px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-gray-800 mb-3">Unforgettable Wedding Moments</h2>
                <p class="text-gray-600 text-lg">From intimate ceremonies to grand celebrations, explore the magic we’ve captured.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Wedding 1 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="{{ asset('asset/images/services-1.jpg') }}" alt="Wedding 1"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Elegant Vineyard Wedding</h3>
                        <p class="text-gray-600 mb-4">Romance under the Tuscan sun with golden hour magic.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>

                <!-- Wedding 2 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="{{ asset('asset/images/services-2.jpg') }}" alt="Wedding 2"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Luxury Destination Wedding</h3>
                        <p class="text-gray-600 mb-4">A beachside vow exchange with a view to remember forever.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>

                <!-- Wedding 3 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="{{ asset('asset/images/services-3.jpg') }}" alt="Wedding 3"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Classic Church Ceremony</h3>
                        <p class="text-gray-600 mb-4">Tradition, elegance, and heartfelt moments in every frame.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-orange-500 text-white text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Getting Married?</h2>
        <p class="text-lg mb-6">Let us beautifully document the beginning of your forever.</p>
        <a href="/contact"
            class="inline-block bg-white text-orange-500 font-bold px-8 py-3 rounded-full hover:bg-orange-100 transition">
            Book Your Wedding Shoot
        </a>
    </section>
@endsection
