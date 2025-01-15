@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="bg-white py-24">
    <div class="container mx-auto px-6 lg:px-8 flex flex-col lg:flex-row items-center">
        <!-- Text Section -->
        <div class="lg:w-1/2">
            <h1 class="text-4xl lg:text-5xl font-bold text-burgundy leading-tight">
                Selamat Datang di <span class="text-maroon">Kantor Hukum</span>
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
        <div x-data="slider()" x-init="start()" class="relative lg:w-1/2 mt-10 lg:mt-0 lg:pl-36">
            <!-- Wrapper Slider -->
            <div class="overflow-hidden rounded-lg shadow-md border-4 border-gray-200">
                <div class="flex transition-transform duration-700 ease-in-out"
                    :style="`transform: translateX(-${currentIndex * 100}%);`">
                    <img src="{{ asset('/image/new3.jpg') }}" alt="Slide 1" class="w-full">
                    <img src="{{ asset('/image/new2.jpg') }}" alt="Slide 2" class="w-full">
                    <img src="{{ asset('/image/new4.jpg') }}" alt="Slide 3" class="w-full">
                </div>
            </div>

            <!-- Navigation Dots -->
            <div class="flex justify-center mt-4 space-x-2">
                <template x-for="(image, index) in images" :key="index">
                    <button @click="goToSlide(index)"
                        :class="{'bg-gray-700': index === currentIndex, 'bg-gray-300': index !== currentIndex}"
                        class="w-3 h-3 rounded-full"></button>
                </template>
            </div>
        </div>
    </div>
</div>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/6281234567890"
    class="fixed bottom-6 right-6 bg-[#25D366] text-white w-14 h-14 flex items-center justify-center rounded-full shadow-lg hover:bg-[#1B8F4D] transition duration-300">
    <img src="{{ asset('/icons/icons8-whatsapp-128.png') }}" alt="WhatsApp"
        class="w-8 h-8"> <!-- Gambar lebih kecil -->
</a>
<div class="bg-white py-24"></div>
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
        <div class="flex justify-start">
            <a href="{{ url('/contact') }}"
                class="inline-block bg-burgundy text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:text-maroon transition duration-300"
                style="max-width: fit-content;">
                Klik Disini Untuk Berkenalan Dengan Kami
            </a>
        </div>
    </div>
</div>
</div>

<div class="container mx-auto py-32">
    <div class="text-center">
        <h1 class="text-6xl font-extrabold text-[#6E0E0A] mb-8">Layanan
            <span class="text-[#A31621]">Kami</span>
        </h1>
        <h2 class="text-5x1 font-semibold text-gray-600 mb-10">Berikut layanan hukum terbaik kami</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 py-11">
        <!-- Pengacara / Lawyer -->
        <div class="bg-[#F4EDEB] shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 border-t-4 border-[#A31621]">
            <div class="mb-4">
                <img src="{{ asset('/icons/icon10.png') }}" alt="Lawyer Icon" class="w-68 mx-auto">
            </div>
            <h3 class="text-2xl font-semibold text-[#6E0E0A] mb-4">Pengacara / Lawyer</h3>
            <p class="text-[#8E6246] text-justify">Pengacara berpengalaman, kompeten, dan profesional, siap membantu Anda menyelesaikan masalah hukum Anda.</p>
        </div>

        <!-- Audit Hukum -->
        <div class="text-center bg-white shadow-lg p-6 rounded-lg">
            <div class="mb-4">
                <img src="{{ asset('/icons/icon6.png') }}" alt="Audit Icon" class="w-68  mx-auto">
            </div>
            <h3 class="text-xl font-semibold text-gray-800 text-justify">Audit Hukum</h3>
            <p class="text-gray-600 mt-2 text-justify">Cegah risiko hukum, tingkatkan kepatuhan akan dokumen hukum pada perusahaan Anda.</p>
        </div>

        <!-- Konsultan Hukum Bank -->
        <div class="text-center bg-white shadow-lg p-6 rounded-lg">
            <div class="mb-4">
                <img src="{{ asset('/icons/icon8.png') }}" alt="Bank Consultant Icon" class="w-68  mx-auto">
            </div>
            <h3 class="text-xl font-semibold text-gray-800 text-justify">Konsultan Hukum Bank</h3>
            <p class="text-gray-600 mt-2 text-justify">Pengacara bank top Indonesia yang telah tersertifikasi dari BNSP. Cepat & tangguh!</p>
        </div>

        <!-- Narasumber Ahli Hukum -->
        <div class="text-center bg-white shadow-lg p-6 rounded-lg">
            <div class="mb-4">
                <img src="{{ asset('/icons/icon9.png') }}" alt="Expert Icon" class="w-68 mx-auto">
            </div>
            <h3 class="text-xl font-semibold text-gray-800 text-justify">Narasumber Ahli Hukum</h3>
            <p class="text-gray-600 mt-2 text-justify">Kami membantu Anda memahami kompleksitas hukum dengan bahasa yang mudah dimengerti.</p>
        </div>
    </div>
</div>

<div class="bg-[#FFFFFF] py-24 mb-14">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
        <!-- Judul -->
        <h1 class="text-4xl font-extrabold text-[#6E0E0A] mb-8">
            Mengapa Memilih <span class="text-[#A31621]">Kantor Hukum Anda?</span>
        </h1>
        <p class="text-[#8E6246] text-lg max-w-3xl mx-auto mb-16">
            Kami hadir untuk memberikan solusi hukum terbaik bagi Anda. Dengan pengalaman, komitmen, dan pendekatan inovatif, kami memastikan layanan hukum yang profesional dan terpercaya.
        </p>

        <!-- Card Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Keahlian -->
            <div class="bg-[#F4EDEB] shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 border-t-4 border-[#6E0E0A]">
                <div class="flex items-center justify-center mb-6">
                    <img src="{{ asset('/icons/keahlian-icon.png') }}" alt="Keahlian Icon" class="w-16 h-16">
                </div>
                <h2 class="text-2xl font-semibold text-[#6E0E0A] mb-4">Keahlian</h2>
                <p class="text-[#A31621] text-justify">
                    Berpengalaman lebih dari 25 tahun di berbagai bidang hukum seperti bisnis, perbankan, litigasi pidana, dan lainnya. Kami memastikan solusi terbaik untuk kebutuhan hukum Anda.
                </p>
            </div>

            <!-- Komitmen -->
            <div class="bg-[#F4EDEB] shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 border-t-4 border-[#A31621]">
                <div class="flex items-center justify-center mb-6">
                    <img src="{{ asset('/icons/komitmen-icon.png') }}" alt="Komitmen Icon" class="w-16 h-16">
                </div>
                <h2 class="text-2xl font-semibold text-[#A31621] mb-4">Komitmen</h2>
                <p class="text-[#8E6246] text-justify">
                    Kami berdedikasi untuk menyelesaikan setiap kasus hingga tuntas, dengan fokus pada hubungan yang berbasis kepercayaan dan solusi yang berkelanjutan.
                </p>
            </div>

            <!-- Tersertifikasi -->
            <div class="bg-[#F4EDEB] shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 border-t-4 border-[#8E6246]">
                <div class="flex items-center justify-center mb-6">
                    <img src="{{ asset('/icons/tersertifikasi-icon.png') }}" alt="Tersertifikasi Icon" class="w-16 h-16">
                </div>
                <h2 class="text-2xl font-semibold text-[#8E6246] mb-4">Tersertifikasi</h2>
                <p class="text-[#8E6246] text-justify">
                    Kami memiliki auditor hukum bersertifikat "Certified Legal Auditor" (CLA) dan "Certified Banking Legal Consultant" (CBLC), menjamin profesionalisme dan kualitas layanan terbaik.
                </p>
            </div>

            <!-- Pendekatan Inovatif -->
            <div class="bg-[#F4EDEB] shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 border-t-4 border-[#C5A28F]">
                <div class="flex items-center justify-center mb-6">
                    <img src="{{ asset('/icons/inovatif-icon.png') }}" alt="Inovatif Icon" class="w-16 h-16">
                </div>
                <h2 class="text-2xl font-semibold text-[#C5A28F] mb-4">Inovatif</h2>
                <p class="text-[#8E6246] text-justify">
                    Dengan memanfaatkan teknologi modern, kami menyediakan solusi hukum yang efisien, efektif, dan sesuai dengan kebutuhan masa kini.
                </p>
            </div>
        </div>
    </div>
</div>


@endsection