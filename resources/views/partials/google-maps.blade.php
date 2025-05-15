<div class="flex flex-col items-center justify-center bg-gradient-to-br bg-white px-4 sm:px-6 md:px-10 lg:px-20 py-10 sm:py-12 md:py-16 lg:py-20">
    <!-- Header Section -->
    <div class="text-center mb-2">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-[#582c2e]">
            Lokasi<span class="text-[#A31621]"> Kami</span>
        </h1>
        <p class="text-sm sm:text-base text-[#a95656] mt-1">
            Temukan lokasi kami dengan mudah menggunakan peta di bawah ini.
        </p>
    </div>

    <!-- Map Section -->
    <div class="w-full max-w-4xl rounded-lg shadow-lg overflow-hidden bg-[#d9c7bf] mt-2">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26852.193975980084!2d115.19571145660635!3d-8.683058649064725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240ea1bca90b7%3A0x54b2d3554d19d14b!2sFakultas%20Hukum!5e1!3m2!1sid!2sid!4v1736961500534!5m2!1sid!2sid"
            class="w-full h-[250px] sm:h-[300px] md:h-[350px] lg:h-[400px]"
            style="margin: 0; padding: 0; border: 0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Lokasi Fakultas Hukum di Peta Google">
        </iframe>
    </div>

    <!-- Contact Button -->
    <div class="mt-2 mb-0">
        <a href="{{ url('/consultation') }}"
            class="bg-[#582c2e] hover:bg-[#7e4b4e] text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out text-sm sm:text-base">
            Hubungi Kami
        </a>
    </div>
</div>
