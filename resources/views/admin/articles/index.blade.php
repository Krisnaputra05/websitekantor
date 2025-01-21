@extends('layouts.admin')

@section('title', 'Articles')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Articles {{ $status ? ' - ' . ucfirst($status) : '' }}</h1>

    <!-- Tabel Artikel -->
    <table class="table-auto w-full border-collapse border border-gray-200">
        <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">#</th>
                <th class="border border-gray-300 px-4 py-2">Title</th>
                <th class="border border-gray-300 px-4 py-2">Status</th>
                <th class="border border-gray-300 px-4 py-2">Views</th>
                <th class="border border-gray-300 px-4 py-2">Created At</th>
                <th class="border border-gray-300 px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($articles as $article)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $article->title }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                        {{ $article->status === 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                        {{ ucfirst($article->status) }}
                    </span>
                </td>
                <td class="border border-gray-300 px-4 py-2">{{ $article->views }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $article->created_at->format('Y-m-d') }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    <!-- Preview Article -->
                    <a href="{{ route('admin.articles.preview', $article->id) }}" class="text-blue-500">Preview</a>
                    <!-- Edit Article -->
                    <a href="{{ route('admin.articles.edit', $article->id) }}" class="text-blue-500 ml-4">Edit</a>
                    <!-- Delete Article -->
                    <form class="inline-block" method="POST" action="{{ route('admin.articles.destroy', $article->id) }}" onsubmit="return confirm('Are you sure you want to delete this article?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 ml-4">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center border border-gray-300 px-4 py-2">No articles found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $articles->links() }}
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