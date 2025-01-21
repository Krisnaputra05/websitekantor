@extends('layouts.admin')

@section('title', 'Preview Article')

@section('header', 'Preview Article')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">{{ $article->title }}</h1>
    <p class="text-gray-600 mb-6">
        <strong>Category:</strong> {{ $article->category->name ?? 'Uncategorized' }}
    </p>
    <p class="text-gray-600 mb-6">
        <strong>Status:</strong>
        <span class="px-2 py-1 text-xs font-semibold rounded {{ $article->status === 'draft' ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800' }}">
            {{ ucfirst($article->status) }}
        </span>
    </p>

    <!-- Display the article image if it exists with max-width control -->
    @if ($article->image)
    <div class="mb-6">
        <img src="{{ asset('storage/' . $article->image) }}" alt="Article Image" class="max-w-sm h-auto rounded shadow-md">
    </div>

    @endif

    <div class="prose">
        {!! nl2br(e($article->content)) !!}
    </div>

    <!-- Action Buttons -->
    <div class="mt-6 flex justify-between">
        <!-- If the article is not published, show Publish button -->
        @if ($article->status === 'draft')
        <form action="{{ route('admin.articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="status" value="published">
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Publish
            </button>
        </form>
        @else
        <!-- If the article is already published, show Edit button -->
        <a href="{{ route('admin.articles.edit', $article->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Edit
        </a>
        @endif
    </div>
</div>

@if ($warningMessage)
<div class="bg-yellow-100 text-yellow-800 p-4 mb-4 rounded">
    <strong>Warning:</strong> {{ $warningMessage }}
</div>
@endif
@endsection