@extends('dashboard.components.main')

@section('content')
    <div class="bg-gray-100 antialiased">
        <div class="container mx-auto px-4 py-8">
            <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
                <div class="bg-gradient-to-b from-[#1E293B] to-[#334155] p-6">
                    <div class="flex flex-col sm:flex-row justify-between items-center">
                        <div>
                            <h1 class="text-3xl font-extrabold text-white mb-2">About Us Management</h1>
                            <p class="text-blue-100 text-sm">Manage the About Us section details</p>
                        </div>
                        <a href="{{ route('dashboard.about.create') }}">
                            <button
                                class="mt-4 sm:mt-0 bg-white text-[#334155] px-6 py-2 rounded-lg font-semibold hover:bg-blue-50 transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                                + Add About Us
                            </button>
                        </a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="overflow-auto">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-gray-100 text-gray-600 text-sm uppercase tracking-wider">
                                    <th class="p-4 text-left font-semibold">Title</th>
                                    <th class="p-4 text-left font-semibold">Subtitle</th>
                                    <th class="p-4 text-left font-semibold">Established Year</th>
                                    <th class="p-4 text-left font-semibold">Description</th>
                                    <th class="p-4 text-left font-semibold">Location</th>
                                    <th class="p-4 text-left font-semibold">Quick Access</th>
                                    <th class="p-4 text-left font-semibold">Image</th>
                                    <th class="p-4 text-left font-semibold">Gallery Images</th>
                                    <th class="p-4 text-center font-semibold">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($about)
                                    <tr class="border-b border-gray-200 hover:bg-blue-50 transition duration-150">
                                        <td class="p-4 text-gray-700">{{ $about->title }}</td>
                                        <td class="p-4 text-gray-700">{{ $about->subtitle }}</td>
                                        <td class="p-4 text-gray-700">{{ $about->established_year }}</td>
                                        <td class="p-4 text-gray-700">{{ $about->description }}</td>
                                        <td class="p-4 text-gray-700">{{ $about->location }}</td>
                                        <td class="p-4 text-gray-700">{{ $about->quick_access }}</td>
                                        <td class="p-4">
                                            @if ($about->image)
                                                <img src="{{ asset('storage/' . $about->image) }}" class="w-16 h-16 rounded-lg" alt="About Image">
                                            @else
                                                <span class="text-gray-500">No Image</span>
                                            @endif
                                        </td>
                                        <td class="p-4">
                                            @if ($about->gallery_images)
                                                @foreach (json_decode($about->gallery_images, true) as $gallery_image)
                                                    <img src="{{ asset('storage/' . $gallery_image) }}" class="w-12 h-12 rounded-lg inline-block" alt="Gallery Image">
                                                @endforeach
                                            @else
                                                <span class="text-gray-500">No Gallery Images</span>
                                            @endif
                                        </td>
                                        <td class="p-4">
                                            <div class="flex justify-center space-x-2">
                                                <a href="{{ route('dashboard.about.edit', $about->id) }}"
                                                    class="bg-yellow-500 text-white px-3 py-1.5 rounded-md text-xs hover:bg-yellow-600 transition duration-300">
                                                    Edit
                                                </a>
                                                <form action="{{ route('dashboard.about.destroy', $about->id) }}" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this section?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-500 text-white px-3 py-1.5 rounded-md text-xs hover:bg-red-600 transition duration-300">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td colspan="9" class="text-center text-gray-500 py-6">No About Us section found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection