<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.google-maps')
    @include('partials.footer')
    <script src="/js/navbar.js"></script>
    <script>
    function slider() {
        return {
            images: [
                "{{ asset('/image/new2.jpg') }}",
                "{{ asset('/image/new3.jpg') }}",
                "{{ asset('/image/new4.jpg') }}"
            ],
            currentIndex: 0,
            start() {
                setInterval(() => {
                    this.next();
                }, 3000); // Pindah slide setiap 3 detik
            },
            next() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
            },
            goToSlide(index) {
                this.currentIndex = index;
            }
        };
    }
</script>

</body>
</html>
