@extends('layouts.app')

@section('title', 'Konsultasi')

@section('content')
<div class="bg-white-50 min-h-120px flex flex-col items-center justify-center py-8">
    <!-- Logo -->
    <div class="mb-6 opacity-0 translate-y-8 transition duration-700">
        <img src="{{ asset('/image/logo.png') }}" alt="Kantor Hukum" class="h-24">
    </div>
    <!-- Judul dan Subjudul -->
    <div class="text-center mb-10 opacity-0 translate-y-8 transition duration-700">
        <h1 class="text-3xl font-bold text-gray-800 animate-fade-in-down">Kantor Hukum</h1>
        <p class="text-lg text-gray-600 animate-fade-in-up">Silahkan pilih konsultasi melalui:</p>
    </div>

    <!-- Link Konsultasi -->
    <div class="space-y-4 w-full max-w-lg opacity-0 -translate-x-8 transition duration-700">
        <!-- Contoh Item -->
        @foreach([
        ['https://wa.me/6281234567890', 'whatsapp.png', 'WhatsApp', 'text-green-500'],
        ['mailto:email@example.com', 'email.png', 'Email', 'text-blue-500'],
        ['https://goo.gl/maps/example', 'maps.png', 'Maps', 'text-red-500'],
        ['https://youtube.com/example', 'youtube.png', 'YouTube', 'text-red-600'],
        ['https://instagram.com/example', 'instagram.png', 'Instagram', 'text-pink-500'],
        ['https://facebook.com/example', 'facebook.png', 'Facebook', 'text-blue-600'],
        ['https://example.com', 'website.png', 'Website', 'text-gray-700']
        ] as $link)
        <a href="{{ $link[0] }}" class="group relative overflow-hidden flex items-center justify-between bg-white border rounded-xl px-6 py-4 shadow-lg hover:shadow-2xl hover:scale-105 transform transition-all duration-300 ease-in-out">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('/icons/'.$link[1]) }}" alt="{{ $link[2] }}" class="w-10 h-10 group-hover:scale-110 transform transition-transform duration-300 ease-in-out">
                <span class="text-lg font-semibold text-gray-800 group-hover:{{ $link[3] }} transition-colors duration-300">{{ $link[2] }}</span>
            </div>
            <img src="{{ asset('/icons/arrow-right.png') }}" alt="Arrow" class="w-6 h-6 opacity-50 group-hover:opacity-100">
        </a>
        @endforeach
    </div>
</div>
@endsection