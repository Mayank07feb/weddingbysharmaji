@extends('components.main')

@section('content')
    <!-- Banner Section -->
    <section class="relative h-[400px] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('{{ asset('asset/images/banner.jpg') }}');">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 text-center px-6">
            <h1 class="text-5xl font-bold mb-2">Our Blog</h1>
            <p class="text-lg text-gray-200">Insights, stories & tips from behind the lens</p>
        </div>
    </section>

    <!-- Blog Posts -->
    <section class="py-24 bg-white">
        <div class="container mx-auto max-w-7xl px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-gray-800 mb-3">Latest Blog Posts</h2>
                <p class="text-gray-600 text-lg">Explore photography stories, client journeys, and helpful tips.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Blog Post 1 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="{{ asset('asset/images/blog1.jpg') }}" alt="Blog 1"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">5 Secrets to Stunning Wedding Photos</h3>
                        <p class="text-gray-600 mb-4">From lighting to emotions—capture the essence of your big day.</p>
                        <a href="#" class="text-orange-500 font-semibold hover:underline">Read More</a>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="{{ asset('asset/images/blog2.jpg') }}" alt="Blog 2"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Best Pre-Wedding Shoot Locations of 2025</h3>
                        <p class="text-gray-600 mb-4">Check out the dreamiest destinations to capture your love story.</p>
                        <a href="#" class="text-orange-500 font-semibold hover:underline">Read More</a>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="{{ asset('asset/images/blog3.jpg') }}" alt="Blog 3"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">The Art of Candid Photography</h3>
                        <p class="text-gray-600 mb-4">Why candid moments are often the most memorable and how we capture
                            them.</p>
                        <a href="#" class="text-orange-500 font-semibold hover:underline">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-orange-500 text-white text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Have a Story to Capture?</h2>
        <p class="text-lg mb-6">Let’s turn your moments into unforgettable visuals. Reach out today!</p>
        <a href="/contact"
            class="inline-block bg-white text-orange-500 font-bold px-8 py-3 rounded-full hover:bg-orange-100 transition">
            Book a Session
        </a>
    </section>
@endsection
