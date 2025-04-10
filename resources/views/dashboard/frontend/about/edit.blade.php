@extends('dashboard.components.main')

@section('content')
    <div class="bg-gray-100 antialiased">
        <div class="container mx-auto px-4 py-8">
            <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
                <div class="bg-gradient-to-b from-[#1E293B] to-[#334155] p-6">
                    <h1 class="text-3xl font-extrabold text-white mb-2">Edit About Us</h1>
                </div>
                <div class="p-6">
                    <form action="{{ route('dashboard.about.update', $about->id) }}" method="POST"
                        enctype="multipart/form-data" class="space-y-4">

                        @csrf
                        @method('PUT')
                        <input type="text" name="title" value="{{ $about->title }}" class="w-full p-2 border rounded-lg">
                        <input type="text" name="subtitle" value="{{ $about->subtitle }}" class="w-full p-2 border rounded-lg">
                        <textarea name="description" class="w-full p-2 border rounded-lg">{{ $about->description }}</textarea>
                        <input type="text" name="established_year" value="{{ $about->established_year }}" class="w-full p-2 border rounded-lg">
                        <input type="text" name="location" value="{{ $about->location }}" class="w-full p-2 border rounded-lg">
                        <input type="text" name="quick_access" value="{{ $about->quick_access }}" class="w-full p-2 border rounded-lg">
                        <input type="file" name="image" class="w-full p-2 border rounded-lg">
                        <input type="file" name="gallery_images[]" multiple class="w-full p-2 border rounded-lg">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
