@extends('dashboard.components.main')

@section('content')
    <div class="bg-gray-100 antialiased">
        <div class="container mx-auto px-4 py-8">
            <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
                <div class="bg-gradient-to-b from-[#1E293B] to-[#334155] p-6">
                    <div class="flex flex-col sm:flex-row justify-between items-center">
                        <div>
                            <h1 class="text-2xl font-extrabold text-white mb-2">Contact Messages</h1>
                            <p class="text-blue-100 text-xs">Manage and review all contact messages</p>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse bg-white shadow-md rounded-lg text-sm">
                            <thead>
                                <tr class="bg-gray-200 text-gray-700 text-xs">
                                    <th class="p-3 text-left">S.No</th>
                                    <th class="p-3 text-left">Customer Name</th>
                                    <th class="p-3 text-left">Email</th>
                                    <th class="p-3 text-left">Phone Number</th>
                                    <th class="p-3 text-left">Message</th>
                                    <th class="p-3 text-left">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $key => $contact)
                                    <tr class="border-b">
                                        <td class="p-3">{{ $key + 1 }}</td>
                                        <td class="p-3">{{ $contact->name }}</td>
                                        <td class="p-3">{{ $contact->email }}</td>
                                        <td class="p-3">{{ $contact->phone }}</td>
                                        <td class="p-3">{{ $contact->message }}</td>
                                        <td class="p-3">{{ $contact->created_at->format('d M Y, h:i A') }}</td>
                                    </tr>
                                @endforeach
                                @if ($contacts->isEmpty())
                                    <tr>
                                        <td colspan="6" class="p-3 text-center text-gray-500">No contact messages found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
