@extends('dashboard.components.main')

@section('content')
    <div class="bg-gray-100 antialiased">
        <div class="container mx-auto px-4 py-8">
            <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
                <div class="bg-gradient-to-b from-[#1E293B] to-[#334155] p-6">
                    <h1 class="text-3xl font-extrabold text-white mb-2">Booking Details</h1>
                    <p class="text-blue-100 text-sm">View the details of the booking</p>
                </div>

                <div class="p-6">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-gray-700 font-semibold">Booking ID</label>
                            <p class="text-gray-700">BK-{{ str_pad($reservation->id, 3, '0', STR_PAD_LEFT) }}</p>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold">Guest Name</label>
                            <p class="text-gray-700">{{ $reservation->customer_name }}</p>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold">Email</label>
                            <p class="text-gray-700">{{ $reservation->email }}</p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-semibold">Check-In Date</label>
                                <p class="text-gray-700">
                                    {{ \Carbon\Carbon::parse($reservation->check_in)->format('M d, Y') }}</p>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold">Check-Out Date</label>
                                <p class="text-gray-700">
                                    {{ \Carbon\Carbon::parse($reservation->check_out)->format('M d, Y') }}</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-semibold">Adults</label>
                                <p class="text-gray-700">{{ $reservation->adults }}</p>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold">Children</label>
                                <p class="text-gray-700">{{ $reservation->children ?? '0' }}</p>
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold">Room Type</label>
                            <p class="text-gray-700">{{ $reservation->room_type }}</p>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold">Number of Rooms</label>
                            <p class="text-gray-700">{{ $reservation->rooms }}</p>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold">Status</label>
                            <p class="text-gray-700">
                                <span
                                    class="px-3 py-1 rounded-full text-xs font-semibold
                                    @if ($reservation->status == 'Confirmed') bg-green-100 text-green-800
                                    @elseif($reservation->status == 'Pending') bg-yellow-100 text-yellow-800
                                    @else bg-red-100 text-red-800 @endif">
                                    {{ $reservation->status }}
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-end space-x-2 mt-6">
                        <a href="{{ route('dashboard.booking.edit', $reservation->id) }}"
                            class="bg-yellow-500 text-white px-6 py-2 rounded-lg hover:bg-yellow-600 transition shadow-md">
                            Edit Booking
                        </a>
                        <a href="{{ route('dashboard.booking') }}"
                            class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition shadow-md">
                            Back to Bookings
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
