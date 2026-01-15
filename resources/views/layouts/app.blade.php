<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('image/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description', 'Putu Armaya & Partners adalah kantor hukum dan pengacara terkemuka di Bali, berpengalaman sejak 1993 dalam menangani kasus hukum bisnis, perbankan, pidana, dan perdata.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Advokat Bali, Pengacara Denpasar, Konsultan Hukum, Law Firm Bali, Audit Hukum, Putu Armaya, Jasa Hukum Bali')">
</head>

<body class="p-0 m-0">
    @include('partials.navbar')
    <main class="p-0 m-0">
        @yield('content')
    </main>
    @include('partials.google-maps')
    @include('partials.buttonWa')
    <footer class="mt-auto">
        @include('partials.footer')
    </footer>
    <script src="/js/navbar.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const swiper = new Swiper('.swiper', {
                loop: true, // Slider akan berputar
                autoplay: {
                    delay: 3000, // Interval autoplay (ms)
                    disableOnInteraction: false, // Autoplay tetap berjalan meski ada interaksi
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: false, // Animasi dapat diulang setiap kali elemen terlihat
                duration: 1000, // Durasi animasi dalam milidetik
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: false,
                offset: 120, // Jarak sebelum elemen terlihat
                duration: 1000, // Waktu animasi
                delay: 200, // Tambahan waktu tunggu untuk efek berurutan
            });
        });
    </script>
</body>

</html>