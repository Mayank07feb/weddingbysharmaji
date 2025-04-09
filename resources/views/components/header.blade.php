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
            <a href="#"
                class="px-3 lg:px-4 py-3 bg-pink-600 hover:bg-pink-700 font-medium transition-colors">HOME</a>
            <a href="#" class="px-3 lg:px-4 py-3 hover:bg-orange-600 transition-colors">PORTRAITS</a>
            <a href="#" class="px-3 lg:px-4 py-3 hover:bg-orange-600 transition-colors">WEDDINGS</a>
            <a href="#" class="px-3 lg:px-4 py-3 hover:bg-orange-600 transition-colors">PRE-WEDDING</a>
            <a href="#" class="px-3 lg:px-4 py-3 hover:bg-orange-600 transition-colors">EVENTS</a>
            <a href="#" class="px-3 lg:px-4 py-3 hover:bg-orange-600 transition-colors">PRODUCTS</a>
            <a href="#" class="px-3 lg:px-4 py-3 hover:bg-orange-600 transition-colors">PACKAGES</a>
            <a href="#" class="px-3 lg:px-4 py-3 hover:bg-orange-600 transition-colors">STUDIO</a>
            <a href="#" class="px-3 lg:px-4 py-3 hover:bg-orange-600 transition-colors">GALLERY</a>
            <a href="#" class="px-3 lg:px-4 py-3 hover:bg-orange-600 transition-colors">BLOG</a>
            <a href="#" class="px-3 lg:px-4 py-3 hover:bg-orange-600 transition-colors">ABOUT</a>
            <a href="#" class="px-3 lg:px-4 py-3 hover:bg-orange-600 transition-colors">CONTACT</a>
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
            <a href="#" class="block px-4 py-3 bg-pink-600 hover:bg-pink-700 font-medium">HOME</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">PORTRAITS</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">WEDDINGS</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">PRE-WEDDING</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">EVENTS</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">PRODUCTS</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">PACKAGES</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">STUDIO</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">GALLERY</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">BLOG</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">ABOUT</a>
            <a href="#" class="block px-4 py-3 hover:bg-orange-600 border-t border-orange-400">CONTACT</a>
        </div>
    </div>
</nav>
