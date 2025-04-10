@extends('dashboard.components.main')

@section('content')
    <div class="bg-gray-100 antialiased">
        <div class="container mx-auto px-4 py-8">
            <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
                <div class="bg-gradient-to-b from-[#1E293B] to-[#334155] p-6">
                    <div class="flex flex-col sm:flex-row justify-between items-center">
                        <div>
                            <h1 class="text-3xl font-extrabold text-white mb-2">Hotel Bookings Management</h1>
                            <p class="text-blue-100 text-sm">Comprehensive reservation tracking and management</p>
                        </div>
                        <a href="{{ route('dashboard.booking.create') }}">
                            <button
                                class="mt-4 sm:mt-0 bg-white text-[#334155] px-6 py-2 rounded-lg font-semibold hover:bg-blue-50 transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                                + New Booking
                            </button>
                        </a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="overflow-auto">
                        <table class="w-full border-collapse min-w-[1200px]">
                            <thead>
                                <tr class="bg-gray-100 text-gray-600 text-sm uppercase tracking-wider">
                                    <th class="p-4 text-left font-semibold w-[7%]">Booking ID</th>
                                    <th class="p-4 text-left font-semibold w-[12%]">Guest Name</th>
                                    <th class="p-4 text-left font-semibold w-[10%]">Check-In</th>
                                    <th class="p-4 text-left font-semibold w-[10%]">Check-Out</th>
                                    <th class="p-4 text-left font-semibold w-[12%]">Contact</th>
                                    <th class="p-4 text-left font-semibold w-[10%]">Guests</th>
                                    <th class="p-4 text-left font-semibold w-[10%]">Room Type</th>
                                    <th class="p-4 text-left font-semibold w-[8%]">Rooms</th>
                                    <th class="p-4 text-left font-semibold w-[10%]">Status</th>
                                    <th class="p-4 text-center font-semibold w-[11%]">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($reservations as $reservation)
                                    <tr class="border-b border-gray-200 hover:bg-blue-50 transition duration-150">
                                        <td class="p-4 text-gray-700">
                                            BK-{{ str_pad($reservation->id, 3, '0', STR_PAD_LEFT) }}</td>
                                        <td class="p-4 font-medium text-gray-900">{{ $reservation->customer_name }}</td>
                                        <td class="p-4 text-gray-600">
                                            {{ \Carbon\Carbon::parse($reservation->check_in)->format('M d, Y') }}</td>
                                        <td class="p-4 text-gray-600">
                                            {{ \Carbon\Carbon::parse($reservation->check_out)->format('M d, Y') }}</td>
                                        <td class="p-4">
                                            <div class="text-sm text-gray-600">{{ $reservation->email }}</div>
                                        </td>
                                        <td class="p-4 text-gray-700">
                                            {{ $reservation->adults }} Adults, {{ $reservation->children ?? 0 }} Children
                                        </td>
                                        <td class="p-4 text-gray-700">{{ $reservation->room_type }}</td>
                                        <td class="p-4 text-gray-700">{{ $reservation->rooms ?? 'N/A' }}</td>
                                        <td class="p-4">
                                            <span
                                                class="px-3 py-1 rounded-full text-xs font-semibold
                                                @if ($reservation->status == 'Confirmed') bg-green-100 text-green-800
                                                @elseif($reservation->status == 'Pending') bg-yellow-100 text-yellow-800
                                                @else bg-red-100 text-red-800 @endif">
                                                {{ $reservation->status }}
                                            </span>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex justify-center space-x-2">
                                                <a href="{{ route('dashboard.booking.show', $reservation->id) }}"
                                                    class="bg-blue-500 text-white px-3 py-1.5 rounded-md text-xs hover:bg-blue-600 transition duration-300">
                                                    View
                                                </a>
                                                <a href="{{ route('dashboard.booking.edit', $reservation->id) }}"
                                                    class="bg-yellow-500 text-white px-3 py-1.5 rounded-md text-xs hover:bg-yellow-600 transition duration-300">
                                                    Edit
                                                </a>
                                                <form action="{{ route('dashboard.booking.destroy', $reservation->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this booking?');">
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
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center text-gray-500 py-6">No bookings found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
