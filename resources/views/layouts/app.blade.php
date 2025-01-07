<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    <script src="/js/navbar.js"></script>
</body>
</html>
