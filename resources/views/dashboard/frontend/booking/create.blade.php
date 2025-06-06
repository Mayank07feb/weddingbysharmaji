@extends('dashboard.components.main')

@section('content')
    <div class="bg-gray-100 antialiased">
        <div class="container mx-auto px-4 py-8">
            <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
                <div class="bg-gradient-to-b from-[#1E293B] to-[#334155] p-6">
                    <h1 class="text-3xl font-extrabold text-white mb-2">Create New Booking</h1>
                    <p class="text-blue-100 text-sm">Fill in the details to create a new booking</p>
                </div>

                <div class="p-6">
                    {{-- Success & Error Messages --}}
                    @if (session('success'))
                        <div class="bg-green-100 text-green-700 p-3 rounded-md mb-4 border-l-4 border-green-500">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="bg-red-100 text-red-700 p-3 rounded-md mb-4 border-l-4 border-red-500">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('dashboard.booking.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label class="block text-gray-700 font-semibold">Guest Name</label>
                            <input type="text" name="customer_name" required
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold">Email</label>
                            <input type="email" name="email" required
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-semibold">Check-In Date</label>
                                <input type="date" name="check_in" required
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm"
                                    min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold">Check-Out Date</label>
                                <input type="date" name="check_out" required
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm"
                                    min="{{ date('Y-m-d', strtotime('+1 day')) }}"
                                    value="{{ date('Y-m-d', strtotime('+1 day')) }}">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-semibold">Adults</label>
                                <input type="number" name="adults" required min="1"
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold">Children</label>
                                <input type="number" name="children" min="0"
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm">
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold">Number of Rooms</label>
                            <input type="number" name="rooms" required min="1"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold">Room Type</label>
                            <select name="room_type" required
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm">
                                <option value="Deluxe Room">Deluxe Room</option>
                                <option value="Family Suite">Family Suite</option>
                                <option value="Standard Room">Standard Room</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold">Status</label>
                            <select name="status" required
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm">
                                <option value="Confirmed">Confirmed</option>
                                <option value="Pending">Pending</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition shadow-md">
                                Save Booking
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
