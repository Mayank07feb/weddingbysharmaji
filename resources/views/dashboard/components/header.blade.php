<!-- Header -->
<header
    class="bg-white/80 backdrop-blur-md shadow-lg dark:bg-gray-900 dark:text-white transition duration-300 ease-in-out">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Mobile Hamburger Menu -->
        <button id="mobile-sidebar-toggle"
            class="lg:hidden text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition">
            <i data-feather="menu" class="w-7 h-7"></i>
        </button>

        <!-- Search Bar -->
        <div class="flex-1 mx-6 hidden md:block">
            <div class="relative">
                <input type="text" placeholder="Search..."
                    class="w-full pl-12 pr-4 py-2 rounded-full bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-[#3B82F6] focus:border-[#3B82F6] transition duration-200">
                <i data-feather="search" class="absolute left-4 top-2.5 text-gray-400 dark:text-gray-500 w-5 h-5"></i>
            </div>
        </div>

        <!-- Header Right Icons -->
        <div class="flex items-center space-x-5">
            <!-- Notification Bell -->
            <button class="relative text-gray-700 dark:text-gray-300 hover:text-[#3B82F6] transition">
                <i data-feather="bell" class="w-6 h-6"></i>
                <span
                    class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1.5 animate-pulse">3</span>
            </button>

            <!-- Check if user is authenticated -->
            @auth
            <div class="relative">
                <img src="{{ asset('asset/images/logo.png') }}" alt="Profile"
                    class="rounded-full w-10 h-10 border-2 border-gray-300 dark:border-gray-600 cursor-pointer transition-transform transform hover:scale-110"
                    id="profile-toggle">
                <div class="absolute bottom-0 right-0 h-3 w-3 bg-green-500 rounded-full border-2 border-white"></div>

                <!-- Dropdown Menu -->
                <div id="profile-dropdown"
                    class="absolute right-0 mt-3 w-56 bg-white dark:bg-gray-800 shadow-xl rounded-lg opacity-0 invisible transition-all duration-300 origin-top-right z-50 border border-gray-200 dark:border-gray-700">
                    <!-- Display user name -->
                    <div class="px-4 py-3 border-b dark:border-gray-700">
                        <p class="text-gray-700 dark:text-gray-300 font-semibold">{{ Auth::user()->name }}</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</p>
                    </div>
                    
                    <a href="{{route('dashboard.profile.index')}}"
                        class="block px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                        Profile
                    </a>
                    <a href="#"
                        class="block px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                        Settings
                    </a>

                    <!-- Logout Button -->
                    <a href="#" id="logout-btn"
                        class="block px-4 py-3 text-red-600 dark:text-red-400 hover:bg-gray-100 dark:hover:bg-gray-700 transition rounded-b-lg">
                        Logout
                    </a>

                    <!-- Logout Form (Hidden) -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
            </div>
            @else
            <!-- Show Login/Register if user is not logged in -->
            <div>
                <a href="{{ route('login') }}" class="text-blue-600 dark:text-blue-400 hover:underline">Login</a>
                <span class="mx-2">|</span>
                <a href="{{ route('register') }}" class="text-blue-600 dark:text-blue-400 hover:underline">Register</a>
            </div>
            @endauth
        </div>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const profileToggle = document.getElementById("profile-toggle");
        const profileDropdown = document.getElementById("profile-dropdown");
        const logoutBtn = document.getElementById("logout-btn");
        const logoutForm = document.getElementById("logout-form");

        if (profileToggle) {
            profileToggle.addEventListener("mouseenter", () => {
                profileDropdown.classList.remove("opacity-0", "invisible");
            });

            profileToggle.addEventListener("mouseleave", () => {
                setTimeout(() => {
                    if (!profileDropdown.matches(":hover")) {
                        profileDropdown.classList.add("opacity-0", "invisible");
                    }
                }, 200);
            });

            profileDropdown.addEventListener("mouseleave", () => {
                profileDropdown.classList.add("opacity-0", "invisible");
            });
        }

        // Logout action
        if (logoutBtn) {
            logoutBtn.addEventListener("click", function(event) {
                event.preventDefault();
                logoutForm.submit();
            });
        }
    });
</script>
