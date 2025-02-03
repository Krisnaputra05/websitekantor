<footer class="bg-[#A31621] border-t border-[#870E18] shadow-sm font-poppins mt-6 md:mt-10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left sm:text-center md:text-left">
            <!-- Kolom 1: Tentang Kami -->
            <div class="mt-4 md:mt-0"> <!-- Tambah margin top di mobile -->
                <h2 class="text-lg font-semibold text-white">Tentang Kami</h2>
                <img src="/image/logo.png" alt="Logo Sari Law Office" class="h-12 mb-4">
                <p class="text-sm text-white leading-relaxed text-justify">
                    Kantor Hukum Sari Law Office berdiri sejak tahun 1993 yang telah berpengalaman dalam menangani kasus-kasus hukum secara profesional demi kepentingan klien dan keadilan.
                </p>
                <p class="mt-3 text-sm text-white text-justify">
                    Kami adalah platform konsultasi hukum yang memberikan layanan terbaik untuk kebutuhan Anda.
                    Komitmen kami adalah memberikan solusi terpercaya dan tepat sasaran.
                </p>
            </div>

            <!-- Kolom 2: Navigasi -->
            <div class="mt-4 md:mt-0"> <!-- Tambah margin top di mobile -->
                <h2 class="text-lg font-semibold text-white">Navigasi</h2>
                <ul class="mt-3 space-y-2">
                    <li>
                        <a href="{{ route('home') }}" class="flex items-center text-sm text-white hover:text-[#A31621] hover:bg-white rounded-md py-1 px-2">
                            Beranda
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="flex items-center text-sm text-white hover:text-[#A31621] hover:bg-white rounded-md py-1 px-2">
                            Tentang Kami
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('consultation') }}" class="flex items-center text-sm text-white hover:text-[#A31621] hover:bg-white rounded-md py-1 px-2">
                            Konsultasi
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="flex items-center text-sm text-white hover:text-[#A31621] hover:bg-white rounded-md py-1 px-2">
                            Konten Hukum
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Kolom 3: Hubungi Kami & Media Sosial -->
            <div class="mt-4 md:mt-0"> <!-- Tambah margin top di mobile -->
                <h2 class="text-lg font-semibold text-white">Hubungi Kami</h2>
                <ul class="mt-3 space-y-2 text-sm text-white">
                    <li><span class="font-medium">Alamat:</span> Jl. Contoh Alamat No. 123, Kota Anda</li>
                    <li><span class="font-medium">Email:</span> <a href="mailto:info@example.com" class="hover:text-[#870E18]">info@example.com</a></li>
                    <li><span class="font-medium">Telepon:</span> <a href="tel:+628123456789" class="hover:text-[#870E18]">+62 812 3456 789</a></li>
                </ul>

                <!-- Media Sosial -->
                <div class="mt-4">
                    <h2 class="text-lg font-semibold text-white">Kontak Cepat</h2>
                    <div class="flex justify-start space-x-4 mt-2">
                        <a href="https://facebook.com" target="_blank" class="text-white hover:text-[#4267B2] transition transform hover:scale-110">
                            <i class="fab fa-facebook-f text-2xl"></i>
                        </a>
                        <a href="mailto:info@example.com" class="text-white hover:text-[#D44638] transition transform hover:scale-110">
                            <i class="fas fa-envelope text-2xl"></i>
                        </a>
                        <a href="https://wa.me/628123456789?text=Halo,%20saya%20ingin%20konsultasi" target="_blank" class="text-white hover:text-[#25D366] transition transform hover:scale-110">
                            <i class="fab fa-whatsapp text-2xl"></i>
                        </a>
                        <a href="https://linkedin.com" target="_blank" class="text-white hover:text-[#0077B5] transition transform hover:scale-110">
                            <i class="fab fa-linkedin-in text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-6 border-t border-[#870E18] pt-4 text-center">
            <p class="text-sm text-white">&copy; 2025 Nama Perusahaan. Semua Hak Dilindungi.</p>
        </div>
    </div>

</footer>
<!-- Tambahkan FontAwesome untuk Ikon Media Sosial -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>