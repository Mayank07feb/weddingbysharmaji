@extends('dashboard.components.main')

@section('content')
    <div class="py-4">
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
                            <span class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-xs">Active</span>
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

    </div>

    @include('dashboard.components.texteditor')

    {{-- <div class="mt-6">
        <textarea id="editor"></textarea>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script> --}}
@endsection
