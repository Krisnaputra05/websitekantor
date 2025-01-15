@extends('layouts.admin')

@section('title', 'Create Article')

@section('header', 'Create New Article')

@section('content')
<div class="bg-white shadow rounded-lg">
    <div class="p-6">
        <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data" id="articleForm">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Title
                </label>
                <input type="text" name="title" id="title"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('title') }}" required>
                <p id="error-title" class="text-red-500 text-xs italic hidden">Title is required.</p>
                @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="slug">
                    Slug
                </label>
                <input type="text" name="slug" id="slug"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('slug') }}" required>
                <p id="error-slug" class="text-red-500 text-xs italic hidden">Slug is required.</p>
                @error('slug')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                    Content
                </label>
                <textarea name="content" id="content" rows="10"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>{{ old('content') }}</textarea>
                <p id="error-content" class="text-red-500 text-xs italic hidden">Content is required.</p>
                @error('content')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    Image
                </label>
                <img class="img-preview w-full max-w-sm mb-3 rounded">
                <input type="file" name="image" id="image"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    onchange="previewImage()">
                <p id="error-image" class="text-red-500 text-xs italic hidden">Image is required.</p>
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
                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                </select>
                <p id="error-status" class="text-red-500 text-xs italic hidden">Status is required.</p>
                @error('status')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end">
                <button type="submit" id="submitButton"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Create Article
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

    document.querySelector('form').addEventListener('submit', function (event) {
        let hasError = false;
        
        // Validate Title
        const title = document.getElementById('title');
        if (!title.value.trim()) {
            document.getElementById('error-title').classList.remove('hidden');
            hasError = true;
        } else {
            document.getElementById('error-title').classList.add('hidden');
        }

        // Validate Slug
        const slug = document.getElementById('slug');
        if (!slug.value.trim()) {
            document.getElementById('error-slug').classList.remove('hidden');
            hasError = true;
        } else {
            document.getElementById('error-slug').classList.add('hidden');
        }

        // Validate Content
        const content = document.getElementById('content');
        if (!content.value.trim()) {
            document.getElementById('error-content').classList.remove('hidden');
            hasError = true;
        } else {
            document.getElementById('error-content').classList.add('hidden');
        }

        // Validate Image
        const image = document.getElementById('image');
        if (!image.files.length) {
            document.getElementById('error-image').classList.remove('hidden');
            hasError = true;
        } else {
            document.getElementById('error-image').classList.add('hidden');
        }

        // Validate Status
        const status = document.getElementById('status');
        if (!status.value) {
            document.getElementById('error-status').classList.remove('hidden');
            hasError = true;
        } else {
            document.getElementById('error-status').classList.add('hidden');
        }

        if (hasError) {
            event.preventDefault();
            alert('Please fill in all required fields.');
        }
    });

    // Slug Generator
    function generateSlug(text) {
        return text
            .toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
    }

    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');

    titleInput.addEventListener('input', function () {
        const slug = generateSlug(this.value);
        slugInput.value = slug;
    });
</script>
@endsection
