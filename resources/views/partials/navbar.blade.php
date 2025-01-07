<nav class="bg-[#F2E4D7] border-b border-[#B08C7A] shadow-sm">
    <div class="container mx-auto px-4 flex items-center justify-between py-4">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <img src="/image/logo.png" alt="Logo" class="h-10 w-10">
            <span class="text-lg font-semibold text-[#6B1E1E]">Kantor Hukum</span>
        </div>

        <!-- Hamburger Menu for Mobile -->
        <button id="menu-toggle" class="lg:hidden text-[#6B1E1E] focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Navigation Links -->
        <ul id="menu" class="hidden lg:flex space-x-8 text-sm font-medium">
            <li>
                <a href="{{ route('home') }}" 
                   class="relative text-[#6B1E1E] hover:text-[#A43D3D] {{ request()->routeIs('home') ? 'font-bold text-[#A43D3D]' : '' }}">
                    Beranda
                    <span class="absolute left-0 bottom-0 w-full h-[2px] bg-[#A43D3D] scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" 
                   class="relative text-[#593C39] hover:text-[#A43D3D] {{ request()->routeIs('about') ? 'font-bold text-[#A43D3D]' : '' }}">
                    Konten Hukum
                </a>
            </li>
            <li>
                <a href="{{ route('consultation') }}" 
                   class="relative text-[#593C39] hover:text-[#A43D3D] {{ request()->routeIs('consultation') ? 'font-bold text-[#A43D3D]' : '' }}">
                    Konsultasi
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}" 
                   class="relative text-[#593C39] hover:text-[#A43D3D] {{ request()->routeIs('contact') ? 'font-bold text-[#A43D3D]' : '' }}">
                    Tentang Kami
                </a>
            </li>
        </ul>

        <!-- Call-to-Action Button -->
        <a href="#" class="hidden lg:flex items-center space-x-2 px-4 py-2 border border-[#B08C7A] rounded-md text-sm font-medium text-[#6B1E1E] hover:bg-[#A43D3D] hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2.003 5.884l2-3A2 2 0 016.003 2h8a2 2 0 011.998 2.884l-2 3a2 2 0 00-.342.975l-.112 2.012a2 2 0 00.53 1.555l2.42 2.42a1.993 1.993 0 01.176 2.59l-2 3a2 2 0 01-2.883.341l-2.421-2.421a2 2 0 00-1.555-.53l-2.012.112a2 2 0 00-.975.342l-3 2a2 2 0 01-2.883-2.884l2-3a2 2 0 00.342-.975l.112-2.012a2 2 0 00-.53-1.555L2.003 5.884z"></path>
            </svg>
            <span>Hubungi Kami</span>
        </a>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden bg-[#F2E4D7] lg:hidden">
        <ul class="flex flex-col space-y-4 text-center text-sm font-medium py-4">
            <li>
                <a href="{{ route('home') }}" class="text-[#6B1E1E] hover:text-[#A43D3D]">Beranda</a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="text-[#593C39] hover:text-[#A43D3D]">Konten Hukum</a>
            </li>
            <li>
                <a href="{{ route('consultation') }}" class="text-[#593C39] hover:text-[#A43D3D]">Konsultasi</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="text-[#593C39] hover:text-[#A43D3D]">Tentang Kami</a>
            </li>
        </ul>
    </div>
</nav>
