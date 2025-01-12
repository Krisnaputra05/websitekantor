<footer class="bg-[#A31621] border-t border-[#870E18] shadow-sm font-poppins">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Kolom 1: Tentang Kami -->
            <div>
                <h2 class="text-lg font-semibold text-white">Tentang Kami</h2>
                <img src="/image/logo.png" alt="Logo Sari Law Office" class="h-12 mb-4">
                <p class="text-sm text-white leading-relaxed text-justify">
                    Kantor Hukum Sari Law Office berdiri sejak tahun 1993 yang telah berpengalaman dalam hal menangani kasus-kasus hukum secara profesional demi kepentingan klien dan keadilan.
                </p>
                <p class="mt-3 text-sm text-white text-justify">
                    Kami adalah platform konsultasi hukum yang memberikan layanan terbaik untuk kebutuhan Anda.
                    Komitmen kami adalah memberikan solusi terpercaya dan tepat sasaran.
                </p>
            </div>

            <!-- Kolom 2: Navigasi -->
            <div class="px-16">
                <h2 class="text-lg font-semibold text-white">Navigasi</h2>
                <ul class="mt-3 space-y-2">
                    <li><a href="{{ route('home') }}" class="text-sm text-white hover:text-[#A31621] hover:bg-white rounded-md py-1 px-2">Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="text-sm text-white hover:text-[#A31621] hover:bg-white rounded-md py-1 px-2">Tentang Kami</a></li>
                    <li><a href="{{ route('consultation') }}" class="text-sm text-white hover:text-[#A31621] hover:bg-white rounded-md py-1 px-2">Konsultasi</a></li>
                    <li><a href="{{ route('contact') }}" class="text-sm text-white hover:text-[#A31621] hover:bg-white rounded-md py-1 px-2">Konten Hukum</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Hubungi Kami -->
            <div>
                <h2 class="text-lg font-semibold text-white">Hubungi Kami</h2>
                <ul class="mt-3 space-y-2 text-sm text-white">
                    <li><span class="font-medium">Alamat:</span> Jl. Contoh Alamat No. 123, Kota Anda</li>
                    <li><span class="font-medium">Email:</span> <a href="mailto:info@example.com" class="hover:text-[#870E18]">info@example.com</a></li>
                    <li><span class="font-medium">Telepon:</span> <a href="tel:+628123456789" class="hover:text-[#870E18]">+62 812 3456 789</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-6 border-t border-[#870E18] pt-4 text-center">
            <p class="text-sm text-white">&copy; 2025 Nama Perusahaan. Semua Hak Dilindungi.</p>
        </div>
    </div>
</footer>