@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold text-center mb-6">Contact Us</h1>

<form method="POST" action="{{ route('contact.send') }}" class="max-w-xl mx-auto bg-white p-6 rounded-xl shadow">
    @csrf
    <div class="mb-4">
        <label class="block font-medium">Name</label>
        <input type="text" name="name" required class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
    </div>
    <div class="mb-4">
        <label class="block font-medium">Email</label>
        <input type="email" name="email" required class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
    </div>
    <div class="mb-4">
        <label class="block font-medium">Message</label>
        <textarea name="message" required class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500" rows="4"></textarea>
    </div>
    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
        Send Message
    </button>

    @if(session('success'))
        <p class="text-green-600 mt-4">{{ session('success') }}</p>
    @endif
</form>
@endsection
