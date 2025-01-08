@extends('layouts.app')

@section('title', 'Konsultasi')

@section('content')
<div class="bg-gray-50 min-h-screen flex flex-col items-center justify-center py-10">
    <!-- Logo -->
    <div class="mb-6">
        <img src="{{ asset('/image/logo.png') }}" alt="Kantor Hukum" class="h-20">
    </div>
    <!-- Judul dan Subjudul -->
    <div class="text-center mb-10">
        <h1 class="text-2xl font-bold text-gray-800">Kantor Hukum</h1>
        <p class="text-lg text-gray-600">Silahkan pilih konsultasi melalui</p>
    </div>
    <!-- Link Konsultasi -->
    <div class="space-y-4 w-full max-w-md">
        <!-- WhatsApp -->
        <a href="https://wa.me/6281234567890" class="flex items-center justify-between bg-white border rounded-full px-6 py-3 shadow hover:bg-gray-100">
            <div class="flex items-center space-x-4">
                <div class="bg-[#25D366] text-white w-8 h-8 flex items-center justify-center rounded-full">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <span class="text-lg font-semibold text-gray-800">WhatsApp</span>
            </div>
            <i class="fas fa-ellipsis-h text-gray-400"></i>
        </a>
        <!-- Email -->
        <a href="mailto:email@example.com" class="flex items-center justify-between bg-white border rounded-full px-6 py-3 shadow hover:bg-gray-100">
            <div class="flex items-center space-x-4">
                <div class="bg-blue-500 text-white w-8 h-8 flex items-center justify-center rounded-full">
                    <i class="fas fa-envelope"></i>
                </div>
                <span class="text-lg font-semibold text-gray-800">Email</span>
            </div>
            <i class="fas fa-ellipsis-h text-gray-400"></i>
        </a>
        <!-- Maps -->
        <a href="https://goo.gl/maps/example" class="flex items-center justify-between bg-white border rounded-full px-6 py-3 shadow hover:bg-gray-100">
            <div class="flex items-center space-x-4">
                <div class="bg-red-500 text-white w-8 h-8 flex items-center justify-center rounded-full">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <span class="text-lg font-semibold text-gray-800">Maps</span>
            </div>
            <i class="fas fa-ellipsis-h text-gray-400"></i>
        </a>
        <!-- YouTube -->
        <a href="https://youtube.com/example" class="flex items-center justify-between bg-white border rounded-full px-6 py-3 shadow hover:bg-gray-100">
            <div class="flex items-center space-x-4">
                <div class="bg-red-600 text-white w-8 h-8 flex items-center justify-center rounded-full">
                    <i class="fab fa-youtube"></i>
                </div>
                <span class="text-lg font-semibold text-gray-800">YouTube</span>
            </div>
            <i class="fas fa-ellipsis-h text-gray-400"></i>
        </a>
        <!-- Instagram -->
        <a href="https://instagram.com/example" class="flex items-center justify-between bg-white border rounded-full px-6 py-3 shadow hover:bg-gray-100">
            <div class="flex items-center space-x-4">
                <div class="bg-pink-500 text-white w-8 h-8 flex items-center justify-center rounded-full">
                    <i class="fab fa-instagram"></i>
                </div>
                <span class="text-lg font-semibold text-gray-800">Instagram</span>
            </div>
            <i class="fas fa-ellipsis-h text-gray-400"></i>
        </a>
        <!-- Facebook -->
        <a href="https://facebook.com/example" class="flex items-center justify-between bg-white border rounded-full px-6 py-3 shadow hover:bg-gray-100">
            <div class="flex items-center space-x-4">
                <div class="bg-blue-600 text-white w-8 h-8 flex items-center justify-center rounded-full">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <span class="text-lg font-semibold text-gray-800">Facebook</span>
            </div>
            <i class="fas fa-ellipsis-h text-gray-400"></i>
        </a>
        <!-- Website -->
        <a href="https://example.com" class="flex items-center justify-between bg-white border rounded-full px-6 py-3 shadow hover:bg-gray-100">
            <div class="flex items-center space-x-4">
                <div class="bg-gray-700 text-white w-8 h-8 flex items-center justify-center rounded-full">
                    <i class="fas fa-globe"></i>
                </div>
                <span class="text-lg font-semibold text-gray-800">Website</span>
            </div>
            <i class="fas fa-ellipsis-h text-gray-400"></i>
        </a>
    </div>
</div>
@endsection
