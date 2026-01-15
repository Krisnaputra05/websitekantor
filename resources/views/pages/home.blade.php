@extends('layouts.app')

@section('title', 'Putu Armaya & Partners - Advokat & Konsultan Hukum Terpercaya di Bali')

@section('content')
<div class="bg-white sm:py-16 md:py-18 lg:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center">
        <!-- Text Section -->
        <div class="lg:w-1/2 w-full" data-aos="fade-right">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-[#6E0E0A] leading-snug lg:leading-tight text-center lg:text-left">
                Solusi Hukum Tepat Bersama <span class="text-[#A31621]">Putu Armaya & Partners</span>
            </h1>
            <p class="mt-4 sm:mt-6 text-sm sm:text-base md:text-lg lg:text-xl text-[#593C39] text-justify lg:text-left">
                Kantor hukum dan pengacara terkemuka di Denpasar, Bali. Berdiri sejak 1993, kami menyediakan layanan advokat, konsultasi hukum, dan audit hukum profesional. Spesialisasi kami mencakup hukum bisnis, perbankan, serta litigasi pidana dan perdata di seluruh Indonesia.
            </p>
            <div class="flex justify-center lg:justify-start">
                <button onclick="window.location.href='https://wa.me/6281234567890'"
                    class="mt-4 sm:mt-6 inline-flex items-center justify-center bg-[#6E0E0A] text-white font-semibold py-2 sm:py-3 px-4 sm:px-6 rounded-lg shadow-md hover:bg-[#A31621] transition duration-300">
                    Konsultasikan Masalah Hukum Anda Sekarang
                </button>
            </div>
        </div>

        <!-- Image Section -->
        <div class="relative lg:w-1/2 w-full mt-8 lg:mt-0 lg:pl-8 xl:pl-16" data-aos="fade-left">
            <!-- Swiper -->
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('/image/new3.jpg') }}" alt="Tim Pengacara Profesional Putu Armaya & Partners" class="w-full h-auto object-cover rounded-lg shadow-md">
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('/image/new2.jpg') }}" alt="Layanan Konsultasi Hukum Bali" class="w-full h-auto object-cover rounded-lg shadow-md">
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('/image/new4.jpg') }}" alt="Kantor Hukum Terpercaya Denpasar" class="w-full h-auto object-cover rounded-lg shadow-md">
                    </div>
                </div>

                <!-- Pagination Dots -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>



<div class="bg-white py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
        <!-- Image Section -->
        <div data-aos="fade-right">
            <!-- Default Layout for Large Screens -->
            <div class="hidden lg:grid grid-cols-3 gap-4">
                <!-- Large Image -->
                <div class="col-span-2 mt-12">
                    <img src="{{ asset('/image/lawyer.jpg') }}" alt="Pengacara Senior Putu Armaya" class="rounded-lg shadow-lg w-full h-auto">
                </div>
                <!-- Small Images Vertical -->
                <div class="space-y-4">
                    <img src="{{ asset('/image/new2.jpg') }}" alt="Diskusi Tim Hukum" class="rounded-lg shadow-lg w-full h-auto">
                    <img src="{{ asset('/image/new3.jpg') }}" alt="Layanan Advokat Profesional" class="rounded-lg shadow-lg w-full h-auto">
                </div>
            </div>

            <!-- Mobile and Tablet Layout -->
            <div class="space-y-4 lg:hidden">
                <!-- Large Image -->
                <div>
                    <img src="{{ asset('/image/lawyer.jpg') }}" alt="Pengacara Senior Putu Armaya" class="rounded-lg shadow-lg w-full h-auto">
                </div>
                <!-- Small Images in Horizontal Layout -->
                <div class="grid grid-cols-2 gap-4">
                    <img src="{{ asset('/image/new2.jpg') }}" alt="Diskusi Tim Hukum" class="rounded-lg shadow-lg w-full h-auto">
                    <img src="{{ asset('/image/new3.jpg') }}" alt="Layanan Advokat Profesional" class="rounded-lg shadow-lg w-full h-auto">
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="text-center lg:text-left" data-aos="fade-left">
            <h2 class="text-3xl sm:text-4xl font-bold text-[#6E0E0A] mb-4">Tentang Putu Armaya & Partners</h2>
            <p class="text-sm sm:text-base md:text-lg text-[#593C39] mb-6 text-justify">
                Sejak didirikan pada tahun 1993, <strong>Putu Armaya & Partners</strong> telah tumbuh menjadi firma hukum terdepan yang mengedepankan profesionalisme dan integritas. Didukung oleh tim advokat dan konsultan hukum yang berkompeten, kami berdedikasi memberikan perlindungan hukum maksimal bagi klien. Kami fokus pada solusi hukum yang efektif, memastikan setiap langkah hukum yang diambil menjunjung tinggi nilai keadilan.
            </p>
            <a href="{{ url('/about') }}" class="bg-[#6E0E0A] text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-[#A31621] transition" data-aos="zoom-in">
                Pelajari Profil Kami Lebih Lanjut
            </a>
        </div>
    </div>
</div>


<div class="container mx-auto px-4 py-16">
    <!-- Header Section -->
    <div class="text-center mb-8" data-aos="fade-up">
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#6E0E0A] mb-6">
            Layanan <span class="text-[#A31621]">Unggulan Kami</span>
        </h1>
        <h2 class="text-sm sm:text-base md:text-lg font-semibold text-gray-600 mb-8">
            Solusi hukum komprehensif untuk kebutuhan personal dan bisnis Anda
        </h2>
    </div>

    <!-- Cards Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 mx-3 md:grid-cols-2 lg:grid-cols-4 gap-6 py-8">
        <!-- Card 1 -->
        <div
            class="bg-[#F4EDEB] border-t-4 border-[#A31621] shadow-lg rounded-lg p-4 sm:p-6 transition-transform transform hover:scale-105 text-center"
            data-aos="zoom-in" data-aos-delay="100">
            <img
                src="{{ asset('/icons/icon10.png') }}"
                alt="Ikon Layanan Pengacara"
                class="w-32 sm:w-40 md:w-52 mx-auto mb-4" />
            <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-[#6E0E0A] mb-2">
                Advokat & Pengacara
            </h3>
            <p class="text-xs sm:text-sm md:text-base text-[#8E6246] text-justify">
                Tim pengacara berpengalaman yang siap mendampingi dan menyelesaikan permasalahan hukum pidana maupun perdata Anda dengan strategi terbaik.
            </p>
        </div>

        <!-- Card 2 -->
        <div
            class="bg-[#F4EDEB] border-t-4 border-[#A31621] shadow-lg rounded-lg p-4 sm:p-6 transition-transform transform hover:scale-105 text-center"
            data-aos="zoom-in" data-aos-delay="200">
            <img
                src="{{ asset('/icons/icon6.png') }}"
                alt="Ikon Audit Hukum"
                class="w-32 sm:w-40 md:w-52 mx-auto mb-4" />
            <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800">
                Audit & Kepatuhan Hukum
            </h3>
            <p class="text-xs sm:text-sm md:text-base text-gray-600 mt-2">
                Layanan audit hukum (legal audit) untuk memitigasi risiko, memastikan kepatuhan regulasi, dan memperkuat fondasi legalitas perusahaan Anda.
            </p>
        </div>

        <!-- Card 3 -->
        <div
            class="bg-[#F4EDEB] border-t-4 border-[#A31621] shadow-lg rounded-lg p-4 sm:p-6 transition-transform transform hover:scale-105 text-center"
            data-aos="zoom-in" data-aos-delay="300">
            <img
                src="{{ asset('/icons/icon8.png') }}"
                alt="Ikon Konsultan Hukum Bank"
                class="w-32 sm:w-40 md:w-52 mx-auto mb-4" />
            <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800">
                Konsultan Hukum Perbankan
            </h3>
            <p class="text-xs sm:text-sm md:text-base text-gray-600 mt-2">
                Didukung oleh sertifikasi BNSP, kami memberikan advis hukum yang akurat dan strategis untuk sektor perbankan dan lembaga keuangan.
            </p>
        </div>

        <!-- Card 4 -->
        <div
            class="bg-[#F4EDEB] border-t-4 border-[#A31621] shadow-lg rounded-lg p-4 sm:p-6 transition-transform transform hover:scale-105 text-center"
            data-aos="zoom-in" data-aos-delay="400">
            <img
                src="{{ asset('/icons/icon9.png') }}"
                alt="Ikon Ahli Hukum"
                class="w-32 sm:w-40 md:w-52 mx-auto mb-4" />
            <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800">
                Pendapat & Ahli Hukum
            </h3>
            <p class="text-xs sm:text-sm md:text-base text-gray-600 mt-2">
                Memberikan legal opinion (pendapat hukum) yang tajam dan mudah dipahami, serta bertindak sebagai narasumber ahli untuk kebutuhan litigasi.
            </p>
        </div>
    </div>
</div>


<div class="bg-[#FFFFFF] py-16 sm:py-20 lg:py-24 mb-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Judul -->
        <div data-aos="fade-up" data-aos-duration="600">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-[#6E0E0A] mb-6 sm:mb-8">
                Mengapa Memilih <span class="text-[#A31621]">Putu Armaya & Partners?</span>
            </h1>
            <p class="text-[#8E6246] text-base sm:text-lg max-w-3xl mx-auto mb-12 sm:mb-16">
                Kami menggabungkan pengalaman puluhan tahun dengan wawasan hukum modern untuk memberikan layanan terbaik. Prioritas kami adalah keamanan hukum dan kepuasan klien.
            </p>
        </div>

        <!-- Card Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-10 lg:gap-12">
            <!-- Keahlian -->
            <div
                class="bg-[#F4EDEB] shadow-lg rounded-lg p-4 sm:p-6 transition-transform transform hover:scale-102 border-t-4 border-[#6E0E0A]"
                data-aos="fade-up" data-aos-delay="100" data-aos-duration="600">
                <div class="flex items-center justify-center mb-4 sm:mb-6">
                    <img src="{{ asset('/icons/keahlian-icon.png') }}" alt="Ikon Pengalaman" class="w-12 sm:w-16 h-12 sm:h-16">
                </div>
                <h2 class="text-xl sm:text-2xl font-semibold text-[#6E0E0A] mb-3 sm:mb-4">Berpengalaman Luas</h2>
                <p class="text-[#A31621] text-sm sm:text-base text-justify">
                    Dengan pengalaman lebih dari 25 tahun, kami menguasai hukum bisnis, perbankan, dan pidana, memastikan penanganan kasus yang matang dan strategis.
                </p>
            </div>

            <!-- Komitmen -->
            <div
                class="bg-[#F4EDEB] shadow-lg rounded-lg p-4 sm:p-6 transition-transform transform hover:scale-102 border-t-4 border-[#A31621]"
                data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                <div class="flex items-center justify-center mb-4 sm:mb-6">
                    <img src="{{ asset('/icons/komitmen-icon.png') }}" alt="Ikon Komitmen" class="w-12 sm:w-16 h-12 sm:h-16">
                </div>
                <h2 class="text-xl sm:text-2xl font-semibold text-[#A31621] mb-3 sm:mb-4">Dedikasi Penuh</h2>
                <p class="text-[#8E6246] text-sm sm:text-base text-justify">
                    Kami mendampingi Anda di setiap tahap proses hukum dengan komitmen tinggi, membangun kepercayaan, dan berorientasi pada hasil terbaik.
                </p>
            </div>

            <!-- Tersertifikasi -->
            <div
                class="bg-[#F4EDEB] shadow-lg rounded-lg p-4 sm:p-6 transition-transform transform hover:scale-102 border-t-4 border-[#8E6246]"
                data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
                <div class="flex items-center justify-center mb-4 sm:mb-6">
                    <img src="{{ asset('/icons/tersertifikasi-icon.png') }}" alt="Ikon Tersertifikasi" class="w-12 sm:w-16 h-12 sm:h-16">
                </div>
                <h2 class="text-xl sm:text-2xl font-semibold text-[#8E6246] mb-3 sm:mb-4">Tersertifikasi Resmi</h2>
                <p class="text-[#8E6246] text-sm sm:text-base text-justify">
                    Tim kami memiliki sertifikasi "Certified Legal Auditor" (CLA) dan "Certified Banking Legal Consultant" (CBLC), menjamin standar kompetensi yang tinggi.
                </p>
            </div>

            <!-- Pendekatan Inovatif -->
            <div
                class="bg-[#F4EDEB] shadow-lg rounded-lg p-4 sm:p-6 transition-transform transform hover:scale-102 border-t-4 border-[#C5A28F]"
                data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                <div class="flex items-center justify-center mb-4 sm:mb-6">
                    <img src="{{ asset('/icons/inovatif-icon.png') }}" alt="Ikon Inovasi" class="w-12 sm:w-16 h-12 sm:h-16">
                </div>
                <h2 class="text-xl sm:text-2xl font-semibold text-[#C5A28F] mb-3 sm:mb-4">Solusi Modern</h2>
                <p class="text-[#8E6246] text-sm sm:text-base text-justify">
                    Kami menerapkan pendekatan hukum yang adaptif dan efisien, didukung pemanfaatan teknologi untuk mempercepat penyelesaian masalah Anda.
                </p>
            </div>
        </div>
    </div>
</div>


@endsection