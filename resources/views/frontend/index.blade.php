@extends('components.main')

@section('content')
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            font-size: 20px;
        }

        .hero-gradient {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.1));
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }
    </style>


    <!-- Hero Section -->
    <section class="relative h-screen overflow-hidden">
        <!-- Background Video -->
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('asset/videos/8997516-hd_1920_1080_30fps.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/20 z-10"></div>

        <!-- Hero Content -->
        <div class="absolute inset-0 flex items-center z-20">
            <div class="container mx-auto px-4">
                <div class="max-w-xl">
                    <h5 class="text-orange-400 font-semibold mb-4">PREMIUM PHOTOGRAPHY SERVICES</h5>
                    <h1 class="text-4xl md:text-6xl text-white font-bold mb-6">Capturing Your <br><span
                            class="text-pink-500">Beautiful Moments</span></h1>
                    <p class="text-gray-200 text-lg mb-8">We specialize in wedding photography, portraits, and events. Let
                        us make your special moments last forever.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#"
                            class="bg-orange-500 hover:bg-orange-600 text-white font-medium px-6 py-3 rounded-lg transition-colors">View
                            Portfolio</a>
                        <a href="#"
                            class="bg-transparent border-2 border-white text-white font-medium px-6 py-3 rounded-lg hover:bg-white hover:text-orange-500 transition-all">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h5 class="text-orange-500 font-medium mb-2">WHAT WE OFFER</h5>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Our Photography Services</h2>
                <div class="w-24 h-1 bg-pink-500 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="service-card bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300">
                    <img src="/api/placeholder/600/400" alt="Wedding Photography" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="material-icons text-pink-500 text-3xl mb-3">favorite</span>
                        <h3 class="text-xl font-bold mb-2">Wedding Photography</h3>
                        <p class="text-gray-600 mb-4">From pre-wedding shoots to reception coverage, we ensure every moment
                            of your special day is captured with artistry and attention to detail.</p>
                        <a href="#"
                            class="text-orange-500 font-medium flex items-center hover:text-orange-600 transition-colors">
                            Learn More
                            <span class="material-icons ml-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="service-card bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300">
                    <img src="/api/placeholder/600/400" alt="Portrait Photography" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="material-icons text-pink-500 text-3xl mb-3">photo_camera</span>
                        <h3 class="text-xl font-bold mb-2">Portrait Photography</h3>
                        <p class="text-gray-600 mb-4">Professional portrait sessions for individuals, couples, and families
                            in our studio or at outdoor locations of your choice.</p>
                        <a href="#"
                            class="text-orange-500 font-medium flex items-center hover:text-orange-600 transition-colors">
                            Learn More
                            <span class="material-icons ml-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="service-card bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300">
                    <img src="/api/placeholder/600/400" alt="Event Photography" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="material-icons text-pink-500 text-3xl mb-3">celebration</span>
                        <h3 class="text-xl font-bold mb-2">Event Photography</h3>
                        <p class="text-gray-600 mb-4">Corporate events, birthday parties, anniversaries, and more - we
                            document your gatherings with a professional approach.</p>
                        <a href="#"
                            class="text-orange-500 font-medium flex items-center hover:text-orange-600 transition-colors">
                            Learn More
                            <span class="material-icons ml-1">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-flex items-center px-6 py-3 border border-orange-500 text-orange-500 font-medium rounded-lg hover:bg-orange-500 hover:text-white transition-colors">
                    View All Services
                    <span class="material-icons ml-2">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Portfolio Gallery Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h5 class="text-orange-500 font-medium mb-2">OUR WORK</h5>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Featured Photography</h2>
                <div class="w-24 h-1 bg-pink-500 mx-auto mt-4"></div>
            </div>

            <!-- Gallery Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="filter-btn px-6 py-2 bg-orange-500 text-white font-medium rounded-full"
                    data-filter="all">All</button>
                <button
                    class="filter-btn px-6 py-2 bg-gray-200 text-gray-700 font-medium rounded-full hover:bg-orange-500 hover:text-white transition-colors"
                    data-filter="wedding">Weddings</button>
                <button
                    class="filter-btn px-6 py-2 bg-gray-200 text-gray-700 font-medium rounded-full hover:bg-orange-500 hover:text-white transition-colors"
                    data-filter="prewedding">Pre-Wedding</button>
                <button
                    class="filter-btn px-6 py-2 bg-gray-200 text-gray-700 font-medium rounded-full hover:bg-orange-500 hover:text-white transition-colors"
                    data-filter="portrait">Portraits</button>
                <button
                    class="filter-btn px-6 py-2 bg-gray-200 text-gray-700 font-medium rounded-full hover:bg-orange-500 hover:text-white transition-colors"
                    data-filter="event">Events</button>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Gallery Items -->
                <div class="gallery-item relative overflow-hidden rounded-lg group" data-category="wedding">
                    <img src="/api/placeholder/600/600" alt="Gallery Image"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="gallery-overlay absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 transition-opacity duration-300 flex flex-col justify-end p-4">
                        <h4 class="text-white font-medium">Royal Wedding</h4>
                        <p class="text-gray-300 text-sm">Wedding Photography</p>
                    </div>
                </div>

                <div class="gallery-item relative overflow-hidden rounded-lg group" data-category="prewedding">
                    <img src="/api/placeholder/600/600" alt="Gallery Image"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="gallery-overlay absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 transition-opacity duration-300 flex flex-col justify-end p-4">
                        <h4 class="text-white font-medium">Beach Engagement</h4>
                        <p class="text-gray-300 text-sm">Pre-Wedding Shoot</p>
                    </div>
                </div>

                <div class="gallery-item relative overflow-hidden rounded-lg group" data-category="event">
                    <img src="/api/placeholder/600/600" alt="Gallery Image"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="gallery-overlay absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 transition-opacity duration-300 flex flex-col justify-end p-4">
                        <h4 class="text-white font-medium">Corporate Event</h4>
                        <p class="text-gray-300 text-sm">Event Photography</p>
                    </div>
                </div>

                <div class="gallery-item relative overflow-hidden rounded-lg group" data-category="portrait">
                    <img src="/api/placeholder/600/600" alt="Gallery Image"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="gallery-overlay absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 transition-opacity duration-300 flex flex-col justify-end p-4">
                        <h4 class="text-white font-medium">Family Portrait</h4>
                        <p class="text-gray-300 text-sm">Studio Photography</p>
                    </div>
                </div>

                <div class="gallery-item relative overflow-hidden rounded-lg group" data-category="wedding">
                    <img src="/api/placeholder/600/600" alt="Gallery Image"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="gallery-overlay absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 transition-opacity duration-300 flex flex-col justify-end p-4">
                        <h4 class="text-white font-medium">Traditional Ceremony</h4>
                        <p class="text-gray-300 text-sm">Wedding Photography</p>
                    </div>
                </div>

                <div class="gallery-item relative overflow-hidden rounded-lg group" data-category="prewedding">
                    <img src="/api/placeholder/600/600" alt="Gallery Image"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="gallery-overlay absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 transition-opacity duration-300 flex flex-col justify-end p-4">
                        <h4 class="text-white font-medium">Mountain Pre-Wedding</h4>
                        <p class="text-gray-300 text-sm">Pre-Wedding Shoot</p>
                    </div>
                </div>

                <div class="gallery-item relative overflow-hidden rounded-lg group" data-category="event">
                    <img src="/api/placeholder/600/600" alt="Gallery Image"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="gallery-overlay absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 transition-opacity duration-300 flex flex-col justify-end p-4">
                        <h4 class="text-white font-medium">Birthday Celebration</h4>
                        <p class="text-gray-300 text-sm">Event Photography</p>
                    </div>
                </div>

                <div class="gallery-item relative overflow-hidden rounded-lg group" data-category="portrait">
                    <img src="/api/placeholder/600/600" alt="Gallery Image"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="gallery-overlay absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 transition-opacity duration-300 flex flex-col justify-end p-4">
                        <h4 class="text-white font-medium">Professional Headshot</h4>
                        <p class="text-gray-300 text-sm">Portrait Photography</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-flex items-center px-6 py-3 bg-orange-500 text-white font-medium rounded-lg hover:bg-orange-600 transition-colors">
                    View Full Gallery
                    <span class="material-icons ml-2">photo_library</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Filter Script -->
    <script>
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.getAttribute('data-filter');
                document.querySelectorAll('.gallery-item').forEach(item => {
                    const category = item.getAttribute('data-category');
                    if (filter === 'all' || category === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });

                // Button active styling
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('bg-orange-500', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-gray-700');
                });
                button.classList.add('bg-orange-500', 'text-white');
                button.classList.remove('bg-gray-200', 'text-gray-700');
            });
        });
    </script>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h5 class="text-orange-400 font-medium mb-2">HAPPY CLIENTS</h5>
                <h2 class="text-3xl md:text-4xl font-bold">What People Say</h2>
                <div class="w-24 h-1 bg-pink-500 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-800 p-6 rounded-lg">
                    <div class="text-orange-400 mb-4">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                    </div>
                    <p class="italic text-gray-300 mb-6">"Sharma Ji and his team captured our wedding day beautifully. The
                        photos exceeded our expectations and truly reflected the emotions of our special day. Highly
                        recommended!"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gray-600 mr-4"></div>
                        <div>
                            <h4 class="font-medium">Priya & Rahul</h4>
                            <p class="text-gray-400 text-sm">Wedding Clients</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-800 p-6 rounded-lg">
                    <div class="text-orange-400 mb-4">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                    </div>
                    <p class="italic text-gray-300 mb-6">"The pre-wedding photoshoot was amazing! They found the perfect
                        locations and made us feel comfortable in front of the camera. The results were stunning and we
                        cherish them."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gray-600 mr-4"></div>
                        <div>
                            <h4 class="font-medium">Ananya & Vikas</h4>
                            <p class="text-gray-400 text-sm">Pre-Wedding Clients</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-800 p-6 rounded-lg">
                    <div class="text-orange-400 mb-4">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                    </div>
                    <p class="italic text-gray-300 mb-6">"We hired Sharma Ji Photography for our company event and were
                        impressed by their professionalism and attention to detail. They captured the essence of our
                        corporate culture perfectly."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gray-600 mr-4"></div>
                        <div>
                            <h4 class="font-medium">Ajay Sharma</h4>
                            <p class="text-gray-400 text-sm">Corporate Client</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Studio Stats -->
    <section class="bg-white py-20">
        <div class="container max-w-5xl mx-auto px-4 text-center">
            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-10">
                <div>
                    <h3 class="text-5xl font-bold text-orange-500">250+</h3>
                    <p class="text-gray-600 mt-2">Weddings Captured</p>
                </div>
                <div>
                    <h3 class="text-5xl font-bold text-orange-500">1200+</h3>
                    <p class="text-gray-600 mt-2">Happy Clients</p>
                </div>
                <div>
                    <h3 class="text-5xl font-bold text-orange-500">15+</h3>
                    <p class="text-gray-600 mt-2">Years of Experience</p>
                </div>
                <div>
                    <h3 class="text-5xl font-bold text-orange-500">95%</h3>
                    <p class="text-gray-600 mt-2">Referral Rate</p>
                </div>
            </div>
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

    <!-- Contact Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col md:flex-row gap-12">

                <!-- Contact Form -->
                <div class="w-full md:w-1/2">
                    <h5 class="text-orange-500 font-semibold text-sm uppercase mb-2 tracking-wide">Get in Touch</h5>
                    <h2 class="text-4xl font-extrabold text-gray-800 mb-4">Contact Us</h2>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Have questions or ready to book your photography session? Fill out the form below and we'll get back
                        to you within 24 hours.
                    </p>

                    <form class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 mb-2 font-medium">Your Name</label>
                                <input type="text" placeholder="John Doe"
                                    class="w-full px-5 py-3 border border-gray-300 rounded-2xl shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-400 transition">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2 font-medium">Your Email</label>
                                <input type="email" placeholder="you@example.com"
                                    class="w-full px-5 py-3 border border-gray-300 rounded-2xl shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-400 transition">
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">Subject</label>
                            <input type="text" placeholder="Booking inquiry"
                                class="w-full px-5 py-3 border border-gray-300 rounded-2xl shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-400 transition">
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">Your Message</label>
                            <textarea rows="5" placeholder="Type your message here..."
                                class="w-full px-5 py-3 border border-gray-300 rounded-2xl shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-400 transition"></textarea>
                        </div>

                        <button type="submit"
                            class="inline-flex items-center bg-orange-500 text-white font-semibold px-6 py-3 rounded-2xl hover:bg-orange-600 transition-all shadow-lg">
                            Send Message
                            <span class="material-icons ml-2 text-base">send</span>
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="w-full md:w-1/2">
                    <div class="overflow-hidden rounded-3xl shadow-lg mb-8 h-64 md:h-96">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.197263304557!2d-122.41941518468094!3d37.7749297797595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064b7e3b2ef%3A0x3c2c561362da3b3e!2s123%20Main%20St%2C%20San%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1647769310000!5m2!1sen!2sus"
                            class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Address -->
                        <div class="flex items-start space-x-4 bg-gray-50 p-6 rounded-2xl shadow-sm">
                            <span class="material-icons text-pink-500 text-4xl">location_on</span>
                            <div>
                                <h4 class="text-lg font-bold mb-1">Studio Address</h4>
                                <p class="text-gray-600">123 Main Street<br>Cityville, Country 12345</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start space-x-4 bg-gray-50 p-6 rounded-2xl shadow-sm">
                            <span class="material-icons text-green-500 text-4xl">call</span>
                            <div>
                                <h4 class="text-lg font-bold mb-1">Phone</h4>
                                <p class="text-gray-600">+1 (555) 123-4567</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start space-x-4 bg-gray-50 p-6 rounded-2xl shadow-sm">
                            <span class="material-icons text-blue-500 text-4xl">email</span>
                            <div>
                                <h4 class="text-lg font-bold mb-1">Email</h4>
                                <p class="text-gray-600">info@yourstudio.com</p>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div class="flex items-start space-x-4 bg-gray-50 p-6 rounded-2xl shadow-sm">
                            <span class="material-icons text-purple-500 text-4xl">schedule</span>
                            <div>
                                <h4 class="text-lg font-bold mb-1">Business Hours</h4>
                                <p class="text-gray-600">Mon - Fri: 9am - 6pm<br>Sat: 10am - 4pm</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Instagram Feed / Gallery Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <h5 class="text-orange-500 font-semibold text-sm uppercase tracking-wide">Our Work</h5>
                <h2 class="text-4xl font-bold text-gray-800">Instagram Gallery</h2>
                <p class="text-gray-600 mt-2">Follow us <a href="#"
                        class="text-orange-500 hover:underline">@yourstudio</a> for more inspiration</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Example Image Items -->
                <div class="overflow-hidden rounded-2xl shadow group relative">
                    <img src="{{ asset('asset/images/about.jpg') }}" alt="Gallery image"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="overflow-hidden rounded-2xl shadow group relative">
                    <img src="{{ asset('asset/images/about.jpg') }}" alt="Gallery image"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="overflow-hidden rounded-2xl shadow group relative">
                    <img src="{{ asset('asset/images/about.jpg') }}" alt="Gallery image"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="overflow-hidden rounded-2xl shadow group relative">
                    <img src="{{ asset('asset/images/about.jpg') }}" alt="Gallery image"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <!-- Add more as needed -->
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12">
                <h5 class="text-orange-500 font-semibold text-sm uppercase tracking-wide">Need Help?</h5>
                <h2 class="text-4xl font-bold text-gray-800">Frequently Asked Questions</h2>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item -->
                <div class="bg-gray-50 p-6 rounded-2xl shadow cursor-pointer faq-item">
                    <h3 class="text-lg font-semibold text-gray-800 flex justify-between items-center">
                        <span>How do I book a session?</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform transform" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </h3>
                    <div class="mt-3 text-gray-600 faq-answer hidden">
                        You can book directly using our contact form, or message us via Instagram. We’ll confirm your
                        session and send further details by email.
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-2xl shadow cursor-pointer faq-item">
                    <h3 class="text-lg font-semibold text-gray-800 flex justify-between items-center">
                        <span>What should I wear for the shoot?</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform transform" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </h3>
                    <div class="mt-3 text-gray-600 faq-answer hidden">
                        Wear something comfortable and complementary to your style. We also offer wardrobe guidance prior to
                        your shoot!
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-2xl shadow cursor-pointer faq-item">
                    <h3 class="text-lg font-semibold text-gray-800 flex justify-between items-center">
                        <span>How long before I get my photos?</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform transform" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </h3>
                    <div class="mt-3 text-gray-600 faq-answer hidden">
                        We typically deliver edited photos within 5–7 business days via a private online gallery.
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-2xl shadow cursor-pointer faq-item">
                    <h3 class="text-lg font-semibold text-gray-800 flex justify-between items-center">
                        <span>Can I reschedule my session?</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform transform" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </h3>
                    <div class="mt-3 text-gray-600 faq-answer hidden">
                        Absolutely. Please let us know at least 48 hours in advance so we can arrange a new date that works
                        for you.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accordion Script -->
    <script>
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                const answer = item.querySelector('.faq-answer');
                const icon = item.querySelector('svg');

                // Close all other answers
                document.querySelectorAll('.faq-answer').forEach(a => {
                    if (a !== answer) a.classList.add('hidden');
                });
                document.querySelectorAll('.faq-item svg').forEach(i => {
                    if (i !== icon) i.classList.remove('rotate-180');
                });

                // Toggle current answer
                answer.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });
    </script>
@endsection
