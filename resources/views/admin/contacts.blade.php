@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-center">Contact Messages</h1>

@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="overflow-x-auto bg-white shadow rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="px-4 py-2 text-left">ID</th>
                <th class="px-4 py-2 text-left">Name</th>
                <th class="px-4 py-2 text-left">Email</th>
                <th class="px-4 py-2 text-left">Message</th>
                <th class="px-4 py-2 text-left">Date</th>
                <th class="px-4 py-2 text-left">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach ($contacts as $contact)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $contact->id }}</td>
                    <td class="px-4 py-2">{{ $contact->name }}</td>
                    <td class="px-4 py-2 text-blue-600">{{ $contact->email }}</td>
                    <td class="px-4 py-2">{{ Str::limit($contact->message, 50) }}</td>
                    <td class="px-4 py-2">{{ $contact->created_at->format('d M Y, h:i A') }}</td>
                    <td class="px-4 py-2">
                        <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}" onsubmit="return confirm('Are you sure you want to delete this message?');">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $contacts->links() }}
</div>
@endsection
