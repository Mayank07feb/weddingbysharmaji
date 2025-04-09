@extends('components.main')

@section('content')
    <!-- Banner Section -->
    <section class="relative h-[400px] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('{{ asset('asset/images/banner.jpg') }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 text-center px-6">
            <h1 class="text-5xl font-bold mb-2">About Our Studio</h1>
            <p class="text-lg text-gray-200">Where every click tells your story</p>
        </div>
    </section>

    <!-- Studio Intro Section -->
    <section class="py-24 bg-white">
        <div class="container max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
            <div class="w-full md:w-1/2">
                <img src="{{ asset('asset/images/about.jpg') }}" alt="Our Studio"
                    class="rounded-3xl shadow-lg object-cover w-full h-[400px]">
            </div>
            <div class="w-full md:w-1/2">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">A Passion for Capturing Beauty</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    At our studio, photography is not just about taking pictures—it's about creating timeless stories.
                    With years of experience and a love for light and composition, we specialize in weddings, portraits,
                    lifestyle, and creative shoots. We believe every moment has its own magic, and we’re here to preserve it
                    for you.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Whether you're stepping in front of our lens for the first time or you’re a returning client,
                    our mission is to make you feel confident, inspired, and truly seen.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Story / Values -->
    <section class="bg-gray-50 py-20">
        <div class="container max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-orange-500 uppercase font-semibold text-sm tracking-widest">Our Vision</h3>
                <h2 class="text-4xl font-extrabold text-gray-800">More Than Just a Studio</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-10">
                <!-- Value 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-md text-center hover:shadow-xl transition">
                    <span class="material-icons text-orange-500 text-5xl mb-4">camera_alt</span>
                    <h4 class="text-xl font-bold mb-2">Creative Excellence</h4>
                    <p class="text-gray-600">We push creative boundaries to bring your story to life with fresh and unique
                        perspectives.</p>
                </div>

                <!-- Value 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-md text-center hover:shadow-xl transition">
                    <span class="material-icons text-orange-500 text-5xl mb-4">emoji_people</span>
                    <h4 class="text-xl font-bold mb-2">Client Connection</h4>
                    <p class="text-gray-600">We listen, adapt, and personalize every shoot to reflect your personality and
                        story.</p>
                </div>

                <!-- Value 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-md text-center hover:shadow-xl transition">
                    <span class="material-icons text-orange-500 text-5xl mb-4">access_time</span>
                    <h4 class="text-xl font-bold mb-2">Timeless Memories</h4>
                    <p class="text-gray-600">We create images that remain beautiful and meaningful for years to come.</p>
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

    <!-- Call to Action -->
    <section class="py-20 bg-orange-500 text-white text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Capture Your Story?</h2>
        <p class="mb-6 text-lg">Let’s create something unforgettable together.</p>
        <a href="/contact"
            class="inline-block bg-white text-orange-500 font-bold px-8 py-3 rounded-full hover:bg-gray-100 transition shadow-md">
            Book a Session
        </a>
    </section>
@endsection
