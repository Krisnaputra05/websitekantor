@extends('layouts.admin')

@section('title', 'Manage Articles')

@section('header', 'Manage Articles')

@section('content')
<div class="bg-white shadow rounded-lg">
    <div class="p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold">Article List</h2>
            <a href="{{ route('admin.articles.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create Article
            </a>
        </div>

        <!-- Total Articles -->
        <div class="mb-4">
            <h3 class="text-gray-600 text-sm">Total Articles: <strong>{{ $totalArticles }}</strong></h3>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Views</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($articles as $article)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $article->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                {{ $article->status === 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ $article->status }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $article->views }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $article->created_at->format('Y-m-d') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('admin.articles.edit', $article) }}"
                                class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                            <form class="inline-block" method="POST"
                                action="{{ route('admin.articles.destroy', $article) }}"
                                onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $articles->links() }}
        </div>
    </div>
</div>

<!-- SweetAlert untuk pesan sukses -->
@if (session('success'))
<script>
    document.addEventListener('DOMContentLoaded', () => {
        Swal.fire({
            title: 'Success!',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'OK'
        });
    });
</script>
@endif
@endsection