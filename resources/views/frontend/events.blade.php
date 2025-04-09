@extends('components.main')

@section('content')
    <!-- Banner Section -->
    <section class="relative h-[400px] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('{{ asset('asset/images/banner.jpg') }}');">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 text-center px-6">
            <h1 class="text-5xl font-bold mb-2">Event Highlights</h1>
            <p class="text-lg text-gray-200">Memories from the moments that mattered</p>
        </div>
    </section>


    <!-- Events Showcase -->
    <section class="py-24 bg-white">
        <div class="container mx-auto max-w-7xl px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-gray-800 mb-3">Recent Events We’ve Covered</h2>
                <p class="text-gray-600 text-lg">From weddings to birthday bashes, here’s a glimpse into the joy we’ve
                    captured.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Event 1 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="/images/events/wedding-event.jpg" alt="Wedding Event"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Elegant Wedding in Tuscany</h3>
                        <p class="text-gray-600 mb-4">A magical ceremony in the vineyards with romantic golden hour shots.
                        </p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="/images/events/birthday-event.jpg" alt="Birthday Party"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Luxury 1st Birthday Bash</h3>
                        <p class="text-gray-600 mb-4">Colorful decor, candid kids’ smiles, and unforgettable moments.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="/images/events/corporate-event.jpg" alt="Corporate Event"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Annual Tech Summit</h3>
                        <p class="text-gray-600 mb-4">Professional coverage with speaker highlights, networking moments, and
                            ambience.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>

                <!-- Event 4 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="/images/events/baby-shower.jpg" alt="Baby Shower"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Dreamy Baby Shower</h3>
                        <p class="text-gray-600 mb-4">Soft pastels and warm smiles filled this beautiful celebration of new
                            life.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>

                <!-- Event 5 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="/images/events/engagement-party.jpg" alt="Engagement Party"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Golden Hour Engagement</h3>
                        <p class="text-gray-600 mb-4">Sunset sparkles, laughter, and champagne under the stars.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>

                <!-- Event 6 -->
                <div class="bg-gray-50 rounded-3xl shadow-md hover:shadow-xl overflow-hidden">
                    <img src="/images/events/festival-event.jpg" alt="Festival Event"
                        class="w-full h-60 object-cover rounded-t-3xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Cultural Festival Coverage</h3>
                        <p class="text-gray-600 mb-4">Vibrant traditions, food, dance, and color brought to life through our
                            lens.</p>
                        <a href="/gallery" class="text-orange-500 font-semibold hover:underline">View Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-orange-500 text-white text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Planning an Event?</h2>
        <p class="text-lg mb-6">Let us help you preserve every detail of your special occasion.</p>
        <a href="/contact"
            class="inline-block bg-white text-orange-500 font-bold px-8 py-3 rounded-full hover:bg-orange-100 transition">
            Book Us Now
        </a>
    </section>
@endsection
