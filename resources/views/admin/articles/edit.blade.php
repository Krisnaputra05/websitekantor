@extends('layouts.admin')

@section('title', 'Edit Article')

@section('header', 'Edit Article')

@section('content')
<div class="bg-white shadow rounded-lg">
    <div class="p-6">
        <!-- Notifikasi Popup -->
        @if(session('success'))
            <div id="successPopup" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="closePopup()">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>Close</title>
                        <path d="M14.348 5.652a.5.5 0 0 1 0 .707L11.707 9l2.641 2.641a.5.5 0 0 1-.707.707L11 9.707l-2.641 2.641a.5.5 0 0 1-.707-.707L9.293 9 6.652 6.348a.5.5 0 1 1 .707-.707L11 8.293l2.641-2.641a.5.5 0 0 1 .707 0z"/>
                    </svg>
                </span>
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
                <div class="mb-2">
                    @if ($article->image)
                        <img src="{{ asset('storage/' . $article->image) }}" alt="Current Image" class="h-32 mb-2">
                    @endif
                </div>
                <input type="file" name="image" id="image"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
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
        setup: function (editor) {
            editor.on('change', function () {
                editor.save(); // Ensure synchronization between TinyMCE and the form's textarea
            });
        }
    });

    // Ensure TinyMCE data is saved before submitting the form
    document.querySelector('form').addEventListener('submit', function () {
        tinymce.triggerSave();
    });

    // Popup close function
    function closePopup() {
        document.getElementById('successPopup').style.display = 'none';
    }
</script>
@endsection
