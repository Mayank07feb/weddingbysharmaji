@extends('components.main')

@section('content')

<!-- Banner Section -->
<section class="relative h-[400px] bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('{{ asset('asset/images/banner.jpg') }}');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 text-center px-6">
        <h1 class="text-5xl font-bold mb-2">Our Services</h1>
        <p class="text-lg text-gray-200">Capturing life’s most beautiful moments with creativity and style</p>
    </div>
</section>

<!-- Services Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto max-w-7xl px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-2">What We Offer</h2>
            <p class="text-gray-600 text-lg">From intimate portraits to grand events — we capture every detail.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Service 1 -->
            <div class="bg-gray-50 rounded-3xl p-8 shadow-md hover:shadow-xl transition text-center">
                <img src="{{asset('asset/images/services-1.jpg')}}" alt="Wedding Photography" class="w-full h-52 object-cover rounded-2xl mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Wedding Photography</h3>
                <p class="text-gray-600 mb-4">Timeless wedding day memories crafted with elegance.</p>
                <a href="/contact" class="text-orange-500 font-semibold hover:underline">Book Now</a>
            </div>

            <!-- Service 2 -->
            <div class="bg-gray-50 rounded-3xl p-8 shadow-md hover:shadow-xl transition text-center">
                <img src="{{asset('asset/images/services-2.jpg')}}" alt="Pre-Wedding Shoots" class="w-full h-52 object-cover rounded-2xl mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Pre-Wedding Shoots</h3>
                <p class="text-gray-600 mb-4">Creative and romantic sessions to tell your love story.</p>
                <a href="/contact" class="text-orange-500 font-semibold hover:underline">Book Now</a>
            </div>

            <!-- Service 3 -->
            <div class="bg-gray-50 rounded-3xl p-8 shadow-md hover:shadow-xl transition text-center">
                <img src="{{asset('asset/images/services-3.jpg')}}" alt="Portrait Sessions" class="w-full h-52 object-cover rounded-2xl mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Portrait Sessions</h3>
                <p class="text-gray-600 mb-4">Professional and personal portrait photography.</p>
                <a href="/contact" class="text-orange-500 font-semibold hover:underline">Book Now</a>
            </div>

            <!-- Service 4 -->
            <div class="bg-gray-50 rounded-3xl p-8 shadow-md hover:shadow-xl transition text-center">
                <img src="{{asset('asset/images/services-1.jpg')}}" alt="Maternity Shoots" class="w-full h-52 object-cover rounded-2xl mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Maternity Shoots</h3>
                <p class="text-gray-600 mb-4">Celebrate motherhood with graceful maternity portraits.</p>
                <a href="/contact" class="text-orange-500 font-semibold hover:underline">Book Now</a>
            </div>

            <!-- Service 5 -->
            <div class="bg-gray-50 rounded-3xl p-8 shadow-md hover:shadow-xl transition text-center">
                <img src="{{asset('asset/images/services-2.jpg')}}" alt="Baby Photography" class="w-full h-52 object-cover rounded-2xl mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Baby & Kids Photography</h3>
                <p class="text-gray-600 mb-4">Candid, adorable baby and children’s portraits.</p>
                <a href="/contact" class="text-orange-500 font-semibold hover:underline">Book Now</a>
            </div>

            <!-- Service 6 -->
            <div class="bg-gray-50 rounded-3xl p-8 shadow-md hover:shadow-xl transition text-center">
                <img src="{{asset('asset/images/services-3.jpg')}}" alt="Birthday Events" class="w-full h-52 object-cover rounded-2xl mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Birthday & Celebrations</h3>
                <p class="text-gray-600 mb-4">Capture joy and laughter from your special day.</p>
                <a href="/contact" class="text-orange-500 font-semibold hover:underline">Book Now</a>
            </div>

            <!-- Service 7 -->
            <div class="bg-gray-50 rounded-3xl p-8 shadow-md hover:shadow-xl transition text-center">
                <img src="{{asset('asset/images/services-1.jpg')}}" alt="Event Photography" class="w-full h-52 object-cover rounded-2xl mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Event Coverage</h3>
                <p class="text-gray-600 mb-4">Corporate functions, cultural events & personal gatherings.</p>
                <a href="/contact" class="text-orange-500 font-semibold hover:underline">Book Now</a>
            </div>

            <!-- Service 8 -->
            <div class="bg-gray-50 rounded-3xl p-8 shadow-md hover:shadow-xl transition text-center">
                <img src="{{asset('asset/images/services-2.jpg')}}" alt="Product Photography" class="w-full h-52 object-cover rounded-2xl mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Product Photography</h3>
                <p class="text-gray-600 mb-4">High-quality product shots for eCommerce & branding.</p>
                <a href="/contact" class="text-orange-500 font-semibold hover:underline">Book Now</a>
            </div>

            <!-- Service 9 -->
            <div class="bg-gray-50 rounded-3xl p-8 shadow-md hover:shadow-xl transition text-center">
                <img src="{{asset('asset/images/services-3.jpg')}}" alt="Cinematic Videography" class="w-full h-52 object-cover rounded-2xl mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Cinematic Videography</h3>
                <p class="text-gray-600 mb-4">Highlight reels and full coverage with cinematic style.</p>
                <a href="/contact" class="text-orange-500 font-semibold hover:underline">Book Now</a>
            </div>

            <!-- Service 10 -->
            <div class="bg-gray-50 rounded-3xl p-8 shadow-md hover:shadow-xl transition text-center">
                <img src="{{asset('asset/images/services-1.jpg')}}" alt="Drone Photography" class="w-full h-52 object-cover rounded-2xl mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Drone Photography</h3>
                <p class="text-gray-600 mb-4">Aerial shots for weddings, venues, and real estate.</p>
                <a href="/contact" class="text-orange-500 font-semibold hover:underline">Book Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-orange-500 text-white text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-4">Looking for a Custom Package?</h2>
    <p class="text-lg mb-6">Let’s collaborate to create something beautiful and unique.</p>
    <a href="/contact" class="inline-block bg-white text-gray-700 font-bold px-8 py-3 rounded-full hover:bg-orange-100 transition">
        Contact Us
    </a>
</section>

@endsection
