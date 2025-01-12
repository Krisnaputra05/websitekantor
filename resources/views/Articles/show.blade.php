@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 grid grid-cols-1 lg:grid-cols-4 gap-8">
    {{-- Konten Utama --}}
    <div class="col-span-3">
        {{-- Judul Artikel --}}
        <h1 class="text-3xl font-bold mb-6">{{ $article->title }}</h1>

        {{-- Informasi Artikel --}}
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center space-x-4">
                <div>
                    <p class="font-semibold">{{ $article->author }}</p>
                    <p class="font-semibold text-gray-500 text-sm">{{ $article->created_at->diffForHumans() }}</p>
                </div>
            </div>
            <div class="flex space-x-3">
                <a href="#">
                    <img src="/icons/facebook.png" alt="Facebook" class="w-6 h-6">
                </a>
                <a href="#">
                    <img src="/icons/instagram.png" alt="Instagram" class="w-6 h-6">
                </a>
                <a href="#">
                    <img src="/icons/whatsapp.png" alt="WhatsApp" class="w-6 h-6">
                </a>
                <a href="#">
                    <img src="/icons/email.png" alt="Email" class="w-6 h-6">
                </a>
            </div>
        </div>

        {{-- Gambar Artikel --}}
        @if($article->image)
        <div class="mb-6">
            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="max-w-md w-full h-auto object-cover rounded-lg shadow-md mx-auto">
        </div>
        @endif

        {{-- Konten Artikel --}}
        <div class="prose prose-lg max-w-none text-justify">
            {!! $article->content !!}
        </div>

        <!-- {{-- Jumlah Views --}}
            <p class="mt-6 text-gray-600">Views: {{ $article->views }}</p> -->
    </div>

    {{-- Sidebar --}}
    <div class="bg-white p-6 rounded-lg shadow-md">
        {{-- Artikel Populer --}}
        <h2 class="text-2xl font-bold mb-4">Popular Posts</h2>
        <ul class="space-y-4">
            @foreach ($popularPosts as $post)
            <div class="post flex items-center gap-4 p-4 border border-gray-300 rounded-lg shadow-sm">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="post-image w-16 h-16 object-cover rounded-lg">
                <a href="{{ route('articles.show', $post->id) }}" class="text-lg font-semibold text-black hover:underline">{{ $post->title }}</a>
            </div>
            @endforeach
        </ul>
    </div>
</div>
@endsection