@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10">
    <h1 class="text-4xl font-bold text-gray-800 mb-6">{{ $title }}</h1>

    @if($articles->isEmpty())
        <p class="text-gray-500">Tidak ada artikel yang ditemukan.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
            @foreach($articles as $article)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transition duration-300">
                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <span class="text-xs font-semibold uppercase bg-purple-500 text-white px-2 py-1 rounded">
                            {{ $article->category->name }}
                        </span>
                        <h2 class="text-lg font-semibold text-gray-800 mt-2">
                            <a href="{{ route('articles.show', $article->slug) }}" class="hover:text-blue-500">
                                {{ $article->title }}
                            </a>
                        </h2>
                        <p class="text-gray-500 text-sm mt-2 line-clamp-3">
                            {!! Str::limit($article->content, 120, '...') !!}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $articles->links() }}
        </div>
    @endif
</div>
@endsection
