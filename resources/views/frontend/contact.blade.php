@extends('components.main')

@section('content')
    <!-- Banner Section - Improved with better height and overlay -->
    <section class="relative h-[500px] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('{{ asset('asset/images/banner.jpg') }}');">
        <div class="bg-gradient-to-b from-black/70 to-black/40 absolute inset-0"></div>
        <div class="relative z-10 text-center px-6 max-w-3xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-4 leading-tight">Contact Us</h1>
            <p class="text-xl text-gray-100">We're dedicated to capturing your most precious moments</p>
        </div>
    </section>

    <!-- Contact Section - Refined spacing and visual hierarchy -->
    <section class="py-20 md:py-28 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="flex flex-col md:flex-row gap-12 lg:gap-16">

                <!-- Contact Form - Improved typography and form elements -->
                <div class="w-full md:w-1/2">
                    <h5 class="text-orange-500 font-semibold text-sm uppercase mb-3 tracking-wider">Get in Touch</h5>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-5 leading-tight">Let's Discuss Your
                        Vision</h2>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Have questions or ready to book your photography session? Fill out the form below and we'll get back
                        to you within 24 hours.
                    </p>

                    <form class="space-y-7">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 mb-2 font-medium">Your Name</label>
                                <input type="text" placeholder="John Doe"
                                    class="w-full px-5 py-4 border border-gray-200 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2 font-medium">Your Email</label>
                                <input type="email" placeholder="you@example.com"
                                    class="w-full px-5 py-4 border border-gray-200 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition">
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">Subject</label>
                            <input type="text" placeholder="Booking inquiry"
                                class="w-full px-5 py-4 border border-gray-200 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition">
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">Your Message</label>
                            <textarea rows="5" placeholder="Tell us about your photography needs..."
                                class="w-full px-5 py-4 border border-gray-200 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition"></textarea>
                        </div>

                        <button type="submit"
                            class="inline-flex items-center justify-center bg-orange-500 text-white font-semibold px-8 py-4 rounded-xl hover:bg-orange-600 transition-all shadow-lg transform hover:-translate-y-1">
                            Send Message
                            <span class="material-icons ml-2 text-base">send</span>
                        </button>
                    </form>
                </div>

                <!-- Contact Info - Enhanced card design -->
                <div class="w-full md:w-1/2">
                    <div class="overflow-hidden rounded-2xl shadow-xl mb-10 h-72 md:h-96">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.197263304557!2d-122.41941518468094!3d37.7749297797595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064b7e3b2ef%3A0x3c2c561362da3b3e!2s123%20Main%20St%2C%20San%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1647769310000!5m2!1sen!2sus"
                            class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Address - Enhanced card design -->
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
