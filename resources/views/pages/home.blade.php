@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="bg-white py-24">
    <div class="container mx-auto px-6 lg:px-8 flex flex-col lg:flex-row items-center">
        <!-- Text Section -->
        <div class="lg:w-1/2">
            <h1 class="text-4xl lg:text-5xl font-bold text-burgundy leading-tight">
                Selamat Datang di <span class="text-maroon">Sari Law Office</span>
            </h1>
            <p class="mt-6 text-lg text-[#593C39] text-justify">
                Kantor hukum terkemuka di Denpasar, Bali, Indonesia! Berdiri sejak 1993, kami menyediakan layanan jasa hukum terbaik di seluruh Indonesia.
                Sebagai Pengacara, Auditor Hukum, Konsultan Hukum yang berpengalaman dalam bidang hukum perdata khususnya hukum bisnis & perbankan.
            </p>
            <a href="https://wa.me/6281234567890"
                class="mt-6 inline-block bg-burgundy text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-maroon transition duration-300">
                Selesaikan Masalahmu, Konsultasikan Sekarang!
            </a>
        </div>
        <!-- Image Section -->
        <div class="lg:w-1/2 mt-10 lg:mt-0 lg:pl-32">
            <img src="{{ asset('/image/new.jpg') }}" alt="Sari Law Office" class="w-full max-w-xl rounded-lg shadow-md border-4 border-taupe">
        </div>

    </div>
</div>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/6281234567890"
    class="fixed bottom-6 right-6 bg-[#25D366] text-white w-14 h-14 flex items-center justify-center rounded-full shadow-lg hover:bg-[#1B8F4D] transition duration-300">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-7 h-7" viewBox="0 0 24 24">
        <path d="M20.52 3.48A11.77 11.77 0 0 0 2.67 17.72L1 23.08l5.42-1.7a11.77 11.77 0 0 0 5.65 1.44h.05a11.79 11.79 0 0 0 11.78-11.78 11.7 11.7 0 0 0-3.38-8.34zM12 21.35a9.89 9.89 0 0 1-5.11-1.4l-.36-.22-3.21 1 1-3.14-.23-.37A9.85 9.85 0 1 1 12 21.35zm4.71-7c-.26-.13-1.54-.76-1.77-.84s-.41-.13-.58.13a7.41 7.41 0 0 1-.84 1c-.15.16-.3.18-.55.06a8.27 8.27 0 0 1-2.44-1.51 9.16 9.16 0 0 1-1.7-2.1c-.17-.3 0-.46.13-.59s.3-.33.45-.5.22-.26.33-.43a.55.55 0 0 0 0-.52c-.07-.14-.58-1.39-.79-1.88s-.42-.44-.58-.44h-.5a1 1 0 0 0-.73.36A3.05 3.05 0 0 0 7 10.36a5.2 5.2 0 0 0 .54 2.17 11.63 11.63 0 0 0 5.09 5 6.08 6.08 0 0 0 2.83.72 4.7 4.7 0 0 0 1.44-.22 3.49 3.49 0 0 0 1.1-.73 2.68 2.68 0 0 0 .18-1.57c-.07-.12-.24-.19-.5-.32z"></path>
    </svg>
</a>
<div class="bg-white py-24">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 px-4 py-12">
        <!-- Kolom Kiri: Gambar -->
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('/image/lawyer.jpg') }}" alt="Foto 1" class="w-full h-auto object-cover rounded-lg  py-8">
            <img src="{{ asset('/image/new2.jpg') }}" alt="Foto 2" class="w-full h-auto object-cover rounded-lg shadow-md">
            <img src="{{ asset('/image/new3.jpg') }}" alt="Foto 3" class="w-full h-auto object-cover rounded-lg shadow-md">
            <img src="{{ asset('/image/new4.jpg') }}" alt="Foto 4" class="w-full h-auto object-cover rounded-lg shadow-md">
        </div>

        <!-- Kolom Kanan: Tentang Kami -->
        <div class="flex flex-col justify-center">
            <h1 class="text-8xl font-bold text-black mb-6">Tentang Kami</h1>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-justify">
                Berdiri sejak 1993, akan terus tumbuh dan berkembang menjadi firma hukum yang tetap bekerja secara profesional dengan tenaga ahli yang berkompeten dan berpengalaman demi kepentingan klien dan nilai-nilai keadilan.
            </p>
            <a href="{{ url('/contact') }}" 
                class="inline-block bg-burgundy text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:text-maroon transition duration-300">
                Klik Disini Untuk Berkenalan Dengan Kami
            </a>
        </div>
    </div>
</div>

@endsection