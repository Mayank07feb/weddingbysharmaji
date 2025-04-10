@extends('components.main')

@section('content')
    <!-- Banner Section -->
    <section class="relative h-[400px] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('{{ asset('asset/images/banner.jpg') }}');">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 text-center px-6">
            <h1 class="text-5xl font-bold mb-2">Portrait Photography</h1>
            <p class="text-lg text-gray-200">Timeless portraits that tell your story</p>
        </div>
    </section>

    <!-- Portrait Showcase -->
    <section class="py-24 bg-white">
        <div class="container mx-auto max-w-7xl px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-gray-800 mb-3">Elegant and Expressive Portraits</h2>
                <p class="text-gray-600 text-lg">From studio setups to natural light — we capture personality, beauty, and emotion.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Portrait 1 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="{{ asset('asset/images/services-1.jpg') }}" alt="Portrait"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Classic Studio Portrait</h3>
                        <p class="text-gray-600 mb-4">A clean, professional shot capturing personality and poise.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>

                <!-- Portrait 2 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="{{ asset('asset/images/services-2.jpg') }}" alt="Outdoor Portrait"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Natural Light Portrait</h3>
                        <p class="text-gray-600 mb-4">Sunlit expressions captured in a serene outdoor setting.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>

                <!-- Portrait 3 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="{{ asset('asset/images/services-3.jpg') }}" alt="Family Portrait"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Family Portrait</h3>
                        <p class="text-gray-600 mb-4">Capturing love, laughter, and connection in a timeless family photo.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-orange-500 text-white text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Schedule Your Portrait Session</h2>
        <p class="text-lg mb-6">Whether it’s for personal branding, family, or just because — we’ll make it memorable.</p>
        <a href="/contact"
            class="inline-block bg-white text-orange-500 font-bold px-8 py-3 rounded-full hover:bg-orange-100 transition">
            Book Your Portrait
        </a>
    </section>
@endsection
