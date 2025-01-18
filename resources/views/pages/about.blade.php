@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="flex flex-col items-center justify-center bg-gradient-to-br from-[#ffffff] via-[#fef6f6] to-[#fdecec] p-8">
    <!-- Header Section -->
    <div id="header" class="text-center mb-12 opacity-0 translate-y-8 transition duration-700" data-aos="fade-up">
        <h1 class="text-4xl md:text-5xl font-extrabold text-[#582c2e]">
            Tentang Kami
        </h1>
        <p class="text-lg md:text-xl text-[#a95656] mt-2">
            Selamat datang di Kantor Hukum Sukses & Partners!
        </p>
    </div>

    <!-- Introduction Section -->
    <div id="intro" class="max-w-4xl text-center text-[#582c2e] mb-12 opacity-0 translate-y-8 transition duration-700" data-aos="fade-up" data-aos-delay="200">
        <p class="leading-relaxed">
            Kami adalah kantor hukum yang berdedikasi untuk memberikan solusi hukum terbaik dan terpercaya kepada klien kami.
            Dengan pengalaman lebih dari <span class="font-bold">[X]</span> tahun di industri hukum, kami menyediakan layanan
            yang mencakup berbagai bidang hukum, mulai dari hukum perdata, pidana, hingga hukum perusahaan dan bisnis.
        </p>
    </div>

    <!-- Visi & Misi Section -->
    <div id="visiMisi" class="w-full max-w-6xl grid grid-cols-1 md:grid-cols-2 gap-8 mb-12" data-aos="fade-up" data-aos-delay="400">
        <div class="bg-[#f5ebe0] rounded-lg shadow-lg p-6 border-t-4 border-[#582c2e] opacity-0 -translate-x-8 transition duration-700" data-aos="fade-right">
            <h3 class="text-2xl font-bold text-[#582c2e] mb-4">Visi Kami</h3>
            <p class="text-[#582c2e] leading-relaxed">
                Menjadi kantor hukum terdepan yang dipercaya oleh klien, memberikan layanan hukum yang inovatif, berbasis etika,
                dan selalu mengutamakan kepentingan klien dengan pendekatan yang manusiawi dan solutif.
            </p>
        </div>
        <div class="bg-[#f5ebe0] rounded-lg shadow-lg p-6 border-t-4 border-[#582c2e] opacity-0 translate-x-8 transition duration-700" data-aos="fade-left">
            <h3 class="text-2xl font-bold text-[#582c2e] mb-4">Misi Kami</h3>
            <ul class="list-disc list-inside text-[#582c2e] leading-relaxed">
                <li>Memberikan layanan hukum yang profesional, efektif, dan berbasis pemahaman mendalam.</li>
                <li>Membangun kepercayaan klien melalui transparansi dan komunikasi yang jelas.</li>
                <li>Meningkatkan kualitas hukum di Indonesia melalui inovasi dalam pendekatan hukum.</li>
            </ul>
        </div>
    </div>

    <!-- Sejarah Kami Section -->
    <div class="max-w-6xl text-center bg-[#f5ebe0] rounded-lg shadow-lg p-8 border-t-4 border-[#582c2e] mb-12 opacity-0 translate-y-8 transition duration-700" data-aos="fade-up" data-aos-delay="600">
        <h3 class="text-2xl font-bold text-[#582c2e] mb-4">Sejarah Kami</h3>
        <p class="text-[#582c2e] leading-relaxed">
            Kantor Hukum Sukses & Partners didirikan pada tahun <span class="font-bold">[tahun pendirian]</span> oleh
            Prof. Dr. H. Yusril Ihza Mahendra, SH., M.Sc. Dengan pengalaman lebih dari <span class="font-bold">[X]</span>
            tahun di bidang hukum, kantor ini berawal dari sebuah visi untuk menyediakan layanan hukum yang tidak hanya kompeten,
            tetapi juga humanis dan berpihak pada keadilan.
        </p>
    </div>

    <!-- Tim Pengacara Section -->
    <div class="text-center mb-12" data-aos="fade-up" data-aos-delay="800">
        <h3 class="text-3xl font-bold text-[#582c2e] mb-6">Tim Pengacara Kami</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Lawyer Card -->
            <div class="bg-[#f5ebe0] rounded-lg shadow-lg p-6 border-t-4 border-[#582c2e] transform transition-all duration-500 hover:scale-105 hover:bg-[#e5d5c8] hover:shadow-2xl" data-aos="zoom-in">
                <img src="image/yusril.jpg" alt="Prof. Dr. H. Yusril Ihza Mahendra" class="w-24 h-24 mx-auto mb-4 object-cover border-2 border-[#582c2e] rounded-full">
                <h4 class="text-xl font-bold text-[#582c2e]">Prof. Dr. H. Yusril Ihza Mahendra, SH., M.Sc.</h4>
                <p class="text-sm text-[#582c2e]">Posisi: Managing Partner</p>
                <p class="text-sm text-[#582c2e] mt-2 leading-relaxed">
                    Spesialisasi: Hukum Tata Negara, Hukum Pidana, dan Hukum Perdata. Berpengalaman lebih dari 30 tahun.
                </p>
            </div>
            <!-- Repeat Lawyer Cards -->
            <div class="bg-[#f5ebe0] rounded-lg shadow-lg p-6 border-t-4 border-[#582c2e] transform transition-all duration-500 hover:scale-105 hover:bg-[#e5d5c8] hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="200">
                <img src="image/soesilo.jpg" alt="R. Soesilo Aribowo" class="w-24 h-24 mx-auto mb-4 object-cover border-2 border-[#582c2e] rounded-full">
                <h4 class="text-xl font-bold text-[#582c2e]">R. Soesilo Aribowo, SH.</h4>
                <p class="text-sm text-[#582c2e]">Posisi: Senior Partner</p>
                <p class="text-sm text-[#582c2e] mt-2 leading-relaxed">
                    Spesialisasi: Hukum Bisnis dan Perusahaan. Berpengalaman dalam corporate governance.
                </p>
            </div>
            <div class="bg-[#f5ebe0] rounded-lg shadow-lg p-6 border-t-4 border-[#582c2e] transform transition-all duration-500 hover:scale-105 hover:bg-[#e5d5c8] hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="400">
                <img src="image/lily.jpg" alt="Liliyana Widodo" class="w-24 h-24 mx-auto mb-4 object-cover border-2 border-[#582c2e] rounded-full">
                <h4 class="text-xl font-bold text-[#582c2e]">Liliyana Widodo, SH., M.H.</h4>
                <p class="text-sm text-[#582c2e]">Posisi: Senior Associate</p>
                <p class="text-sm text-[#582c2e] mt-2 leading-relaxed">
                    Spesialisasi: Hukum Keluarga dan Waris. Pendekatan yang empatik dalam sengketa keluarga.
                </p>
            </div>
            <div class="bg-[#f5ebe0] rounded-lg shadow-lg p-6 border-t-4 border-[#582c2e] transform transition-all duration-500 hover:scale-105 hover:bg-[#e5d5c8] hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="600">
                <img src="image/andreas.jpg" alt="Andreas Tandi" class="w-24 h-24 mx-auto mb-4 object-cover border-2 border-[#582c2e] rounded-full">
                <h4 class="text-xl font-bold text-[#582c2e]">Andreas Tandi, SH., LL.M.</h4>
                <p class="text-sm text-[#582c2e]">Posisi: Associate</p>
                <p class="text-sm text-[#582c2e] mt-2 leading-relaxed">
                    Spesialisasi: Hukum Internasional dan Arbitrase. Ahli dalam penyelesaian sengketa melalui arbitrase.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
