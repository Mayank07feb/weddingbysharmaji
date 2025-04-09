@extends('components.main')

@section('content')
    <!-- Packages Header Section -->
    <section class="relative h-[400px] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('{{ asset('asset/images/banner.jpg') }}');">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 text-center px-6">
            <h1 class="text-5xl font-bold mb-2">OUR PACKAGES</h1>
            <p class="text-lg text-gray-200">Explore our photography offerings tailored for every moment</p>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h5 class="text-orange-500 font-medium mb-2">OUR PACKAGES</h5>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Photography Packages</h2>
                <div class="w-24 h-1 bg-pink-500 mx-auto mt-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4">
                    Choose from our carefully crafted packages designed to meet your specific needs. Custom packages also
                    available upon request.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Package 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-orange-500 text-white py-6 text-center">
                        <h3 class="text-2xl font-bold">Basic Package</h3>
                        <p class="text-orange-100">Perfect for Small Events</p>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-6">
                            <span class="text-4xl font-bold text-gray-800">₹15,000</span>
                            <span class="text-gray-600">/event</span>
                        </div>
                        <ul class="space-y-3 text-gray-600 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> 4 Hours Coverage
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> 1 Photographer
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> 100 Digital Photos
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> Basic Editing
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> Online Gallery
                            </li>
                        </ul>
                        <a href="#"
                            class="block text-center bg-orange-500 text-white font-medium py-3 rounded-lg hover:bg-orange-600 transition-colors">
                            Book Now
                        </a>
                    </div>
                </div>

                <!-- Package 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform md:-translate-y-6">
                    <div class="bg-pink-600 text-white py-8 text-center">
                        <div class="inline-block px-3 py-1 bg-white text-pink-600 text-xs font-bold rounded-full mb-2">
                            MOST POPULAR
                        </div>
                        <h3 class="text-2xl font-bold">Premium Package</h3>
                        <p class="text-pink-100">Ideal for Weddings</p>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-6">
                            <span class="text-4xl font-bold text-gray-800">₹45,000</span>
                            <span class="text-gray-600">/event</span>
                        </div>
                        <ul class="space-y-3 text-gray-600 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> Full Day Coverage (12 Hours)
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> 2 Photographers
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> 500+ Digital Photos
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> Advanced Editing
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> Online Gallery
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> Photo Album (20 Pages)
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> Highlight Video (5 Minutes)
                            </li>
                        </ul>
                        <a href="#"
                            class="block text-center bg-pink-600 text-white font-medium py-3 rounded-lg hover:bg-pink-700 transition-colors">
                            Book Now
                        </a>
                    </div>
                </div>

                <!-- Package 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-orange-500 text-white py-6 text-center">
                        <h3 class="text-2xl font-bold">Luxury Package</h3>
                        <p class="text-orange-100">For Complete Experience</p>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-6">
                            <span class="text-4xl font-bold text-gray-800">₹75,000</span>
                            <span class="text-gray-600">/event</span>
                        </div>
                        <ul class="space-y-3 text-gray-600 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> Pre-Wedding + Wedding (2 Days)
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> 3 Photographers + 1 Videographer
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> 1000+ Digital Photos
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> Premium Editing
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> Online Gallery
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> Deluxe Photo Album (40 Pages)
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i> Full Wedding Film (30+ Minutes)
                            </li>
                        </ul>
                        <a href="#"
                            class="block text-center bg-orange-500 text-white font-medium py-3 rounded-lg hover:bg-orange-600 transition-colors">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
