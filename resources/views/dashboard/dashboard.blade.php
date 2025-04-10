<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprehensive Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sidebar-bg': '#1E293B',
                        'sidebar-active': '#334155',
                        'brand-primary': '#3B82F6',
                        'brand-secondary': '#10B981'
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans antialiased">
    <div class="flex h-screen">
        <!-- Mobile Sidebar Overlay (Hidden by default) -->
        <div id="mobile-sidebar-overlay" class="fixed inset-0 bg-black opacity-50 z-40 hidden lg:hidden"></div>

        <!-- Sidebar -->
        <div id="sidebar"
            class="fixed lg:static lg:block w-64 bg-sidebar-bg text-white transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-50 h-full overflow-y-auto">
            <div class="p-5 border-b border-gray-700">
                <h1 class="text-2xl font-bold text-center">Dashboard</h1>
            </div>
            <nav class="mt-5">
                <ul>
                    <li class="px-5 py-2 hover:bg-sidebar-active transition">
                        <a href="#" class="flex items-center space-x-3">
                            <i data-feather="home" class="w-5 h-5"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="px-5 py-2 hover:bg-sidebar-active transition">
                        <a href="#" class="flex items-center space-x-3">
                            <i data-feather="trending-up" class="w-5 h-5"></i>
                            <span>Analytics</span>
                        </a>
                    </li>
                    <li class="px-5 py-2 hover:bg-sidebar-active transition">
                        <a href="#" class="flex items-center space-x-3">
                            <i data-feather="users" class="w-5 h-5"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="px-5 py-2 hover:bg-sidebar-active transition">
                        <a href="#" class="flex items-center space-x-3">
                            <i data-feather="settings" class="w-5 h-5"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white/80 backdrop-blur-md shadow-md dark:bg-gray-900 dark:text-white transition">
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
                                class="w-full pl-12 pr-4 py-2 rounded-full bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-brand-primary focus:border-brand-primary transition">
                            <i data-feather="search"
                                class="absolute left-4 top-2.5 text-gray-400 dark:text-gray-500 w-5 h-5"></i>
                        </div>
                    </div>

                    <!-- Header Right Icons -->
                    <div class="flex items-center space-x-5">
                        <!-- Notification Bell -->
                        <button class="relative text-gray-700 dark:text-gray-300 hover:text-brand-primary transition">
                            <i data-feather="bell" class="w-6 h-6"></i>
                            <span
                                class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1.5 animate-pulse">3</span>
                        </button>

                        <!-- Profile Dropdown -->
                        <div class="relative group">
                            <img src="/api/placeholder/40/40" alt="Profile"
                                class="rounded-full w-10 h-10 border-2 border-gray-300 dark:border-gray-600 cursor-pointer transition-transform transform group-hover:scale-110">
                            <div
                                class="absolute bottom-0 right-0 h-3 w-3 bg-green-500 rounded-full border-2 border-white">
                            </div>

                            <!-- Dropdown Menu -->
                            <div
                                class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 shadow-lg rounded-lg opacity-0 group-hover:opacity-100 scale-95 group-hover:scale-100 transition-all duration-300 origin-top-right">
                                <a href="#"
                                    class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Profile</a>
                                <a href="#"
                                    class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Settings</a>
                                <a href="#"
                                    class="block px-4 py-2 text-red-600 dark:text-red-400 hover:bg-gray-100 dark:hover:bg-gray-700">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <!-- Main Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Key Metric Cards -->
                    <div class="bg-white p-5 rounded-lg shadow-md">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm text-gray-500">Total Revenue</p>
                                <h2 class="text-2xl font-bold text-gray-800">$45,231</h2>
                            </div>
                            <div class="bg-green-100 p-2 rounded-full">
                                <i data-feather="trending-up" class="text-green-500 w-6 h-6"></i>
                            </div>
                        </div>
                        <p class="text-sm text-green-500 mt-2">+12.5% from last month</p>
                    </div>

                    <div class="bg-white p-5 rounded-lg shadow-md">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm text-gray-500">New Users</p>
                                <h2 class="text-2xl font-bold text-gray-800">1,234</h2>
                            </div>
                            <div class="bg-blue-100 p-2 rounded-full">
                                <i data-feather="users" class="text-blue-500 w-6 h-6"></i>
                            </div>
                        </div>
                        <p class="text-sm text-blue-500 mt-2">+8.2% from last week</p>
                    </div>

                    <div class="bg-white p-5 rounded-lg shadow-md">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm text-gray-500">Active Projects</p>
                                <h2 class="text-2xl font-bold text-gray-800">23</h2>
                            </div>
                            <div class="bg-purple-100 p-2 rounded-full">
                                <i data-feather="briefcase" class="text-purple-500 w-6 h-6"></i>
                            </div>
                        </div>
                        <p class="text-sm text-purple-500 mt-2">+3 new this week</p>
                    </div>

                    <div class="bg-white p-5 rounded-lg shadow-md">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm text-gray-500">Pending Tasks</p>
                                <h2 class="text-2xl font-bold text-gray-800">14</h2>
                            </div>
                            <div class="bg-red-100 p-2 rounded-full">
                                <i data-feather="clock" class="text-red-500 w-6 h-6"></i>
                            </div>
                        </div>
                        <p class="text-sm text-red-500 mt-2">Urgent attention needed</p>
                    </div>
                </div>

                <!-- Recent Activity Table -->
                <div class="bg-white mt-6 rounded-lg shadow-md overflow-x-auto">
                    <div class="p-5 border-b">
                        <h3 class="text-lg font-semibold text-gray-800">Recent Activity</h3>
                    </div>
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-100 text-gray-600 text-sm">
                                <th class="py-3 px-4 text-left">Project</th>
                                <th class="py-3 px-4 text-left">Status</th>
                                <th class="py-3 px-4 text-left">Progress</th>
                                <th class="py-3 px-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-50 transition">
                                <td class="py-3 px-4">Website Redesign</td>
                                <td class="py-3 px-4">
                                    <span
                                        class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-xs">Active</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 65%"></div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-right">
                                    <button class="text-blue-500 hover:text-blue-700 mr-2">
                                        <i data-feather="edit" class="w-5 h-5"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700">
                                        <i data-feather="trash-2" class="w-5 h-5"></i>
                                    </button>
                                </td>
                            </tr>
                            <!-- More table rows can be added similarly -->
                        </tbody>
                    </table>
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-white shadow-md">
                <div class="container mx-auto px-4 py-4 text-center text-gray-600">
                    <p>&copy; 2024 Dashboard. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </div>

    <script>
        // Mobile Sidebar Toggle
        const sidebarToggle = document.getElementById('mobile-sidebar-toggle');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('mobile-sidebar-overlay');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            sidebarOverlay.classList.toggle('hidden');
        });

        sidebarOverlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
        });

        // Initialize Feather Icons
        feather.replace();
    </script>
</body>

</html>
