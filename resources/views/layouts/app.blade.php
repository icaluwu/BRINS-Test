<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BRINS Test')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials.navbar')

    <main class="page-shell">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-inner">
            <span>BRINS Test 2026</span>
            <span>Built by Teuku Vaickal Rizki Irdian</span>
        </div>
    </footer>
</body>
</html>