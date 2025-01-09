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
        <div class="lg:w-1/2 mt-10 lg:mt-0 lg:pl-36">
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
        <h1 class="text-9xl font-bold text-gray-800 mb-4">Layanan Kami</h1>
        <h2 class="text-5x1 font-semibold text-gray-600 mb-10">Berikut layanan hukum terbaik kami</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 py-11">
        <!-- Pengacara / Lawyer -->
        <div class="text-center bg-white shadow-lg p-6 rounded-lg">
            <div class="mb-4">
                <img src="{{ asset('/icons/icon10.png') }}" alt="Lawyer Icon" class="w-68 mx-auto">
            </div>
            <h3 class="text-xl font-semibold text-gray-800 text-justify">Pengacara / Lawyer</h3>
            <p class="text-gray-600 mt-2 text-justify">Pengacara berpengalaman, kompeten, dan profesional, siap membantu Anda menyelesaikan masalah hukum Anda.</p>
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
                <p class="text-[#8E6246] text-justify">
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