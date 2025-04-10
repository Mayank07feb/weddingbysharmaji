@extends('dashboard.components.main')

@section('content')
    <div class="bg-gray-100 antialiased">
        <div class="container mx-auto px-4 py-8">
            <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
                <div class="bg-gradient-to-b from-[#1E293B] to-[#334155] p-6">
                    <h1 class="text-2xl font-extrabold text-white mb-2">Transaction Details</h1>
                    <p class="text-blue-100 text-xs">View transaction information</p>
                </div>

                <div class="p-6">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">User</label>
                            <p class="w-full p-2 border border-gray-300 rounded-lg bg-gray-100">John Doe</p>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Amount (₹)</label>
                            <p class="w-full p-2 border border-gray-300 rounded-lg bg-gray-100">₹ 500.00</p>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Status</label>
                            <p class="w-full p-2 border border-gray-300 rounded-lg bg-gray-100 text-white font-semibold text-center bg-green-500">Completed</p>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Date</label>
                            <p class="w-full p-2 border border-gray-300 rounded-lg bg-gray-100">March 30, 2025</p>
                        </div>

                        <div class="flex space-x-2">
                            <a href="#" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition w-full text-center">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection