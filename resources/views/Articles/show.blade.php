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
                    <p class="font-semibold text-gray-700">
                        <a href="{{ route('category.show', $article->category->slug) }}">{{ $article->category->name }}</a>
                    </p>
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
        <div class="mb-6 justify-centercenter">
            <img src="{{ asset('storage/' . $article->image) }}"
                alt="{{ $article->title }}"
                class="w-2/3 h-auto object-cover rounded-lg shadow-lg">
        </div>
        @endif

        {{-- Konten Artikel --}}
        <div class="prose prose-lg max-w-none text-justify text-gray-800">
            {!! $article->content !!}
        </div>
    </div>

    {{-- Sidebar Popular Posts (Tanpa Scroll) --}}
    <div class="bg-white p-6 rounded-lg shadow-xl border border-gray-200">
        <h2 class="text-3xl font-bold mb-4 text-gray-900 border-b-2 border-gray-300 pb-3">Popular Posts</h2>
        <ul class="space-y-4">
            @forelse ($popularPosts->take(15) as $post)
            <li class="flex items-center gap-4 p-3 hover:bg-gray-50 rounded-lg transition duration-200">
                {{-- Gambar Artikel Popular --}}
                <img src="{{ $post->image ? asset('storage/' . $post->image) : '/icons/placeholder.png' }}"
                    alt="{{ $post->title }}"
                    class="w-24 h-24 object-cover rounded-lg shadow-md border border-gray-300" loading="lazy">
                <div class="flex-1">
                    <a href="{{ route('articles.show', $post->slug) }}"
                        class="text-lg font-semibold text-gray-900 hover:text-blue-600 hover:underline transition duration-200">
                        {{ $post->title }}
                    </a>
                    <p class="text-sm text-gray-500 mt-1">{{ $post->created_at->format('F d, Y') }}</p>
                </div>
            </li>
            @empty
            <p class="text-gray-500 text-center py-6">Belum ada artikel populer.</p>
            @endforelse
        </ul>
    </div>
</div>
@endsection
