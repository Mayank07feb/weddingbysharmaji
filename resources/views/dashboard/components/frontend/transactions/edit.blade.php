@extends('dashboard.components.main')

@section('content')
    <div class="bg-gray-100 antialiased">
        <div class="container mx-auto px-4 py-8">
            <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
                <div class="bg-gradient-to-b from-[#1E293B] to-[#334155] p-6">
                    <h1 class="text-2xl font-extrabold text-white mb-2">Edit Transaction</h1>
                    <p class="text-blue-100 text-xs">Modify transaction details</p>
                </div>

                <div class="p-6">
                    <form action="#" method="POST" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">User</label>
                            <input type="text" name="user" value="John Doe" class="w-full p-2 border border-gray-300 rounded-lg">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Amount (₹)</label>
                            <input type="number" step="0.01" name="amount" value="500.00" class="w-full p-2 border border-gray-300 rounded-lg">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Status</label>
                            <select name="status" class="w-full p-2 border border-gray-300 rounded-lg">
                                <option value="Completed" selected>Completed</option>
                                <option value="Pending">Pending</option>
                                <option value="Failed">Failed</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Date</label>
                            <input type="date" name="date" value="2025-03-30" class="w-full p-2 border border-gray-300 rounded-lg">
                        </div>

                        <div class="flex space-x-2">
                            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition w-full">Update Transaction</button>
                            <a href="#" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition w-full text-center">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection