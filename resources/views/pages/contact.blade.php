@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold text-center text-gray-800 px-8 my-8">Artikel</h1>
<div class="container mx-auto px-4">
    <!-- Slider Container -->
    <div class="relative overflow-hidden">
        <!-- Wrapper Artikel -->
        <div class="flex transition-transform ease-in-out duration-500" id="slider-container">
            @foreach($articles as $article)
            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-2">
                <a href="{{ route('articles.show', $article->slug) }}">
                    <div class="bg-[#f5ebe0] shadow-md rounded-lg overflow-hidden transition-transform hover:scale-105 duration-200">
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
                                href="{{ route('articles.show', $article->slug) }}"
                                class="text-red-500 font-medium hover:underline">
                                BACA SELENGKAPNYA &raquo;
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <!-- Navigasi -->
        <button id="prev-btn" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full z-10">
            &#8249;
        </button>
        <button id="next-btn" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full z-10">
            &#8250;
        </button>
    </div>
</div>

<!-- Script Slider -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.getElementById('slider-container');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const slides = slider.children;
        let currentIndex = 0;
        let slideWidth = slides[0].offsetWidth;

        // Resize handler for responsiveness
        const updateSlideWidth = () => {
            slideWidth = slides[0].offsetWidth;
            moveSlider(currentIndex); // Recalculate position after resizing
        };
        window.addEventListener('resize', debounce(updateSlideWidth, 100));

        // Move slider
        const moveSlider = (index) => {
            slider.style.transform = `translateX(-${index * slideWidth}px)`;
        };

        // Next Slide (Random)
        const nextSlide = () => {
            let randomIndex;
            do {
                randomIndex = Math.floor(Math.random() * slides.length);
            } while (randomIndex === currentIndex); // Ensure it doesn't repeat the current slide
            currentIndex = randomIndex;
            moveSlider(currentIndex);
        };

        // Previous Slide
        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = slides.length - 1; // Loop to last slide
            }
            moveSlider(currentIndex);
        });

        nextBtn.addEventListener('click', nextSlide);

        // Autoplay (Random)
        const autoplayInterval = 3000; // 3 seconds
        let autoplay = setInterval(nextSlide, autoplayInterval);

        // Pause autoplay on hover
        const container = document.querySelector('.relative');
        container.addEventListener('mouseover', () => clearInterval(autoplay));
        container.addEventListener('mouseout', () => autoplay = setInterval(nextSlide, autoplayInterval));

        // Debounce function for resize event
        function debounce(func, wait) {
            let timeout;
            return function (...args) {
                clearTimeout(timeout);
                timeout = setTimeout(() => func.apply(this, args), wait);
            };
        }
    });
</script>
@endsection
