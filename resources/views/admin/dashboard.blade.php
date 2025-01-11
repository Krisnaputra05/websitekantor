@extends('layouts.admin')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
    <!-- Total Articles -->
    <div class="p-4 bg-blue-100 rounded-lg text-center">
        <h4 class="text-3xl font-bold text-blue-600">{{ $totalArticles }}</h4>
        <p class="text-gray-700 font-medium">Total Articles</p>
    </div>
    
    <!-- Published Articles -->
    <div class="p-4 bg-green-100 rounded-lg text-center">
        <h4 class="text-3xl font-bold text-green-600">{{ $publishedArticles }}</h4>
        <p class="text-gray-700 font-medium">Published Articles</p>
    </div>
    
    <!-- Draft Articles -->
    <div class="p-4 bg-yellow-100 rounded-lg text-center">
        <h4 class="text-3xl font-bold text-yellow-600">{{ $draftArticles }}</h4>
        <p class="text-gray-700 font-medium">Draft Articles</p>
    </div>
    
    <!-- Total Views -->
    <div class="p-4 bg-purple-100 rounded-lg text-center">
        <h4 class="text-3xl font-bold text-purple-600">{{ $totalViews }}</h4>
        <p class="text-gray-700 font-medium">Total Views</p>
    </div>
</div>
@endsection
