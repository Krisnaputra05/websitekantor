@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 mt-">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Artikel</h1>

    <!-- Swiper Container -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach($articles as $article)
            <div class="swiper-slide">
                <div class="bg-white shadow-md rounded-lg overflow-hidden transition-transform transform hover:scale-105">
                    <!-- Gambar Artikel -->
                    <img
                        src="{{ $article->image_url }}"
                        alt="Gambar {{ $article->title }}"
                        class="w-full h-48 object-cover">

                    <!-- Konten Artikel -->
                    <div class="p-4">
                        <h2 class="text-lg font-bold text-red-600 mb-2 truncate">
                            {{ $article->title }}
                        </h2>
                        <p class="text-gray-700 text-sm mb-4 leading-relaxed">
                            {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 100) }}
                        </p>
                        <a
                            href="{{ route('articles.show', $article->id) }}"
                            class="text-red-500 font-medium hover:underline">
                            BACA SELENGKAPNYA &raquo;
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Navigasi -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Script Swiper -->
<script>
    const swiper = new Swiper('.mySwiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000, // Waktu antar slide (dalam milidetik)
            disableOnInteraction: false, // Lanjutkan autoplay meskipun pengguna berinteraksi
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        },
    });
</script>
@endsection
