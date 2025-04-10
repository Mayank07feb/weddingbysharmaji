@extends('dashboard.components.main')

@section('content')
    <div class="bg-gray-100 antialiased">
        <div class="container mx-auto px-4 py-8">
            <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
                <div class="bg-gradient-to-b from-[#1E293B] to-[#334155] p-6">
                    <h1 class="text-3xl font-extrabold text-white mb-2">About Us Details</h1>
                </div>
                <div class="p-6">
                    <p><strong>Title:</strong> {{ $about->title }}</p>
                    <p><strong>Subtitle:</strong> {{ $about->subtitle }}</p>
                    <p><strong>Description:</strong> {{ $about->description }}</p>
                    <p><strong>Established Year:</strong> {{ $about->established_year }}</p>
                    <p><strong>Location:</strong> {{ $about->location }}</p>
                    <p><strong>Image:</strong></p>
                    @if ($about->image)
                        <img src="{{ asset('storage/' . $about->image) }}" class="w-32 h-32 rounded-lg">
                    @else
                        <span class="text-gray-500">No Image</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
