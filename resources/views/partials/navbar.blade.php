<nav class="bg-[#A31621] border-b border-white  shadow-sm font-poppins fixed top-0 w-full z-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="absolute inset-y-0 left-0 flex items-center lg:hidden">
                <a href="/">
                    <img src="/image/logo.png" alt="Logo" class="h-9 w-auto">
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="absolute inset-y-0 right-0 flex items-center lg:hidden">
                <button id="menu-toggle" type="button" class="inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-[#870E18] hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16" />
                    </svg>
                    <!-- Icon when menu is open -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Logo and Navigation for Desktop -->
            <div class="flex flex-1 items-center justify-center lg:items-stretch lg:justify-start">
                <div class="hidden lg:flex items-center">
                    <img class="h-9 w-auto" src="/image/logo.png" alt="Logo">
                    <span class="ml-2 text-lg font-semibold text-white"></span>
                </div>
                <div class="hidden lg:ml-6 lg:block">
                    <div class="flex space-x-4">
                        <a href="{{ route('home') }}" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#870E18] hover:text-white {{ request()->routeIs('home') ? 'bg-[#870E18] text-white' : '' }}">Beranda</a>
                        <a href="{{ route('about') }}" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#870E18] hover:text-white {{ request()->routeIs('about') ? 'bg-[#870E18] text-white' : '' }}">Tentang Kami</a>
                        <a href="{{ route('consultation') }}" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#870E18] hover:text-white {{ request()->routeIs('consultation') ? 'bg-[#870E18] text-white' : '' }}">Konsultasi</a>
                        <a href="{{ route('contact') }}" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#870E18] hover:text-white {{ request()->routeIs('contact') ? 'bg-[#870E18] text-white' : '' }}">Konten Hukum</a>
                    </div>
                </div>
            </div>

            <!-- Call-to-Action Button -->
            <div class="absolute inset-y-0 right-0  items-center pr-2 lg:static lg:inset-auto lg:ml-6 lg:pr-0 hidden lg:flex">
                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20konsultasi%20dengan%20Sari%20Law%20Office."
                    target="_blank"
                    class="flex items-center px-4 py-2 border border-[#B08C7A] rounded-md text-sm font-medium text-white hover:bg-[#870E18] hover:text-white">
                    <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h4l3 10h4l3-10h4" />
                    </svg>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <a href="{{ route('home') }}" class="block rounded-md bg-[#870E18] px-3 py-2 text-base font-medium text-white">Beranda</a>
            <a href="{{ route('about') }}" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#870E18] hover:text-white">Tentang Kami</a>
            <a href="{{ route('consultation') }}" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#870E18] hover:text-white">Konsultasi</a>
            <a href="{{ route('contact') }}" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#870E18] hover:text-white">Konten Hukum</a>
        </div>
    </div>
</nav>

<!-- Tambahkan Padding untuk Konten agar tidak tertutup oleh Navbar -->
<div class="pt-20"></div>
