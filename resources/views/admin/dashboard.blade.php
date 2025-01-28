@extends('layouts.admin')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
    <!-- Tombol Logout -->
    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">
            Logout
        </button>
    </form>

</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Total Articles -->
    <a href="{{ route('admin.articles.index') }}" class="p-6 bg-blue-100 rounded-lg text-center cursor-pointer shadow-lg transform hover:scale-105 transition duration-300">
        <h4 class="text-4xl font-semibold text-blue-600">{{ $totalArticles }}</h4>
        <p class="text-gray-700 font-medium">Total Articles</p>
    </a>

    <!-- Published Articles -->
    <a href="{{ route('admin.articles.index', ['status' => 'published']) }}" class="p-6 bg-green-100 rounded-lg text-center cursor-pointer shadow-lg transform hover:scale-105 transition duration-300">
        <h4 class="text-4xl font-semibold text-green-600">{{ $publishedArticles }}</h4>
        <p class="text-gray-700 font-medium">Published Articles</p>
    </a>

    <!-- Draft Articles -->
    <a href="{{ route('admin.articles.index', ['status' => 'draft']) }}" class="p-6 bg-yellow-100 rounded-lg text-center cursor-pointer shadow-lg transform hover:scale-105 transition duration-300">
        <h4 class="text-4xl font-semibold text-yellow-600">{{ $draftArticles }}</h4>
        <p class="text-gray-700 font-medium">Draft Articles</p>
    </a>

    <!-- Total Views -->
    <div class="p-6 bg-purple-100 rounded-lg text-center cursor-pointer shadow-lg transform hover:scale-105 transition duration-300" id="totalViewsCard">
        <h4 class="text-4xl font-semibold text-purple-600">{{ $totalViews }}</h4>
        <p class="text-gray-700 font-medium">Total Views</p>
    </div>
</div>

<div class="flex justify-between items-center mb-6 mt-8">
    <a href="{{ route('admin.articles.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300">
        Create Article
    </a>
</div>
@endsection

@section('scripts')
@endsection