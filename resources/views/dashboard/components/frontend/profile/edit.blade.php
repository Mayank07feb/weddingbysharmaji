@extends('dashboard.components.main')

@section('content')
<div class="container mx-auto px-6 py-8">
    <!-- Edit Profile Header -->
    <div class="bg-gradient-to-b from-[#1E293B] to-[#334155] p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-extrabold text-white">Edit Profile</h1>
        <p class="text-blue-100 text-sm mt-1">Modify your profile information</p>
    </div>

    <!-- Edit Profile Card -->
    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-2xl p-8 mt-6">
        <div class="flex items-center space-x-6">
            <img src="{{ Auth::user()->profile_image ?? asset('default-avatar.png') }}" 
                class="w-20 h-20 rounded-full border-4 border-gray-300 dark:border-gray-600 shadow-md">
            <div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white">{{ Auth::user()->name }}</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">{{ Auth::user()->email }}</p>
            </div>
        </div>

        <!-- Edit Profile Form -->
        <form action="#" method="POST" enctype="multipart/form-data" class="mt-8 space-y-6">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Name -->
                <div>
                    <label class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Full Name</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" 
                        class="w-full px-4 py-3 border rounded-lg dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Email (Disabled) -->
                <div>
                    <label class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Email Address</label>
                    <input type="email" name="email" value="{{ Auth::user()->email }}" disabled
                        class="w-full px-4 py-3 border rounded-lg dark:bg-gray-700 dark:text-white cursor-not-allowed opacity-70">
                </div>

                <!-- Profile Picture -->
                <div class="col-span-1 md:col-span-2">
                    <label class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Upload Profile Picture</label>
                    <input type="file" name="profile_image" 
                        class="w-full px-4 py-3 border rounded-lg dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500">
                </div>
            </div>

            <button type="submit" 
                class="w-full md:w-auto px-6 py-3 bg-[#1E293B] hover:bg-[#253144] text-white font-medium rounded-lg shadow-md transition-all duration-300">
                Save Changes
            </button>
        </form>
    </div>
</div>
@endsection
