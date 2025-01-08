<footer class="bg-[#F2E4D7] border-t border-[#B08C7A] shadow-sm font-poppins">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 ">
            <!-- Kolom 1: Tentang Kami -->
            <div>
                <h2 class="text-lg font-semibold text-[#6B1E1E]">Tentang Kami</h2>
                <img src="/image/logo.png" alt="Logo Sari Law Office" class="h-12 mb-4">
                <p class="text-sm text-[#593C39] leading-relaxed text-justify">
                    Kantor Hukum Sari Law Office berdiri sejak tahun 1993 yang telah berpengalaman dalam hal menangani kasus-kasus hukum secara profesional demi kepentingan klien dan keadilan.
                </p>
                <p class="mt-3 text-sm text-[#593C39] text-justify">
                    Kami adalah platform konsultasi hukum yang memberikan layanan terbaik untuk kebutuhan Anda.
                    Komitmen kami adalah memberikan solusi terpercaya dan tepat sasaran.
                </p>
            </div>

            <!-- Kolom 2: Navigasi -->
            <div class="px-16">
                <h2 class="text-lg font-semibold text-[#6B1E1E] ">Navigasi</h2>
                <ul class="mt-3 space-y-2">
                    <li><a href="{{ route('home') }}" class="text-sm text-[#593C39] hover:text-white hover:bg-[#B08C7A] rounded-md  py-1">Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="text-sm text-[#593C39] hover:text-white hover:bg-[#B08C7A] rounded-md  py-1">Tentang Kami</a></li>
                    <li><a href="{{ route('consultation') }}" class="text-sm text-[#593C39] hover:text-white hover:bg-[#B08C7A] rounded-md  py-1">Konsultasi</a></li>
                    <li><a href="{{ route('contact') }}" class="text-sm text-[#593C39] hover:text-white hover:bg-[#B08C7A] rounded-md  py-1">Konten Hukum</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Hubungi Kami -->
            <div>
                <h2 class="text-lg font-semibold text-[#6B1E1E]">Hubungi Kami</h2>
                <ul class="mt-3 space-y-2 text-sm text-[#593C39]">
                    <li><span class="font-medium">Alamat:</span> Jl. Contoh Alamat No. 123, Kota Anda</li>
                    <li><span class="font-medium">Email:</span> <a href="mailto:info@example.com" class="hover:text-[#6B1E1E]">info@example.com</a></li>
                    <li><span class="font-medium">Telepon:</span> <a href="tel:+628123456789" class="hover:text-[#6B1E1E]">+62 812 3456 789</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-6 border-t border-[#B08C7A] pt-4 text-center">
            <p class="text-sm text-[#593C39]">&copy; 2025 Nama Perusahaan. Semua Hak Dilindungi.</p>
        </div>
    </div>
</footer>