@extends('dashboard.components.main')

@section('content')
    <div class="bg-gray-100 antialiased">
        <div class="container mx-auto px-4 py-8">
            <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
                <div class="bg-gradient-to-b from-[#1E293B] to-[#334155] p-6">
                    <h1 class="text-3xl font-extrabold text-white mb-2">Edit Booking</h1>
                    <p class="text-blue-100 text-sm">Update the booking details</p>
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

                    <form action="{{ route('dashboard.booking.update', $reservation->id) }}" method="POST"
                        class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <label class="block text-gray-700 font-semibold">Guest Name</label>
                            <input type="text" name="customer_name" value="{{ $reservation->customer_name }}" required
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold">Email</label>
                            <input type="email" name="email" value="{{ $reservation->email }}" required
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-semibold">Check-In Date</label>
                                <input type="date" name="check_in" value="{{ $reservation->check_in }}" required
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm"
                                    min="{{ date('Y-m-d') }}">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold">Check-Out Date</label>
                                <input type="date" name="check_out" value="{{ $reservation->check_out }}" required
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm"
                                    min="{{ date('Y-m-d', strtotime($reservation->check_in . ' +1 day')) }}">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-semibold">Adults</label>
                                <input type="number" name="adults" value="{{ $reservation->adults }}" required
                                    min="1"
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold">Children</label>
                                <input type="number" name="children" value="{{ $reservation->children }}" min="0"
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm">
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold">Room Type</label>
                            <select name="room_type" required
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm">
                                <option value="Deluxe Room"
                                    {{ $reservation->room_type == 'Deluxe Room' ? 'selected' : '' }}>Deluxe Room</option>
                                <option value="Family Suite"
                                    {{ $reservation->room_type == 'Family Suite' ? 'selected' : '' }}>Family Suite</option>
                                <option value="Standard Room"
                                    {{ $reservation->room_type == 'Standard Room' ? 'selected' : '' }}>Standard Room
                                </option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold">Number of Rooms</label>
                            <input type="number" name="rooms" value="{{ $reservation->rooms }}" required min="1"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold">Status</label>
                            <select name="status" required
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 shadow-sm">
                                <option value="Confirmed" {{ $reservation->status == 'Confirmed' ? 'selected' : '' }}>
                                    Confirmed</option>
                                <option value="Pending" {{ $reservation->status == 'Pending' ? 'selected' : '' }}>Pending
                                </option>
                                <option value="Cancelled" {{ $reservation->status == 'Cancelled' ? 'selected' : '' }}>
                                    Cancelled</option>
                            </select>
                        </div>

                        <div class="flex justify-end space-x-2">
                            <a href="{{ route('dashboard.booking') }}"
                                class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition shadow-md">
                                Cancel
                            </a>
                            <button type="submit"
                                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition shadow-md">
                                Update Booking
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
