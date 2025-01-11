@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Contact Us</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium">Name</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div>
            <label for="email" class="block text-sm font-medium">Email</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div>
            <label for="message" class="block text-sm font-medium">Message</label>
            <textarea id="message" name="message" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Send Message</button>
    </form>

    <div class="mt-8">
        <h2 class="text-2xl font-bold">Latest Message</h2>
        <p><strong>Name:</strong> {{ $contact['name'] }}</p>
        <p><strong>Email:</strong> {{ $contact['email'] }}</p>
        <p><strong>Message:</strong> {{ $contact['message'] }}</p>
        <p><strong>Submitted At:</strong> {{ $contact['created_at']->format('F j, Y, g:i a') }}</p>
    </div>
</div>
@endsection
