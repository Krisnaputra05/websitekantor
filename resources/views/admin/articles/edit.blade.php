@extends('layouts.admin')

@section('title', 'Edit Article')

@section('header', 'Edit Article')

@section('content')
<div class="bg-white shadow rounded-lg">
    <div class="p-6">
        @if(session('success'))
        <div id="successPopup" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm text-center">
                <div class="flex justify-center mb-4">
                    <svg class="w-12 h-12 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Success!</h2>
                <p class="text-gray-600 mb-4">{{ session('success') }}</p>
                <button onclick="closePopup()" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-400">
                    OK
                </button>
            </div>
        </div>
        @endif

        <!-- Form Edit Artikel -->
        <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Title
                </label>
                <input type="text" name="title" id="title"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('title', $article->title) }}" required>
                @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                    Content
                </label>
                <textarea name="content" id="content" rows="10"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>{{ old('content', $article->content) }}</textarea>
                @error('content')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    Image
                </label>
                <img class="img-preview w-full max-w-sm mb-3 rounded">
                <div class="mb-2">
                    @if ($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" alt="Current Image" class="h-32 mb-2">
                    @endif
                </div>
                <input type="file" name="image" id="image"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    onchange="previewImage()">
                @error('image')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="status">
                    Status
                </label>
                <select name="status" id="status"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="draft" {{ old('status', $article->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $article->status) == 'published' ? 'selected' : '' }}>Published</option>
                </select>
                @error('status')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update Article
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<!-- TinyMCE Integration -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content',
        plugins: 'lists link image table code',
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | link image | code',
        height: 500,
        menubar: false,
        content_style: "body { font-family:Arial,Helvetica,sans-serif; font-size:14px }",
        setup: function(editor) {
            editor.on('change', function() {
                editor.save(); // Ensure synchronization between TinyMCE and the form's textarea
            });
        }
    });

    // Ensure TinyMCE data is saved before submitting the form
    document.querySelector('form').addEventListener('submit', function() {
        tinymce.triggerSave();
    });

    // // Popup close function
    // function closePopup() {
    //     document.getElementById('successPopup').style.display = 'none';
    // }
</script>
@endsection