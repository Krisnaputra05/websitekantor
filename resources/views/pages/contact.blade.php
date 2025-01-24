@extends('layouts.app')

@section('content')
<header class="bg-blue-500 text-white py-8 shadow-lg">
    <div class="relative">
        <form action="{{ request('category', 'all') === 'all' ? '/category/all' : '/category/' . request('category') }}" method="GET" class="absolute top-0 right-0 mt-4 mr-4 flex items-center w-full lg:w-auto">
            <input
                type="text"
                name="search"
                placeholder="Cari artikel..."
                value="{{ request('search') }}"
                class="flex-1 lg:w-96 bg-white border border-gray-300 rounded-l-md px-4 py-2 text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                autocomplete="off">
            <button type="submit" class="bg-black text-white px-4 py-2 rounded-r-md hover:bg-red-600 transition duration-200">
                Cari
            </button>
        </form>
    </div>
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold">Artikel Hukum</h1>
        <p class="text-lg mt-2">Kumpulan artikel terkini seputar dunia hukum</p>
    </div>
</header>

<div class="container mx-auto px-4 mt-10">
    <div class="flex flex-col lg:flex-row lg:gap-8">
        <!-- Konten Utama -->
        <div class="flex-1">
            <!-- Pencarian dan Dropdown -->
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between bg-gray-100 p-6 rounded-lg shadow-md mb-6">
                <!-- Pencarian -->
                <!-- <form action="{{ request('category', 'all') === 'all' ? '/category/all' : '/category/' . request('category') }}" method="GET" class="flex items-center w-full lg:w-auto mb-4 lg:mb-0">
                    <input
                        type="text"
                        name="search"
                        placeholder="Cari artikel..."
                        value="{{ request('search') }}"
                        class="flex-1 lg:w-96 bg-white border border-gray-300 rounded-l-md px-4 py-2 text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        autocomplete="off">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r-md hover:bg-blue-600 transition duration-200">
                        Cari
                    </button>
                </form> -->

                <!-- Dropdown Kategori -->
                <div class="relative w-full lg:w-auto">
                    <select onchange="location = this.value" class="bg-white border border-gray-300 px-4 py-2 rounded-md shadow-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="{{ route('category.show', 'all') }}" {{ request('category', 'all') === 'all' ? 'selected' : '' }}>Semua Kategori</option>
                        @foreach($categories as $category)
                        <option value="{{ route('category.show', $category->slug) }}" {{ request('category') === $category->slug ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Artikel -->
            <div>
                @if($articles->count() > 0)
                <!-- Grid Artikel -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    @foreach($articles->take(2) as $article)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-transform transform hover:scale-105 duration-200">
                        <a href="{{ route('articles.show', $article->slug) }}">
                            <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <span class="text-xs font-semibold uppercase text-white px-2 py-1 rounded {{ $article->category->color_class ?? 'bg-red-500' }}">
                                    {{ strtoupper($article->category->name) }}
                                </span>
                                <h2 class="text-lg font-bold text-gray-800 mt-2">{{ $article->title }}</h2>
                                <p class="text-gray-600 text-sm mt-1">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 100) }}
                                </p>
                                <div class="mt-3">
                                    <span class="text-blue-500 font-medium">Selengkapnya &raquo;</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>

                <!-- Artikel Lainnya -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                    @foreach($articles->skip(2)->take(3) as $article)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-transform transform hover:scale-105 duration-200">
                        <a href="{{ route('articles.show', $article->slug) }}">
                            <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="w-full h-32 object-cover">
                            <div class="p-4">
                                <span class="text-xs font-semibold uppercase text-white px-2 py-1 rounded {{ $article->category->color_class ?? 'bg-red-500' }}">
                                    {{ strtoupper($article->category->name) }}
                                </span>
                                <h2 class="text-base font-bold text-gray-800 mt-2">{{ $article->title }}</h2>
                                <p class="text-gray-600 text-sm mt-1">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 60) }}
                                </p>
                                <div class="mt-2">
                                    <span class="text-blue-500 font-medium">Selengkapnya &raquo;</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @else
                <p class="text-center text-gray-500">Tidak ada artikel yang tersedia.</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Artikel Hukum Terbaru dan Terpopuler -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-10">
        <!-- Artikel Hukum Terbaru -->
        <div class="lg:col-span-2">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Artikel Hukum Terbaru</h2>
                <p class="text-gray-600">Akses mudah kumpulan artikel hukum</p>
            </div>
            <div class="space-y-6">
                @foreach ($articles->take(5) as $article)
                <div class="flex items-start bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition duration-200">
                    <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="w-20 h-20 object-cover rounded-lg mr-4">
                    <div>
                        <a href="{{ route('articles.show', $article->slug) }}" class="text-lg font-semibold text-gray-800 hover:text-blue-500 hover:underline">
                            {{ $article->title }}
                        </a>
                        <div class="text-sm text-gray-500 mt-1">
                            <span>{{ $article->created_at->format('d M Y') }}</span>
                            <span>&bull;</span>
                            <span>{{ $article->views }} views</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Artikel Terpopuler -->
        <aside class="lg:col-span-1">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-gray-800 border-l-4 border-blue-500 pl-3 mb-4">Artikel Terpopuler</h2>
                <ul class="space-y-4">
                    @foreach ($popularPosts as $post)
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 text-lg font-bold">{{ $loop->iteration }}</span>
                        <div class="flex-1">
                            <a href="{{ route('articles.show', $post->slug) }}" class="block text-lg font-semibold text-gray-800 hover:text-blue-500 hover:underline">
                                {{ $post->title }}
                            </a>
                            <div class="text-sm text-gray-500">
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