@extends('dashboard.components.main')

@section('content')
    <div class="bg-gray-100 antialiased">
        <div class="container mx-auto px-4 py-8">
            <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
                <div class="bg-gradient-to-b from-[#1E293B] to-[#334155] p-6">
                    <h1 class="text-3xl font-extrabold text-white mb-2">Add About Us</h1>
                </div>
                <div class="p-6">
                    <form action="{{ route('dashboard.about.store') }}" method="POST" enctype="multipart/form-data"
                        class="space-y-4">
                        @csrf
                        <input type="text" name="title" placeholder="Title" class="w-full p-2 border rounded-lg">
                        <input type="text" name="subtitle" placeholder="Subtitle" class="w-full p-2 border rounded-lg">
                        <textarea name="description" placeholder="Description" class="w-full p-2 border rounded-lg"></textarea>
                        <input type="text" name="established_year" placeholder="Established Year" class="w-full p-2 border rounded-lg">
                        <input type="text" name="location" placeholder="Location" class="w-full p-2 border rounded-lg">
                        <input type="text" name="quick_access" placeholder="Quick Access" class="w-full p-2 border rounded-lg">
                        <input type="file" name="image" class="w-full p-2 border rounded-lg">
                        <input type="file" name="gallery_images[]" multiple class="w-full p-2 border rounded-lg">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection