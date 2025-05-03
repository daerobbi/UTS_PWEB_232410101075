<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriHive</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-100 pt-20 flex flex-col min-h-screen">
    @include('Components.navbar')
    <main class="flex-grow">
        @yield('content')
    </main>
    <footer class="mt-auto">
        @include('Components.footer')
    </footer>
</body>
</html>
