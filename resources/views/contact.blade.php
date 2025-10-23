@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold text-center mb-6">Contact Us</h1>

<form class="max-w-xl mx-auto bg-white p-6 rounded-xl shadow">
    <div class="mb-4">
        <label class="block font-medium">Name</label>
        <input type="text" class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
    </div>
    <div class="mb-4">
        <label class="block font-medium">Email</label>
        <input type="email" class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
    </div>
    <div class="mb-4">
        <label class="block font-medium">Message</label>
        <textarea class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500" rows="4"></textarea>
    </div>
    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
        Send Message
    </button>
</form>
@endsection
