@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="bg-white py-12 lg:py-24">
    <div class="container mx-auto px-6 lg:px-8 flex flex-col lg:flex-row items-center">
        <!-- Text Section -->
        <div class="lg:w-1/2">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-burgundy leading-snug lg:leading-tight text-center lg:text-left">
                Selamat Datang di <span class="text-maroon">Kantor Hukum</span>
            </h1>
            <p class="mt-6 text-base md:text-lg lg:text-xl text-[#593C39] text-justify lg:text-left">
                Kantor hukum terkemuka di Denpasar, Bali, Indonesia! Berdiri sejak 1993, kami menyediakan layanan jasa hukum terbaik di seluruh Indonesia.
                Sebagai Pengacara, Auditor Hukum, Konsultan Hukum yang berpengalaman dalam bidang hukum perdata khususnya hukum bisnis & perbankan.
            </p>
            <div class="flex justify-center lg:justify-start">
                <button onclick="window.location.href='https://wa.me/6281234567890'"
                    class="mt-6 inline-flex items-center justify-center bg-[#6E0E0A] text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-[#A31621] transition duration-300">
                    Selesaikan Masalahmu, Konsultasikan Sekarang!
                </button>
            </div>
        </div>


        <!-- Image Section -->
        <div class="relative lg:w-1/2 w-full  mt-10 lg:mt-0 lg:pl-16">
            <!-- Swiper -->
            <div class="swiper">
                <!-- Wrapper Slider -->
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('/image/new3.jpg') }}" alt="Slide 1" class="w-full h-auto object-cover rounded-lg shadow-md">
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('/image/new2.jpg') }}" alt="Slide 2" class="w-full h-auto object-cover rounded-lg shadow-md">
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('/image/new4.jpg') }}" alt="Slide 3" class="w-full h-auto object-cover rounded-lg shadow-md">
                    </div>
                </div>

                <!-- Pagination Dots -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>


<div class="bg-white py-12 my-16">
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 px-4">
        <!-- Kolom Kiri: Gambar -->
        <div class="flex flex-col lg:flex-row items-center lg:items-start gap-4">
            <!-- Gambar utama -->
            <div class="w-full lg:w-2/3 mt-4 lg:mt-14 lg:ml-6">
                <img src="{{ asset('/image/lawyer.jpg') }}" alt="Foto 1"
                    class="w-full h-auto object-cover rounded-lg shadow-lg">
            </div>

            <!-- Dua gambar kecil -->
            <div class="w-full lg:w-1/3 flex flex-col-2 lg:flex-col md:flex-row gap-4">
                <div class="w-1/2 lg:w-full">
                    <img src="{{ asset('/image/new2.jpg') }}" alt="Foto 2"
                        class="w-full h-auto object-cover rounded-lg shadow-md">
                </div>
                <div class="w-1/2 lg:w-full">
                    <img src="{{ asset('/image/new3.jpg') }}" alt="Foto 3"
                        class="w-full h-auto object-cover rounded-lg shadow-md">
                </div>
            </div>
        </div>
        <!-- Kolom Kanan: Tentang Kami -->
        <div class="flex flex-col justify-center text-center md:text-center lg:text-left px-6">
            <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-black mb-6">
                Tentang Kami
            </h1>
            <p class="text-sm sm:text-md md:text-lg text-gray-700 leading-relaxed mb-6 text-justify">
                Berdiri sejak 1993, akan terus tumbuh dan berkembang menjadi firma hukum yang tetap bekerja
                secara profesional dengan tenaga ahli yang berkompeten dan berpengalaman demi kepentingan
                klien dan nilai-nilai keadilan.
            </p>
            <div class="flex justify-center lg:justify-start">
                <a href="{{ url('/contact') }}"
                    class="inline-block bg-burgundy text-white font-semibold py-3 px-6 rounded-lg shadow-md 
                    hover:bg-maroon transition duration-300">
                    Klik Disini Untuk Berkenalan Dengan Kami
                </a>
            </div>
        </div>

    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <!-- Header Section -->
    <div class="text-center mb-8">
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#6E0E0A] mb-6">
            Layanan <span class="text-[#A31621]">Kami</span>
        </h1>
        <h2 class="text-sm sm:text-base md:text-lg font-semibold text-gray-600 mb-8">
            Berikut layanan hukum terbaik kami
        </h2>
    </div>

    <!-- Cards Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 py-8">
        <!-- Card 1 -->
        <div
            class="bg-[#F4EDEB] border-t-4 border-[#A31621] shadow-lg rounded-lg p-4 sm:p-6 transition-transform transform hover:scale-105 text-center">
            <img
                src="{{ asset('/icons/icon10.png') }}"
                alt="Lawyer Icon"
                class="w-32 sm:w-40 md:w-52 mx-auto mb-4" />
            <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-[#6E0E0A] mb-2">
                Pengacara / Lawyer
            </h3>
            <p class="text-xs sm:text-sm md:text-base text-[#8E6246] text-justify">
                Pengacara berpengalaman, kompeten, dan profesional, siap membantu Anda menyelesaikan masalah hukum Anda.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-[#F4EDEB] border-t-4 border-[#A31621] shadow-lg rounded-lg p-4 sm:p-6 transition-transform transform hover:scale-105 text-center">
            <img
                src="{{ asset('/icons/icon6.png') }}"
                alt="Audit Icon"
                class="w-32 sm:w-40 md:w-52 mx-auto mb-4" />
            <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800">
                Audit Hukum
            </h3>
            <p class="text-xs sm:text-sm md:text-base text-gray-600 mt-2">
                Cegah risiko hukum, tingkatkan kepatuhan akan dokumen hukum pada perusahaan Anda.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-[#F4EDEB] border-t-4 border-[#A31621] shadow-lg rounded-lg p-4 sm:p-6 transition-transform transform hover:scale-105 text-center">
            <img
                src="{{ asset('/icons/icon8.png') }}"
                alt="Bank Consultant Icon"
                class="w-32 sm:w-40 md:w-52 mx-auto mb-4" />
            <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800">
                Konsultan Hukum Bank
            </h3>
            <p class="text-xs sm:text-sm md:text-base text-gray-600 mt-2">
                Pengacara bank top Indonesia yang telah tersertifikasi dari BNSP. Cepat & tangguh!
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-[#F4EDEB] border-t-4 border-[#A31621] shadow-lg rounded-lg p-4 sm:p-6 transition-transform transform hover:scale-105 text-center">
            <img
                src="{{ asset('/icons/icon9.png') }}"
                alt="Expert Icon"
                class="w-32 sm:w-40 md:w-52 mx-auto mb-4" />
            <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800">
                Narasumber Ahli Hukum
            </h3>
            <p class="text-xs sm:text-sm md:text-base text-gray-600 mt-2">
                Kami membantu Anda memahami kompleksitas hukum dengan bahasa yang mudah dimengerti.
            </p>
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
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
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