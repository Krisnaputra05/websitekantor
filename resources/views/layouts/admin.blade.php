<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        @include('partials.navbarAdmin')

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Top Navigation -->
            <header class="bg-white shadow">
                <div class="px-4 py-6 mx-auto">
                    <h1 class="text-2xl font-semibold text-gray-900">
                        @yield('header')
                    </h1>
                </div>
            </header>

            <!-- Page Content -->
            <main class="mx-auto px-4 py-6">
                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
                @endif

                @yield('content')
            </main>

            <!-- Footer -->
            @include('partials.footerAdmin')
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- TinyMCE Integration -->
<script src="https://cdn.tiny.cloud/1/qrgdc7nv424ac7dj8xjzqyp1rx3dtcciqanjf1fgq1dzlmqo/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
</script>

</html>