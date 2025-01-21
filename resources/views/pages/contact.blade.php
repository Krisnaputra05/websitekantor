@extends('layouts.app')

@section('content')
<h1 class="text-4xl font-bold text-center text-gray-800 px-6 my-10">Artikel</h1>

<div class="container mx-auto px-6">
    <div class="flex flex-col lg:flex-row lg:gap-12">
        <!-- Konten Utama -->
        <div class="flex-1">
            <!-- Pencarian Kategori -->
            <div class="max-w-lg mx-auto mb-8">
                <form action="{{ request('category', 'all') === 'all' ? '/category/all' : '/category/' . request('category') }}" method="GET" class="flex items-center bg-gray-100 p-3 rounded-lg shadow-lg">
                    {{-- Input Search --}}
                    <input
                        type="text"
                        name="search"
                        placeholder="Cari artikel..."
                        value="{{ request('search') }}"
                        class="flex-1 bg-transparent outline-none px-3 py-2 text-gray-800 placeholder-gray-500"
                        autocomplete="off">
                    {{-- Dropdown Categories --}}
                    <select onchange="location = this.value" class="bg-white px-3 py-2 text-gray-800 rounded-md outline-none">
                        <option value="{{ route('category.show', 'all') }}" {{ request('category', 'all') === 'all' ? 'selected' : '' }}>
                            Semua Kategori
                        </option>
                        @foreach($categories as $category)
                        <option value="{{ route('category.show', $category->slug) }}" {{ request('category') === $category->slug ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>

                    {{-- Submit Button --}}
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg ml-2 hover:bg-blue-600 transition duration-200">
                        Cari
                    </button>
                </form>
            </div>


            <!-- Grid Artikel -->
            @if($articles->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Artikel Pertama (Lebih Besar) -->
                <div class="md:col-span-2 bg-white shadow-lg rounded-lg overflow-hidden transition duration-300">
                    <a href="{{ route('articles.show', $articles[0]->slug) }}">
                        <img src="{{ $articles[0]->image_url }}" alt="{{ $articles[0]->title }}" class="w-full h-64 object-cover">

                        <div class="p-6">
                            <span class="text-xs font-semibold uppercase text-white px-3 py-1 rounded {{ $articles[0]->category->color_class ?? 'bg-blue-500' }}">
                                {{ strtoupper($articles[0]->category->name) }}
                            </span>
                            <h2 class="text-2xl font-bold text-gray-800 mt-3">{{ $articles[0]->title }}</h2>
                            <p class="text-gray-600 text-sm mt-2">
                                {{ \Illuminate\Support\Str::limit(strip_tags($articles[0]->content), 120) }}
                            </p>

                            <div class="mt-4">
                                <span class="text-blue-500 font-medium">Selengkapnya &raquo;</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Artikel Lainnya -->
                @foreach($articles->skip(1)->take(4) as $article)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden  transition duration-300">
                    <a href="{{ route('articles.show', $article->slug) }}">
                        <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">

                        <div class="p-6">
                            <span class="text-xs font-semibold uppercase text-white px-3 py-1 rounded {{ $articles[0]->category->color_class ?? 'bg-blue-500' }}">
                                {{ strtoupper($articles[0]->category->name) }}
                            </span>
                            <h2 class="text-lg font-bold text-gray-800 mt-3">{{ $article->title }}</h2>

                            <p class="text-gray-600 text-sm mt-2">
                                {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 100) }}
                            </p>

                            <div class="mt-4">
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


<div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 mt-12 ml-16">
        <!-- Artikel Utama -->
        <div class="lg:col-span-2">
            <!-- Header Artikel Utama -->
            <div class="text-center mx-auto">
                <h2 class="text-2xl font-bold text-gray-800 mb-2 pl-4 ">
                    Artikel Hukum Terbaru
                </h2>
                <p class="text-gray-600">
                    Akses mudah kumpulan artikel Hukum
                </p>
            </div>
            <div class="space-y-8 ml-6"> <!-- Penambahan margin left -->
                @foreach ($articles->take(5) as $article)
                <div class="flex items-start bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="{{ $article->image_url }}"
                        alt="{{ $article->title }}"
                        class="w-24 h-24 object-cover rounded-lg mr-6">
                    <div>
                        <a href="{{ $article->url }}" class="text-lg font-semibold text-gray-800 hover:text-blue-500 hover:underline">
                            {{ $article->title }}
                        </a>
                        <div class="text-sm text-gray-500 mt-2">
                            <span>{{ $article->created_at->format('d M Y') }}</span>
                            <span>•</span>
                            <span>{{ $article->views }} views</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    
        <!-- Artikel Terpopuler -->
        <aside class="lg:col-span-1 mr-16 pr-6">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold text-gray-800 border-l-4 border-blue-500 pl-3 mb-6">
                    Artikel Terpopuler
                </h2>
                <ul class="space-y-6">
                    @foreach ($popularPosts as $post)
                    <li class="flex items-start gap-4">
                        <span class="text-blue-500 text-lg font-bold">{{ $loop->iteration }}</span>
                        <div class="flex-1">
                            <a href="{{ route('articles.show', $post->slug) }}"
                                class="block text-lg font-semibold text-gray-800 hover:text-blue-500 hover:underline">
                                {{ $post->title }}
                            </a>
                            <div class="text-sm text-gray-500 flex items-center gap-2">
                                <span>{{ $post->created_at->format('d M Y') }}</span>
                                <span>•</span>
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