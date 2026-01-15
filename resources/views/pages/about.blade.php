@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="flex flex-col items-center justify-center bg-white p-8">
    <!-- Header Section -->
    <div id="header" class="text-center mb-12 opacity-0 translate-y-8 transition duration-700" data-aos="fade-up">
        <h1 class="text-4xl md:text-5xl font-extrabold text-[#582c2e]">
            Tentang Kami
        </h1>
        <p class="text-lg md:text-xl text-[#a95656] mt-2">
            Mengenal Lebih Dekat Putu Armaya & Partners
        </p>
    </div>

    <!-- Introduction Section -->
    <div id="intro" class="max-w-4xl text-center text-[#582c2e] mb-12 opacity-0 translate-y-8 transition duration-700" data-aos="fade-up" data-aos-delay="200">
        <p class="leading-relaxed text-justify md:text-center">
            <strong>Putu Armaya & Partners</strong> adalah kantor hukum terkemuka di Bali yang berdedikasi untuk memberikan solusi hukum strategis dan berkeadilan.
            Dengan pengalaman lebih dari <span class="font-bold">30</span> tahun sejak didirikan pada tahun 1993, kami telah menangani berbagai kasus kompleks, mulai dari litigasi pidana, perdata, hingga hukum bisnis dan perbankan, dengan rekam jejak keberhasilan yang solid.
        </p>
    </div>

    <!-- Visi & Misi Section -->
    <div id="visiMisi" class="w-full max-w-6xl grid grid-cols-1 md:grid-cols-2 gap-8 mb-12" data-aos="fade-up" data-aos-delay="400">
        <div class="bg-[#f5ebe0] rounded-lg shadow-lg p-6 border-t-4 border-[#582c2e] opacity-0 -translate-x-8 transition duration-700" data-aos="fade-right">
            <h3 class="text-2xl font-bold text-[#582c2e] mb-4">Visi Kami</h3>
            <p class="text-[#582c2e] leading-relaxed text-justify">
                Menjadi firma hukum terdepan di Indonesia yang menjunjung tinggi integritas, profesionalisme, dan keadilan, serta menjadi mitra strategis yang terpercaya bagi setiap klien dalam menyelesaikan permasalahan hukum.
            </p>
        </div>
        <div class="bg-[#f5ebe0] rounded-lg shadow-lg p-6 border-t-4 border-[#582c2e] opacity-0 translate-x-8 transition duration-700" data-aos="fade-left">
            <h3 class="text-2xl font-bold text-[#582c2e] mb-4">Misi Kami</h3>
            <ul class="list-disc list-inside text-[#582c2e] leading-relaxed text-justify">
                <li>Memberikan layanan hukum yang responsif, efektif, dan berbasis solusi (solution-oriented).</li>
                <li>Menjaga kepercayaan klien dengan transparansi dan standar etika profesi yang tinggi.</li>
                <li>Meningkatkan kesadaran dan kepatuhan hukum di masyarakat melalui edukasi dan advokasi.</li>
            </ul>
        </div>
    </div>

    <!-- Sejarah Kami Section -->
    <div class="max-w-6xl text-center bg-[#f5ebe0] rounded-lg shadow-lg p-8 border-t-4 border-[#582c2e] mb-12 opacity-0 translate-y-8 transition duration-700" data-aos="fade-up" data-aos-delay="600">
        <h3 class="text-2xl font-bold text-[#582c2e] mb-4">Sejarah Kami</h3>
        <p class="text-[#582c2e] leading-relaxed text-justify md:text-center">
            Putu Armaya & Partners didirikan pada tahun <span class="font-bold">1993</span> oleh
            Putu Armaya, SH., MH. Bermula dari semangat untuk menegakkan keadilan di Bali, firma ini telah berkembang menjadi salah satu kantor hukum paling berpengaruh, dipercaya oleh berbagai korporasi besar, lembaga keuangan, dan perseorangan untuk menangani kepentingan hukum mereka.
        </p>
    </div>

    <!-- Tim Pengacara Section -->
    <div class="text-center mb-12" data-aos="fade-up" data-aos-delay="800">
        <h3 class="text-3xl font-bold text-[#582c2e] mb-6">Tim Advokat Kami</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Lawyer Card 1 -->
            <div class="bg-[#f5ebe0] rounded-lg shadow-lg p-6 border-t-4 border-[#582c2e] transform transition-all duration-500 hover:scale-105 hover:bg-[#e5d5c8] hover:shadow-2xl" data-aos="zoom-in">
                <img src="image/lawyer.jpg" alt="Putu Armaya, SH., MH." class="w-24 h-24 mx-auto mb-4 object-cover border-2 border-[#582c2e] rounded-full">
                <h4 class="text-xl font-bold text-[#582c2e]">Putu Armaya, SH., MH.</h4>
                <p class="text-sm text-[#582c2e]">Managing Partner</p>
                <p class="text-sm text-[#582c2e] mt-2 leading-relaxed">
                    Senior Advokat dengan spesialisasi Hukum Pidana, Bisnis, dan Perbankan. Berpengalaman lebih dari 30 tahun.
                </p>
            </div>
            <!-- Lawyer Card 2 -->
            <div class="bg-[#f5ebe0] rounded-lg shadow-lg p-6 border-t-4 border-[#582c2e] transform transition-all duration-500 hover:scale-105 hover:bg-[#e5d5c8] hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="200">
                <img src="image/soesilo.jpg" alt="Partner Senior" class="w-24 h-24 mx-auto mb-4 object-cover border-2 border-[#582c2e] rounded-full">
                <h4 class="text-xl font-bold text-[#582c2e]">Partner Senior</h4>
                <p class="text-sm text-[#582c2e]">Senior Partner</p>
                <p class="text-sm text-[#582c2e] mt-2 leading-relaxed">
                    Ahli dalam Hukum Korporasi dan audit kepatuhan hukum perusahaan.
                </p>
            </div>
            <!-- Lawyer Card 3 -->
            <div class="bg-[#f5ebe0] rounded-lg shadow-lg p-6 border-t-4 border-[#582c2e] transform transition-all duration-500 hover:scale-105 hover:bg-[#e5d5c8] hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="400">
                <img src="image/lily.jpg" alt="Partner Litigasi" class="w-24 h-24 mx-auto mb-4 object-cover border-2 border-[#582c2e] rounded-full">
                <h4 class="text-xl font-bold text-[#582c2e]">Partner Litigasi</h4>
                <p class="text-sm text-[#582c2e]">Senior Associate</p>
                <p class="text-sm text-[#582c2e] mt-2 leading-relaxed">
                    Spesialisasi dalam penanganan sengketa perdata, waris, dan hukum keluarga.
                </p>
            </div>
            <!-- Lawyer Card 4 -->
            <div class="bg-[#f5ebe0] rounded-lg shadow-lg p-6 border-t-4 border-[#582c2e] transform transition-all duration-500 hover:scale-105 hover:bg-[#e5d5c8] hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="600">
                <img src="image/andreas.jpg" alt="Partner Konsultan" class="w-24 h-24 mx-auto mb-4 object-cover border-2 border-[#582c2e] rounded-full">
                <h4 class="text-xl font-bold text-[#582c2e]">Partner Konsultan</h4>
                <p class="text-sm text-[#582c2e]">Associate</p>
                <p class="text-sm text-[#582c2e] mt-2 leading-relaxed">
                    Fokus pada hukum ketenagakerjaan dan alternatif penyelesaian sengketa.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
