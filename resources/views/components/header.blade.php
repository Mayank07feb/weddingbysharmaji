<script>
    function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    }
</script>

<!-- Top Bar -->
<div class="bg-gray-50 border-b text-sm">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between py-3">

            <!-- Left Side -->
            <div class="flex items-center justify-center md:justify-start space-x-4">
                <!-- Subscribe Section -->
                <div class="flex items-center space-x-1 text-gray-600">
                    <span class="material-icons text-base">email</span>
                    <span class="font-medium tracking-wide">SUBSCRIBE</span>
                </div>

                <!-- Divider -->
                <div class="hidden md:block border-l h-4 border-gray-300"></div>

                <!-- Social Icons -->
                <div class="flex space-x-3 text-gray-600 text-xl">
                    <a href="#" class="hover:text-orange-500 transition-colors" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="hover:text-orange-500 transition-colors" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="hover:text-orange-500 transition-colors" title="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="hover:text-orange-500 transition-colors" title="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#" class="hover:text-orange-500 transition-colors" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

            <!-- Right Side -->
            <div id="openBookNowModal" class="flex items-center justify-center md:justify-end mt-2 md:mt-0">
                <a href="#booking"
                    class="bg-orange-500 text-white px-4 py-1.5 rounded-full text-sm font-medium hover:bg-orange-600 transition">
                    Book Now
                </a>
            </div>

        </div>
    </div>
</div>

<!-- Logo Bar -->
<div class="py-4 bg-white">
    <div class="container mx-auto flex justify-center">
        <div class="text-center">
            <div class="text-3xl md:text-4xl font-bold">
                <span class="text-orange-500">SHARMA JI</span>
                <span class="text-pink-600">PHOTOSHOOT</span>
            </div>
            <div class="text-xs bg-orange-500 text-white px-2 py-1 inline-block mt-1 rounded">
                PREMIUM PHOTOGRAPHY SERVICES
            </div>
        </div>
    </div>
</div>

<!-- Navigation Bar -->
<nav class="bg-orange-500 text-white sticky top-0 z-20">
    <div class="container mx-auto relative">
        <!-- Desktop Navigation -->
        <div class="hidden md:flex">
            <a href="{{ route('home') }}"
                class="px-3 lg:px-4 py-3 text-[15px] font-medium transition-colors {{ request()->routeIs('home') ? 'bg-pink-600' : 'hover:bg-orange-600' }}">HOME</a>
            <a href="#" class="px-3 lg:px-4 py-3 text-[15px] transition-colors hover:bg-orange-600">PORTRAITS</a>
            <a href="#" class="px-3 lg:px-4 py-3 text-[15px] transition-colors hover:bg-orange-600">WEDDINGS</a>
            <a href="#"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors hover:bg-orange-600">PRE-WEDDING</a>
            <a href="{{ route('events') }}"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors {{ request()->routeIs('events') ? 'bg-pink-600' : 'hover:bg-orange-600' }}">EVENTS</a>
            <a href="#" class="px-3 lg:px-4 py-3 text-[15px] transition-colors hover:bg-orange-600">PRODUCTS</a>
            <a href="{{route('packages')}}" class="px-3 lg:px-4 py-3 text-[15px] transition-colors hover:bg-orange-600">PACKAGES</a>
            <a href="{{ route('services') }}"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors {{ request()->routeIs('services') ? 'bg-pink-600' : 'hover:bg-orange-600' }}">SERVICES</a>
            <a href="{{ route('gallery') }}"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors {{ request()->routeIs('gallery') ? 'bg-pink-600' : 'hover:bg-orange-600' }}">GALLERY</a>
            <a href="#" class="px-3 lg:px-4 py-3 text-[15px] transition-colors hover:bg-orange-600">BLOG</a>
            <a href="{{ route('about') }}"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors {{ request()->routeIs('about') ? 'bg-pink-600' : 'hover:bg-orange-600' }}">ABOUT</a>
            <a href="{{ route('contact') }}"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors {{ request()->routeIs('contact') ? 'bg-pink-600' : 'hover:bg-orange-600' }}">CONTACT</a>
        </div>

        <!-- Mobile Navigation Button -->
        <div class="md:hidden flex items-center justify-between p-4">
            <div class="text-xl font-bold">
                <span class="text-white">SHARMA JI PHOTOSHOOT</span>
            </div>
            <button onclick="toggleMobileMenu()" class="text-white focus:outline-none text-2xl">
                ☰
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-orange-500 w-full">
            <a href="{{ route('home') }}"
                class="block px-4 py-3 font-medium transition-colors {{ request()->routeIs('home') ? 'bg-pink-600' : 'hover:bg-pink-700' }}">HOME</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">PORTRAITS</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">WEDDINGS</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">PRE-WEDDING</a>
            <a href="{{ route('events') }}"
                class="block px-4 py-3 transition-colors {{ request()->routeIs('events') ? 'bg-pink-600' : 'hover:bg-orange-600' }} border-t border-orange-400">EVENTS</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">PRODUCTS</a>
            <a href="{{route('packages')}}" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">PACKAGES</a>
            <a href="{{ route('services') }}"
                class="block px-4 py-3 transition-colors {{ request()->routeIs('services') ? 'bg-pink-600' : 'hover:bg-orange-600' }} border-t border-orange-400">SERVICES</a>
            <a href="{{ route('gallery') }}"
                class="block px-4 py-3 transition-colors {{ request()->routeIs('gallery') ? 'bg-pink-600' : 'hover:bg-orange-600' }} border-t border-orange-400">GALLERY</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">BLOG</a>
            <a href="{{ route('about') }}"
                class="block px-4 py-3 transition-colors {{ request()->routeIs('about') ? 'bg-pink-600' : 'hover:bg-orange-600' }} border-t border-orange-400">ABOUT</a>
            <a href="{{ route('contact') }}"
                class="block px-4 py-3 transition-colors {{ request()->routeIs('contact') ? 'bg-pink-600' : 'hover:bg-orange-600' }} border-t border-orange-400">CONTACT</a>
        </div>
    </div>
</nav>
