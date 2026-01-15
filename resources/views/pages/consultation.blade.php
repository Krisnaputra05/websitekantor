@extends('layouts.app')

@section('title', 'Konsultasi')

@section('content')
<div class="bg-white min-h-screen flex flex-col items-center justify-center px-4 py-8 sm:py-12">
    <!-- Logo -->
    <div class="mb-6 opacity-0 translate-y-8 transition duration-700">
        <img src="{{ asset('/image/logo.png') }}" alt="Logo Putu Armaya & Partners" class="h-20 sm:h-24">
    </div>

    <!-- Judul dan Subjudul -->
    <div class="text-center mb-8 opacity-0 translate-y-8 transition duration-700">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 animate-fade-in-down">Putu Armaya & Partners</h1>
        <p class="text-base sm:text-lg text-gray-600 animate-fade-in-up mt-2">
            Saluran Konsultasi Hukum Terpercaya & Profesional.<br>
            Pilih metode komunikasi di bawah ini untuk terhubung dengan kami.
        </p>
    </div>

    <!-- Link Konsultasi -->
    <div class="w-full max-w-lg opacity-0 -translate-x-8 transition duration-700">
        @foreach([
        ['https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20konsultasi%20hukum.', 'whatsapp.png', 'WhatsApp (Chat Langsung)', 'text-green-500'],
        ['mailto:info@putuarmaya.com', 'email.png', 'Email (info@putuarmaya.com)', 'text-blue-500'],
        ['https://goo.gl/maps/PlaceHolderBali', 'maps.png', 'Lokasi Kantor (Denpasar, Bali)', 'text-red-500'],
        ['https://youtube.com', 'youtube.png', 'YouTube Chanel', 'text-red-600'],
        ['https://instagram.com', 'instagram.png', 'Instagram @putuarmaya', 'text-pink-500'],
        ['https://facebook.com', 'facebook.png', 'Facebook Page', 'text-blue-600'],
        ['/', 'website.png', 'Kunjungi Website Utama', 'text-gray-700']
        ] as $link)
        <a href="{{ $link[0] }}" target="_blank" class="group flex items-center justify-between bg-white border rounded-xl px-5 sm:px-6 py-3 sm:py-4 shadow-lg hover:shadow-2xl hover:scale-105 transform transition-all duration-300 ease-in-out mb-3 sm:mb-4">
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
