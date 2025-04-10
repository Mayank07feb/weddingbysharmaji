@extends('dashboard.components.main')

@section('content')
    <div class="bg-gray-100 antialiased">
        <div class="container mx-auto px-4 py-8">
            <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
                <div class="bg-gradient-to-b from-[#1E293B] to-[#334155] p-6">

                    <div class="flex flex-col sm:flex-row justify-between items-center">
                        <div>
                            <h1 class="text-2xl font-extrabold text-white mb-2">Transactions</h1>
                            <p class="text-blue-100 text-xs">Manage and review all transactions</p>
                        </div>
                        <a href="{{ route('dashboard.transactions.create') }}">
                            <button
                                class="mt-4 sm:mt-0 bg-white text-[#334155] px-6 py-2 rounded-lg font-semibold hover:bg-blue-50 transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                                + New Transaction
                            </button>
                        </a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse bg-white shadow-md rounded-lg text-sm">
                            <thead>
                                <tr class="bg-gray-200 text-gray-700 text-xs">
                                    <th class="p-3 text-left">Transaction ID</th>
                                    <th class="p-3 text-left">User</th>
                                    <th class="p-3 text-left">Amount (₹)</th>
                                    <th class="p-3 text-left">Status</th>
                                    <th class="p-3 text-left">Date</th>
                                    <th class="p-3 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="p-3">12345</td>
                                    <td class="p-3">John Doe</td>
                                    <td class="p-3">₹ 500.00</td>
                                    <td class="p-3">
                                        <span class="px-2 py-1 rounded text-white bg-green-500 text-xs">Completed</span>
                                    </td>
                                    <td class="p-3">Mar 30, 2025</td>
                                    <td class="p-3 flex space-x-1">
                                        <a href="#"
                                            class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition text-xs">View</a>
                                        <a href="#"
                                            class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition text-xs">Edit</a>
                                        <a href="#"
                                            class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition text-xs">Delete</a>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3">67890</td>
                                    <td class="p-3">Jane Smith</td>
                                    <td class="p-3">₹ 1200.50</td>
                                    <td class="p-3">
                                        <span class="px-2 py-1 rounded text-white bg-yellow-500 text-xs">Pending</span>
                                    </td>
                                    <td class="p-3">Mar 28, 2025</td>
                                    <td class="p-3 flex space-x-1">
                                        <a href="#"
                                            class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition text-xs">View</a>
                                        <a href="#"
                                            class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition text-xs">Edit</a>
                                        <a href="#"
                                            class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition text-xs">Delete</a>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3">54321</td>
                                    <td class="p-3">Alice Johnson</td>
                                    <td class="p-3">₹ 320.75</td>
                                    <td class="p-3">
                                        <span class="px-2 py-1 rounded text-white bg-red-500 text-xs">Failed</span>
                                    </td>
                                    <td class="p-3">Mar 25, 2025</td>
                                    <td class="p-3 flex space-x-1">
                                        <a href="{{route('dashboard.transactions.show')}}"
                                            class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition text-xs">View</a>
                                        <a href="{{route('dashboard.transactions.edit')}}"
                                            class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition text-xs">Edit</a>
                                        <a href="#"
                                            class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition text-xs">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
