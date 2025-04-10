<!-- Sidebar -->
<div id="sidebar"
    class="fixed lg:static lg:block w-64 bg-[#1E293B] text-white transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-50 h-full overflow-y-auto shadow-lg rounded-r-2xl">

    <!-- Profile Section -->
    <div class="p-5 border-b border-gray-700 flex items-center space-x-3">
        <img src="{{ asset('asset/images/logo.png') }}" alt="Krinoscco Logo"
            class="w-12 h-12 rounded-full border-2 border-gray-500">
        <div>
            <h2 class="text-xl font-semibold">Krinoscco</h2>
            <p class="text-sm text-gray-400">Admin Dashboard</p>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="relative p-4">
        <div class="relative flex items-center">
            <i data-feather="search" class="absolute left-3 w-5 h-5 text-gray-400"></i>
            <input type="text" placeholder="Search..."
                class="w-full p-2 pl-10 bg-gray-800 rounded-lg focus:outline-none text-white transition-all focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

    <!-- Navigation -->
    <nav class="mt-2">
        <ul>
            <li
                class="px-5 py-2 transition-all rounded-lg {{ request()->routeIs('dashboard.index') ? 'bg-[#334155]' : '' }}">
                <a href="{{ route('dashboard.index') }}" class="flex items-center space-x-3">
                    <i data-feather="home" class="w-5 h-5"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Analytics Dropdown -->
            <li
                class="px-5 py-2 transition-all rounded-lg {{ request()->routeIs('dashboard.analytics.*') ? 'bg-[#334155]' : '' }}">
                <button class="flex items-center justify-between w-full"
                    onclick="toggleDropdown('analyticsDropdown', this)">
                    <div class="flex items-center space-x-3">
                        <i data-feather="trending-up" class="w-5 h-5"></i>
                        <span>Analytics</span>
                    </div>
                    <svg class="chevron-icon w-4 h-4 transition-transform transform rotate-0"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="analyticsDropdown"
                    class="ml-8 mt-2 space-y-2 overflow-hidden max-h-0 opacity-0 scale-95 transition-all duration-500 ease-in-out">
                    <li><a href="#" class="block py-2 text-gray-300 hover:text-white transition-all">Overview</a>
                    </li>
                    <li><a href="#" class="block py-2 text-gray-300 hover:text-white transition-all">Reports</a>
                    </li>
                </ul>
            </li>

            <!-- Users Dropdown -->
            <li
                class="px-5 py-2 transition-all rounded-lg {{ request()->routeIs('dashboard.users.*') ? 'bg-[#334155]' : '' }}">
                <button class="flex items-center justify-between w-full"
                    onclick="toggleDropdown('usersDropdown', this)">
                    <div class="flex items-center space-x-3">
                        <i data-feather="users" class="w-5 h-5"></i>
                        <span>Users</span>
                    </div>
                    <svg class="chevron-icon w-4 h-4 transition-transform transform rotate-0"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="usersDropdown"
                    class="ml-8 mt-2 space-y-2 overflow-hidden max-h-0 opacity-0 scale-95 transition-all duration-500 ease-in-out">
                    <li><a href="#" class="block py-2 text-gray-300 hover:text-white transition-all">All Users</a>
                    </li>
                    <li><a href="#" class="block py-2 text-gray-300 hover:text-white transition-all">Roles &
                            Permissions</a></li>
                </ul>
            </li>

            <!-- Bookings Dropdown -->
            <li
                class="px-5 py-2 transition-all rounded-lg {{ request()->routeIs('dashboard.booking.*') ? 'bg-[#334155]' : '' }}">
                <button class="flex items-center justify-between w-full"
                    onclick="toggleDropdown('bookingsDropdown', this)">
                    <div class="flex items-center space-x-3">
                        <i data-feather="calendar" class="w-5 h-5"></i>
                        <span>Bookings</span>
                    </div>
                    <svg class="chevron-icon w-4 h-4 transition-transform transform rotate-0"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="bookingsDropdown"
                    class="ml-8 mt-2 space-y-2 overflow-hidden max-h-0 opacity-0 scale-95 transition-all duration-500 ease-in-out">
                    <li><a href="{{ route('dashboard.booking') }}"
                            class="block py-2 text-gray-300 hover:text-white transition-all">All Bookings</a></li>
                    <li><a href="#" class="block py-2 text-gray-300 hover:text-white transition-all">Pending
                            Approvals</a></li>
                </ul>
            </li>

            <!-- Transactions -->
            <li
                class="px-5 py-2 transition-all rounded-lg {{ request()->routeIs('dashboard.transactions') ? 'bg-[#334155]' : '' }}">
                <a href="{{ route('dashboard.transactions.index') }}" class="flex items-center space-x-3">
                    <i data-feather="credit-card" class="w-5 h-5"></i>
                    <span>Transactions</span>
                </a>
            </li>

            <!-- About Us -->
            <li class="px-5 py-2 transition-all rounded-lg {{ request()->routeIs('about') ? 'bg-[#334155]' : '' }}">
                <a href="{{ route('dashboard.about.index') }}" class="flex items-center space-x-3">
                    <i data-feather="info" class="w-5 h-5"></i>
                    <span>About Us</span>
                </a>
            </li>


            <!-- Contact -->
            <li
                class="px-5 py-2 transition-all rounded-lg {{ request()->routeIs('dashboard.contact') ? 'bg-[#334155]' : '' }}">
                <a href="{{ route('dashboard.contact.index') }}" class="flex items-center space-x-3">
                    <i data-feather="mail" class="w-5 h-5"></i>
                    <span>Contact</span>
                </a>
            </li>

            <!-- Gallery -->
            <li
                class="px-5 py-2 transition-all rounded-lg {{ request()->routeIs('dashboard.gallery') ? 'bg-[#334155]' : '' }}">
                <a href="#" class="flex items-center space-x-3">
                    <i data-feather="image" class="w-5 h-5"></i>
                    <span>Gallery</span>
                </a>
            </li>


            <!-- Messages -->
            <li
                class="px-5 py-2 transition-all rounded-lg {{ request()->routeIs('dashboard.messages') ? 'bg-[#334155]' : '' }}">
                <a href="#" class="flex items-center space-x-3">
                    <i data-feather="message-circle" class="w-5 h-5"></i>
                    <span>Messages</span>
                </a>
            </li>

            <!-- Profile -->
            <li
                class="px-5 py-2 transition-all rounded-lg {{ request()->routeIs('dashboard.profile') ? 'bg-[#334155]' : '' }}">
                <a href="{{ route('dashboard.profile.index') }}" class="flex items-center space-x-3">
                    <i data-feather="user" class="w-5 h-5"></i>
                    <span>Profile</span>
                </a>
            </li>

            <!-- Settings -->
            <li
                class="px-5 py-2 transition-all rounded-lg {{ request()->routeIs('dashboard.settings') ? 'bg-[#334155]' : '' }}">
                <a href="#" class="flex items-center space-x-3">
                    <i data-feather="settings" class="w-5 h-5"></i>
                    <span>Settings</span>
                </a>
            </li>

            <!-- Support -->
            <li
                class="px-5 py-2 transition-all rounded-lg {{ request()->routeIs('dashboard.support') ? 'bg-[#334155]' : '' }}">
                <a href="#" class="flex items-center space-x-3">
                    <i data-feather="help-circle" class="w-5 h-5"></i>
                    <span>Support</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Logout Button -->
    <div class="absolute bottom-0 w-full">
        <button id="logout-btn"
            class="w-full flex items-center px-5 py-3 bg-red-600 hover:bg-red-700 transition-all text-white rounded-t-xl">
            <i data-feather="log-out" class="w-5 h-5"></i>
            <span class="ml-3">Logout</span>
        </button>

        <!-- Hidden Logout Form -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </div>

</div>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const logoutBtn = document.getElementById("logout-btn");
        const logoutForm = document.getElementById("logout-form");

        if (logoutBtn) {
            logoutBtn.addEventListener("click", function(event) {
                event.preventDefault();
                logoutForm.submit();
            });
        }
    });
</script>

<script>
    feather.replace();

    function toggleDropdown(id, button) {
        const dropdown = document.getElementById(id);
        const icon = button.querySelector(".chevron-icon");

        if (dropdown.style.maxHeight === "0px" || dropdown.style.maxHeight === "") {
            dropdown.style.maxHeight = dropdown.scrollHeight + "px";
            dropdown.style.opacity = "1";
            dropdown.style.transform = "scale(1)";
            icon.classList.add("rotate-180");
        } else {
            dropdown.style.maxHeight = "0px";
            dropdown.style.opacity = "0";
            dropdown.style.transform = "scale(0.95)";
            icon.classList.remove("rotate-180");
        }
    }
</script>

<style>
    .rotate-180 {
        transform: rotate(180deg);
    }
</style>
