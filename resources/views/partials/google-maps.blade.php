<div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-br from-[#ffffff] py-24">
    <!-- Header Section -->
    <div class="text-center mb-8">
        <h1 class="text-6xl font-extrabold text-[#582c2e] animate-fade-in-down">
            Lokasi<span class="text-[#A31621]"> Kami
        </h1>
        <p class="text-lg font-semibold text-[#a95656] mt-2 animate-fade-in-up">
            Temukan lokasi kami dengan mudah menggunakan peta di bawah ini.
        </p>
    </div>

    <!-- Map Section -->
    <div class="w-full max-w-4xl rounded-lg shadow-lg overflow-hidden bg-[#d9c7bf] animate-zoom-in">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d147564.0291523563!2d115.12124746525502!3d-8.710079643421135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24084a16811ab%3A0x8f85cc8d792dc24c!2sFakultas%20Hukum!5e1!3m2!1sid!2sid!4v1736377864035!5m2!1sid!2sid"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <!-- Contact Button -->
    <div class="mt-8 animate-slide-in-bottom">
        <a href="{{ url('/contact') }}"
            class="bg-[#582c2e] hover:bg-[#7e4b4e] text-white font-semibold py-3 px-8 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
            Hubungi Kami
        </a>
    </div>
</div>