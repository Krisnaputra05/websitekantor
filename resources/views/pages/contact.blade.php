@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Contact Us</h1>

    {{-- Informasi Kontak --}}
    <div class="mb-6">
        <p><strong>Name:</strong> {{ $contact['name'] }}</p>
        <p><strong>Email:</strong> {{ $contact['email'] }}</p>
        <p><strong>Message:</strong> {{ $contact['message'] }}</p>
    </div>

    {{-- Daftar Artikel --}}
    <h2 class="text-2xl font-bold mb-4">Published Articles</h2>
    <ul>
        @foreach($articles as $article)
            <li class="mb-2">
                <a href="{{ route('articles.show', $article->id) }}" class="text-blue-500 hover:underline">
                    {{ $article->title }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
