@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 px-4 grid grid-cols-1 gap-8 lg:grid-cols-4">
    {{-- Konten Utama --}}
    <div class="col-span-1 lg:col-span-3">
        {{-- Judul Artikel --}}
        <h1 class="text-4xl lg:text-5xl font-bold mb-6 text-gray-800 hover:text-gray-600 transition-colors">
            {{ $article->title }}
        </h1>

        {{-- Informasi Artikel --}}
        <div class="flex flex-wrap items-center justify-between mb-6 gap-4">
            <div class="flex items-center space-x-4">
                <div>
                    <p class="font-semibold text-gray-700">{{ $article->author }}</p>
                    <p class="font-medium text-gray-500 text-sm">
                        {{ $article->created_at->format('F d, Y, H:i') }} WIB
                    </p>
                </div>
            </div>
            <div class="flex space-x-3">
                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="transform hover:scale-110 transition-transform">
                    <img src="/icons/facebook.png" alt="Facebook" class="w-6 h-6">
                </a>
                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="transform hover:scale-110 transition-transform">
                    <img src="/icons/instagram.png" alt="Instagram" class="w-6 h-6">
                </a>
                <a href="https://wa.me/1234567890" target="_blank" rel="noopener noreferrer" class="transform hover:scale-110 transition-transform">
                    <img src="/icons/whatsapp.png" alt="WhatsApp" class="w-6 h-6">
                </a>
                <a href="mailto:your-email@example.com" target="_blank" rel="noopener noreferrer" class="transform hover:scale-110 transition-transform">
                    <img src="/icons/email.png" alt="Email" class="w-6 h-6">
                </a>
            </div>
        </div>

        {{-- Gambar Artikel --}}
        @if($article->image)
        <div class="mb-6">
            <img src="{{ asset('storage/' . $article->image) }}"
                alt="{{ $article->title }}"
                class="w-full h-auto object-cover rounded-lg shadow-lg">
        </div>
        @endif

        {{-- Konten Artikel --}}
        <div class="prose prose-lg max-w-none text-justify text-gray-800">
            {!! $article->content !!}
        </div>
    </div>

    {{-- Sidebar --}}
    <div class="bg-white p-6 rounded-lg shadow-lg">
        {{-- Artikel Populer --}}
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Popular Posts</h2>
        <ul class="space-y-4">
            @foreach ($popularPosts as $post)
            <div class="post flex items-center gap-4 p-4 border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <img src="{{ asset('storage/' . $post->image) }}"
                    alt="{{ $post->title }}"
                    class="post-image w-16 h-16 object-cover rounded-lg">
                <a href="{{ route('articles.show', $post->slug) }}" class="text-lg font-semibold text-gray-800 hover:text-gray-600 hover:underline">
                    {{ $post->title }}
                </a>
            </div>
            @endforeach
        </ul>
    </div>
</div>
@endsection
