@extends('components.main')

@section('content')
    <!-- Banner Section - Improved with better height and overlay -->
    <section class="relative h-[500px] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('{{ asset('asset/images/banner.jpg') }}');">
        <div class="bg-gradient-to-b from-black/70 to-black/40 absolute inset-0"></div>
        <div class="relative z-10 text-center px-6 max-w-3xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-4 leading-tight">Book a Session</h1>
            <p class="text-xl text-gray-100">Reserve your date with us for unforgettable photography</p>
        </div>
    </section>

    <!-- Booking Section -->
    <section class="py-20 md:py-28 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="flex flex-col md:flex-row gap-12 lg:gap-16">

                <!-- Booking Form -->
                <div class="w-full md:w-1/2">
                    <h5 class="text-orange-500 font-semibold text-sm uppercase mb-3 tracking-wider">Book Now</h5>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-5 leading-tight">Let’s Capture Your Special Day</h2>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Fill out the form to request a booking. We'll confirm your session and reach out within 24 hours.
                    </p>

                    <form method="POST" action="" class="space-y-7">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 mb-2 font-medium">Full Name</label>
                                <input type="text" name="name" placeholder="John Doe" required
                                    class="w-full px-5 py-4 border border-gray-200 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2 font-medium">Email Address</label>
                                <input type="email" name="email" placeholder="you@example.com" required
                                    class="w-full px-5 py-4 border border-gray-200 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition">
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">Phone Number</label>
                            <input type="text" name="phone" placeholder="+1 234 567 8901" required
                                class="w-full px-5 py-4 border border-gray-200 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition">
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">Preferred Date</label>
                            <input type="date" name="date" required
                                class="w-full px-5 py-4 border border-gray-200 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition">
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">Session Type</label>
                            <input type="text" name="session_type" placeholder="Wedding, Portrait, Event..." required
                                class="w-full px-5 py-4 border border-gray-200 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition">
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">Additional Notes</label>
                            <textarea name="message" rows="5" placeholder="Any special requests or details?"
                                class="w-full px-5 py-4 border border-gray-200 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition"></textarea>
                        </div>

                        <button type="submit"
                            class="inline-flex items-center justify-center bg-orange-500 text-white font-semibold px-8 py-4 rounded-xl hover:bg-orange-600 transition-all shadow-lg transform hover:-translate-y-1">
                            Book Now
                            <span class="material-icons ml-2 text-base">event_available</span>
                        </button>
                    </form>
                </div>

                <!-- Contact Info and Map (unchanged) -->
                <div class="w-full md:w-1/2">
                    <div class="overflow-hidden rounded-2xl shadow-xl mb-10 h-72 md:h-96">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.197263304557!2d-122.41941518468094!3d37.7749297797595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064b7e3b2ef%3A0x3c2c561362da3b3e!2s123%20Main%20St%2C%20San%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1647769310000!5m2!1sen!2sus"
                            class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Info Cards (unchanged) -->
                        <!-- Studio Address -->
                        <div
                            class="flex items-start space-x-4 bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                            <span class="material-icons text-pink-500 text-3xl">location_on</span>
                            <div>
                                <h4 class="text-lg font-bold mb-1">Studio Address</h4>
                                <p class="text-gray-600">123 Main Street<br>Cityville, Country 12345</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div
                            class="flex items-start space-x-4 bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                            <span class="material-icons text-green-500 text-3xl">call</span>
                            <div>
                                <h4 class="text-lg font-bold mb-1">Phone</h4>
                                <p class="text-gray-600">+1 (555) 123-4567</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div
                            class="flex items-start space-x-4 bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                            <span class="material-icons text-blue-500 text-3xl">email</span>
                            <div>
                                <h4 class="text-lg font-bold mb-1">Email</h4>
                                <p class="text-gray-600">info@yourstudio.com</p>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div
                            class="flex items-start space-x-4 bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                            <span class="material-icons text-purple-500 text-3xl">schedule</span>
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
@endsection
