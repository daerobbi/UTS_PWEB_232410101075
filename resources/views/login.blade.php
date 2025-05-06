<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriHive</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-cover bg-center flex items-center justify-center" style="background-image: url('https://asset.kompas.com/crops/ClP2DNhDGCeuWNcnfrGX5aCEwp0=/234x51:1920x1175/1200x800/data/photo/2021/05/24/60aa917e6ac4b.jpg');">
    <div class="bg-white bg-opacity-30 backdrop-blur-md p-6 sm:p-8 rounded-xl shadow-md w-11/12 sm:w-full max-w-sm mx-4">
        <h2 class="text-xl sm:text-2xl font-bold text-center mb-6 text-black">Login</h2>
        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4 text-center">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <input type="text" name="username" placeholder="username"
                    class="w-full p-3 rounded-md bg-black bg-opacity-20 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-200 text-black" required>
            </div>
            <div class="mb-4 relative">
                <input id="password" name="password" type="password" placeholder="********"
                    class="w-full p-3 rounded-md bg-black bg-opacity-20 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-200 text-black" required>
                <button type="button" id="togglePassword" class="absolute inset-y-0 right-3 flex items-center text-black focus:outline-none">
                    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path id="eyePath1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path id="eyePath2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>
            <button type="submit" class="w-full py-3 bg-black bg-opacity-30 backdrop-blur-md rounded-full font-semibold text-black hover:bg-opacity-50 transition">
                Login
            </button>
        </form>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const toggleButton = document.getElementById('togglePassword');
        const eyePath1 = document.getElementById('eyePath1');
        const eyePath2 = document.getElementById('eyePath2');

        toggleButton.addEventListener('click', function () {
            const isPassword = passwordInput.getAttribute('type') === 'password';
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');

            if (isPassword) {
                eyePath1.setAttribute('d', 'M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7m2.177-3.284M9.88 9.88a3 3 0 104.243 4.243');
                eyePath2.setAttribute('d', 'M3 3l18 18');
            } else {
                eyePath1.setAttribute('d', 'M15 12a3 3 0 11-6 0 3 3 0 016 0z');
                eyePath2.setAttribute('d', 'M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z');
            }
        });
    </script>
</body>
</html>
