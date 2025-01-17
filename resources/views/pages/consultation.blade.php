@extends('layouts.app')

@section('title', 'Konsultasi')

@section('content')
<div class="bg-gray-50 min-h-screen flex flex-col items-center justify-center px-4 py-8 sm:py-12">
    <!-- Logo -->
    <div class="mb-6 opacity-0 translate-y-8 transition duration-700">
        <img src="{{ asset('/image/logo.png') }}" alt="Kantor Hukum" class="h-20 sm:h-24">
    </div>

    <!-- Judul dan Subjudul -->
    <div class="text-center mb-8 opacity-0 translate-y-8 transition duration-700">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 animate-fade-in-down">Kantor Hukum</h1>
        <p class="text-base sm:text-lg text-gray-600 animate-fade-in-up">Silahkan pilih konsultasi melalui:</p>
    </div>

    <!-- Link Konsultasi -->
    <div class="w-full max-w-lg opacity-0 -translate-x-8 transition duration-700">
        @foreach([
        ['https://wa.me/6281234567890', 'whatsapp.png', 'WhatsApp', 'text-green-500'],
        ['mailto:email@example.com', 'email.png', 'Email', 'text-blue-500'],
        ['https://goo.gl/maps/example', 'maps.png', 'Maps', 'text-red-500'],
        ['https://youtube.com/example', 'youtube.png', 'YouTube', 'text-red-600'],
        ['https://instagram.com/example', 'instagram.png', 'Instagram', 'text-pink-500'],
        ['https://facebook.com/example', 'facebook.png', 'Facebook', 'text-blue-600'],
        ['http://127.0.0.1:8000/', 'website.png', 'Website', 'text-gray-700']
        ] as $link)
        <a href="{{ $link[0] }}" class="group flex items-center justify-between bg-white border rounded-xl px-5 sm:px-6 py-3 sm:py-4 shadow-lg hover:shadow-2xl hover:scale-105 transform transition-all duration-300 ease-in-out mb-3 sm:mb-4">
            <div class="flex items-center space-x-3 sm:space-x-4">
                <img src="{{ asset('/icons/'.$link[1]) }}" alt="{{ $link[2] }}" class="w-8 sm:w-10 h-8 sm:h-10 group-hover:scale-110 transform transition-transform duration-300 ease-in-out">
                <span class="text-sm sm:text-lg font-semibold text-gray-800 group-hover:{{ $link[3] }} transition-colors duration-300">{{ $link[2] }}</span>
            </div>
            <img src="{{ asset('/icons/arrow-right.png') }}" alt="Arrow" class="w-5 sm:w-6 h-5 sm:h-6 opacity-50 group-hover:opacity-100">
        </a>
        @endforeach
    </div>
</div>
@endsection
