<script>
    function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        mobileMenu.classList.toggle('hidden');

        // Toggle hamburger/close icon
        if (mobileMenu.classList.contains('hidden')) {
            menuIcon.classList.remove('fa-times');
            menuIcon.classList.add('fa-bars');
        } else {
            menuIcon.classList.remove('fa-bars');
            menuIcon.classList.add('fa-times');
        }
    }
</script>

<!-- Top Bar -->
<div class="bg-gray-50 border-b text-sm">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between py-3">

            <!-- Left Side -->
            <div class="flex items-center justify-center md:justify-start space-x-4">
                <!-- Subscribe Section -->
                <div
                    class="flex items-center space-x-1 text-gray-600 group cursor-pointer hover:text-orange-500 transition-colors">
                    <span class="material-icons text-base">email</span>
                    <span class="font-medium tracking-wide">SUBSCRIBE</span>
                </div>

                <!-- Divider -->
                <div class="hidden md:block border-l h-4 border-gray-300"></div>

                <!-- Social Icons -->
                <div class="flex space-x-3 text-gray-600 text-xl">
                    <a href="#"
                        class="hover:text-orange-500 transition-colors transform hover:-translate-y-1 duration-200"
                        title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#"
                        class="hover:text-orange-500 transition-colors transform hover:-translate-y-1 duration-200"
                        title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#"
                        class="hover:text-orange-500 transition-colors transform hover:-translate-y-1 duration-200"
                        title="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#"
                        class="hover:text-orange-500 transition-colors transform hover:-translate-y-1 duration-200"
                        title="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#"
                        class="hover:text-orange-500 transition-colors transform hover:-translate-y-1 duration-200"
                        title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

            <!-- Right Side -->
            <div id="openBookNowModal" class="flex items-center justify-center md:justify-end mt-2 md:mt-0">
                <a href="{{ route('booking') }}"
                    class="bg-orange-500 text-white px-5 py-1.5 rounded-full text-sm font-medium hover:bg-orange-600 transition shadow-md hover:shadow-lg transform hover:-translate-y-0.5 duration-200">
                    Book Now
                </a>
            </div>

        </div>
    </div>
</div>

<!-- Logo Bar -->
<div class="py-5 bg-white shadow-sm">
    <div class="container mx-auto flex justify-center">
        <div class="text-center">
            <div class="text-3xl md:text-4xl font-bold tracking-wide">
                <span class="text-orange-500">SHARMA JI</span>
                <span class="text-pink-600">PHOTOSHOOT</span>
            </div>
            <div
                class="text-xs bg-gradient-to-r from-orange-500 to-pink-600 text-white px-3 py-1 inline-block mt-2 rounded shadow-sm">
                PREMIUM PHOTOGRAPHY SERVICES
            </div>
        </div>
    </div>
</div>

<!-- Navigation Bar -->
<nav class="bg-orange-500 text-white sticky top-0 z-20 shadow-md">
    <div class="container mx-auto relative">
        <!-- Desktop Navigation -->
        <div class="hidden md:flex justify-center">
            <a href="{{ route('home') }}"
                class="px-3 lg:px-4 py-3 text-[15px] font-medium transition-colors relative group {{ request()->routeIs('home') ? 'bg-pink-600' : 'hover:bg-orange-600' }}">
                HOME
                <span
                    class="absolute bottom-0 left-0 w-full h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform origin-center {{ request()->routeIs('home') ? 'scale-x-100' : '' }}"></span>
            </a>
            <a href="#"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors relative group hover:bg-orange-600">
                PORTRAITS
                <span
                    class="absolute bottom-0 left-0 w-full h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform origin-center"></span>
            </a>
            <a href="#"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors relative group hover:bg-orange-600">
                WEDDINGS
                <span
                    class="absolute bottom-0 left-0 w-full h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform origin-center"></span>
            </a>
            <a href="#"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors relative group hover:bg-orange-600">
                PRE-WEDDING
                <span
                    class="absolute bottom-0 left-0 w-full h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform origin-center"></span>
            </a>
            <a href="{{ route('events') }}"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors relative group {{ request()->routeIs('events') ? 'bg-pink-600' : 'hover:bg-orange-600' }}">
                EVENTS
                <span
                    class="absolute bottom-0 left-0 w-full h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform origin-center {{ request()->routeIs('events') ? 'scale-x-100' : '' }}"></span>
            </a>
            <a href="#"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors relative group hover:bg-orange-600">
                PRODUCTS
                <span
                    class="absolute bottom-0 left-0 w-full h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform origin-center"></span>
            </a>
            <a href="{{ route('packages') }}"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors relative group {{ request()->routeIs('packages') ? 'bg-pink-600' : 'hover:bg-orange-600' }}">
                PACKAGES
                <span
                    class="absolute bottom-0 left-0 w-full h-0.5 bg-white transition-transform origin-center {{ request()->routeIs('packages') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}">
                </span>
            </a>
            <a href="{{ route('services') }}"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors relative group {{ request()->routeIs('services') ? 'bg-pink-600' : 'hover:bg-orange-600' }}">
                SERVICES
                <span
                    class="absolute bottom-0 left-0 w-full h-0.5 bg-white transition-transform origin-center {{ request()->routeIs('services') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}">
                </span>
            </a>
            <a href="{{ route('gallery') }}"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors relative group {{ request()->routeIs('gallery') ? 'bg-pink-600' : 'hover:bg-orange-600' }}">
                GALLERY
                <span
                    class="absolute bottom-0 left-0 w-full h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform origin-center {{ request()->routeIs('gallery') ? 'scale-x-100' : '' }}"></span>
            </a>
            <a href="#"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors relative group hover:bg-orange-600">
                BLOG
                <span
                    class="absolute bottom-0 left-0 w-full h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform origin-center"></span>
            </a>
            <a href="{{ route('about') }}"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors relative group {{ request()->routeIs('about') ? 'bg-pink-600' : 'hover:bg-orange-600' }}">
                ABOUT
                <span
                    class="absolute bottom-0 left-0 w-full h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform origin-center {{ request()->routeIs('about') ? 'scale-x-100' : '' }}"></span>
            </a>
            <a href="{{ route('contact') }}"
                class="px-3 lg:px-4 py-3 text-[15px] transition-colors relative group {{ request()->routeIs('contact') ? 'bg-pink-600' : 'hover:bg-orange-600' }}">
                CONTACT
                <span
                    class="absolute bottom-0 left-0 w-full h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform origin-center {{ request()->routeIs('contact') ? 'scale-x-100' : '' }}"></span>
            </a>
        </div>

        <!-- Mobile Navigation Button -->
        <div class="md:hidden flex items-center justify-between p-4">
            <div class="text-xl font-bold">
                <span class="text-white">SJ PHOTO</span>
            </div>
            <button onclick="toggleMobileMenu()"
                class="text-white focus:outline-none rounded-md p-1 hover:bg-orange-600 transition">
                <i id="menu-icon" class="fas fa-bars text-xl"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="md:hidden hidden bg-orange-500 w-full absolute left-0 shadow-lg rounded-b-lg border-t border-orange-400 overflow-hidden z-50">
            <a href="{{ route('home') }}"
                class="block px-4 py-3 font-medium transition-colors {{ request()->routeIs('home') ? 'bg-pink-600' : 'hover:bg-pink-700' }}">HOME</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">PORTRAITS</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">WEDDINGS</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">PRE-WEDDING</a>
            <a href="{{ route('events') }}"
                class="block px-4 py-3 transition-colors {{ request()->routeIs('events') ? 'bg-pink-600' : 'hover:bg-orange-600' }} border-t border-orange-400">EVENTS</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">PRODUCTS</a>
            <a href="{{ route('packages') }}"
                class="block px-4 py-3 transition-colors {{ request()->routeIs('packages') ? 'bg-pink-600' : 'hover:bg-orange-600' }} border-t border-orange-400">
                PACKAGES
            </a>
            <a href="{{ route('services') }}"
                class="block px-4 py-3 transition-colors {{ request()->routeIs('services') ? 'bg-pink-600' : 'hover:bg-orange-600' }} border-t border-orange-400">
                SERVICES
            </a>
            <a href="{{ route('gallery') }}"
                class="block px-4 py-3 transition-colors {{ request()->routeIs('gallery') ? 'bg-pink-600' : 'hover:bg-orange-600' }} border-t border-orange-400">GALLERY</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">BLOG</a>
            <a href="{{ route('about') }}"
                class="block px-4 py-3 transition-colors {{ request()->routeIs('about') ? 'bg-pink-600' : 'hover:bg-orange-600' }} border-t border-orange-400">ABOUT</a>
            <a href="{{ route('contact') }}"
                class="block px-4 py-3 transition-colors {{ request()->routeIs('contact') ? 'bg-pink-600' : 'hover:bg-orange-600' }} border-t border-orange-400">CONTACT</a>

            <!-- Mobile Book Now Button -->
            <div class="p-4 border-t border-orange-400">
                <a href="#booking"
                    class="block w-full bg-white text-orange-500 py-2 px-4 rounded-full text-center font-medium shadow hover:bg-gray-100 transition">
                    Book Your Session Now
                </a>
            </div>
        </div>
    </div>
</nav>
