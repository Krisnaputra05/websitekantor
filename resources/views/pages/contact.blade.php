@extends('layouts.app')

@section('content')
<header class="bg-[#A31621] text-white py-6 md:py-10 shadow-lg">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-2xl md:text-4xl font-bold">Artikel Hukum</h1>
        <p class="text-sm md:text-lg mt-2">Kumpulan artikel terkini seputar dunia hukum</p>
    </div>

    <!-- Bar Pencarian -->
    <div class="container mx-auto mt-4 md:mt-6 px-4 sm:px-6 md:px-8">
        <form action="{{ request('category', 'all') === 'all' ? '/category/all' : '/category/' . request('category') }}" method="GET" class="flex items-center justify-center gap-2">
            <div class="flex flex-1 max-w-lg w-full">
                <input
                    type="text"
                    name="search"
                    placeholder="Cari artikel..."
                    value="{{ request('search') }}"
                    class="flex-1 bg-[#f6f1ed] border border-[#ba8d84] rounded-l-md px-4 py-3 text-[#611a1d] placeholder-[#ba8d84] focus:outline-none focus:ring-2 focus:ring-[#611a1d]"
                    autocomplete="off">
                <button type="submit" class="bg-[#8c2d33] text-white px-4 py-3 rounded-r-md hover:bg-[#611a1d] transition duration-200">
                    Cari
                </button>
            </div>
        </form>
    </div>
</header>

<div class="container mx-auto px-4 mt-12">
    <div class="flex flex-col lg:flex-row lg:gap-8">
        <!-- Konten Utama -->
        <div class="flex-1">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between bg-[#f6f1ed] p-6 rounded-lg shadow-md mb-6">
                <div class="relative w-full md:w-auto">
                    <select onchange="location = this.value" class="bg-[#f6f1ed] border border-[#ba8d84] px-4 py-3 rounded-md shadow-sm text-[#611a1d] focus:outline-none focus:ring-2 focus:ring-[#8c2d33]">
                        <option value="{{ route('category.show', 'all') }}" {{ request('category', 'all') === 'all' ? 'selected' : '' }}>Semua Kategori</option>
                        @foreach($categories as $category)
                        <option value="{{ route('category.show', $category->slug) }}" {{ request('category') === $category->slug ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div>
                @if($articles->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                    @foreach($articles->take(2) as $article)
                    <div class="bg-[#f6f1ed] shadow-md rounded-lg">
                        <a href="{{ route('articles.show', $article->slug) }}">
                            <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="w-full h-40 md:h-48 object-cover">
                            <div class="p-6">
                                <span class="text-xs font-semibold uppercase text-white px-2 py-1 rounded bg-[#8c2d33]">
                                    {{ strtoupper($article->category->name) }}
                                </span>
                                <h2 class="text-sm md:text-lg font-bold text-[#611a1d] mt-2">{{ $article->title }}</h2>
                                <p class="text-[#8c2d33] text-xs md:text-sm mt-1">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 100) }}
                                </p>
                                <div class="mt-3">
                                    <span class="text-[#8c2d33] font-medium">Selengkapnya &raquo;</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                    @foreach($articles->skip(2)->take(3) as $article)
                    <div class="bg-[#f6f1ed] shadow-md rounded-lg">
                        <a href="{{ route('articles.show', $article->slug) }}">
                            <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="w-full h-32 md:h-40 object-cover">
                            <div class="p-6">
                                <span class="text-xs font-semibold uppercase text-white px-2 py-1 rounded bg-[#8c2d33]">
                                    {{ strtoupper($article->category->name) }}
                                </span>
                                <h2 class="text-sm md:text-base font-bold text-[#611a1d] mt-2">{{ $article->title }}</h2>
                                <p class="text-[#8c2d33] text-xs md:text-sm mt-1">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 60) }}
                                </p>
                                <div class="mt-2">
                                    <span class="text-[#8c2d33] font-medium">Selengkapnya &raquo;</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @else
                <p class="text-center text-[#8c2d33]">Tidak ada artikel yang tersedia.</p>
                @endif
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10 mb-10">
        <!-- Kolom Konten Utama -->
        <div class="lg:col-span-2">
            <div class="text-center mb-14 mt-8">
                <h2 class="text-2xl font-bold text-[#611a1d]">Artikel Hukum Terbaru</h2>
                <p class="text-[#8c2d33] text-sm md:text-base mt-2">Akses mudah kumpulan artikel hukum</p>
            </div>
            <div class="space-y-6">
                @foreach ($articles->take(4) as $article)
                <div class="flex flex-col md:flex-row items-start bg-[#f6f1ed] p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                    <!-- Gambar Artikel -->
                    <div class="relative w-full md:w-20 h-20">
                        <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <!-- Konten Artikel -->
                    <div class="flex-1 ml-0 md:ml-4 mt-4 md:mt-0">
                        <!-- Label Kategori -->
                        <div class="mb-2">
                            <span class="bg-[#8c2d33] text-white text-xs md:text-sm font-semibold px-3 py-1 rounded-full shadow-md transition-colors duration-200 hover:bg-[#611a1d]">
                                {{ $article->category->name }}
                            </span>
                        </div>
                        <!-- Judul Artikel -->
                        <a href="{{ route('articles.show', $article->slug) }}" class="block text-lg font-semibold text-[#611a1d] hover:text-[#8c2d33] hover:underline transition-colors duration-200">
                            {{ $article->title }}
                        </a>
                        <!-- Informasi Tambahan -->
                        <div class="text-xs md:text-sm text-[#8c2d33] mt-2 flex items-center gap-2">
                            <span>{{ $article->created_at->format('d M Y') }}</span>
                            <span>&bull;</span>
                            <span>{{ $article->views }} views</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Sidebar -->
        <aside class="lg:col-span-1">
            <div class="bg-[#f6f1ed] p-6 rounded-lg shadow-md">
                <h2 class="text-lg md:text-xl font-bold text-[#611a1d] border-l-4 border-[#8c2d33] pl-3 mb-4">
                    Artikel Terpopuler
                </h2>
                <ul class="space-y-4">
                    @foreach ($popularPosts as $post)
                    <li class="flex flex-col md:flex-row items-start gap-3">
                        <span class="text-[#8c2d33] text-lg font-bold">{{ $loop->iteration }}</span>
                        <div class="flex-1">
                            <a href="{{ route('articles.show', $post->slug) }}" class="block text-sm md:text-lg font-semibold text-[#611a1d] hover:text-[#611a1d] hover:underline">
                                {{ $post->title }}
                            </a>
                            <div class="text-xs md:text-sm text-[#8c2d33]">
                                <span>{{ $post->created_at->format('d M Y') }}</span>
                                <span>&bull;</span>
                                <span>{{ $post->views }} views</span>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </div>
</div>
@endsection