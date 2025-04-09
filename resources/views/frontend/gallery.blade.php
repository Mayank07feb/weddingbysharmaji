@extends('components.main')

@section('content')

<!-- Banner Section -->
<section class="relative h-[400px] bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('{{ asset('asset/images/banner.jpg') }}');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 text-center px-6">
        <h1 class="text-5xl font-bold mb-2">Our Gallery</h1>
        <p class="text-lg text-gray-200">A glimpse into the moments we’ve captured</p>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto max-w-7xl px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-2">Captured Moments</h2>
            <p class="text-gray-600 text-lg">Explore highlights from our favorite photo sessions.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Static Image Cards -->
            <div class="overflow-hidden rounded-3xl shadow-lg group relative">
                <img src="/images/gallery/photo1.jpg" alt="Bridal Portrait" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-lg font-semibold">
                    View Photo
                </div>
            </div>

            <div class="overflow-hidden rounded-3xl shadow-lg group relative">
                <img src="/images/gallery/photo2.jpg" alt="Outdoor Session" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-lg font-semibold">
                    View Photo
                </div>
            </div>

            <div class="overflow-hidden rounded-3xl shadow-lg group relative">
                <img src="/images/gallery/photo3.jpg" alt="Studio Glamour" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-lg font-semibold">
                    View Photo
                </div>
            </div>

            <div class="overflow-hidden rounded-3xl shadow-lg group relative">
                <img src="/images/gallery/photo4.jpg" alt="Maternity Shoot" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-lg font-semibold">
                    View Photo
                </div>
            </div>

            <div class="overflow-hidden rounded-3xl shadow-lg group relative">
                <img src="/images/gallery/photo5.jpg" alt="Engagement Session" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-lg font-semibold">
                    View Photo
                </div>
            </div>

            <div class="overflow-hidden rounded-3xl shadow-lg group relative">
                <img src="/images/gallery/photo6.jpg" alt="Urban Fashion" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-lg font-semibold">
                    View Photo
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gray-100 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Want to see more or book your own session?</h2>
    <a href="/contact" class="inline-block mt-4 bg-orange-500 text-white font-bold px-8 py-3 rounded-full hover:bg-orange-600 transition shadow-lg">
        Contact Us
    </a>
</section>

@endsection
