<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Zalada</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="https://i.pinimg.com/736x/d4/a5/f8/d4a5f84467c521716e0b4eaef26fb836.jpg" />
</head>

<body class="bg-gradient-to-br from-blue-600 via-purple-700 to-orange-500 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-xl rounded-3xl w-full max-w-md p-8 relative border border-orange-300">
        <div class="text-center mb-6">
            <img src="https://i.pinimg.com/736x/d4/a5/f8/d4a5f84467c521716e0b4eaef26fb836.jpg" alt="logo zalada" class="mx-auto w-20 h-20 mb-2">
            <h1 class="text-3xl font-bold text-orange-700">Login Zalada</h1>
            <p class="text-sm text-gray-600">Silakan masuk untuk melanjutkan</p>
        </div>

        {{-- Error & Success Messages --}}
        @if ($errors->any())
            <div class="mb-4 bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-lg">
                <ul class="list-disc list-inside text-sm space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('success'))
            <div class="mb-5 p-4 rounded-lg shadow-sm bg-green-100 border border-green-300 text-green-800 relative">
                <span>{{ session('success') }}</span>
                <button type="button" class="absolute top-2 right-3 text-green-600 hover:text-green-800"
                    onclick="this.parentElement.remove()">
                    &times;
                </button>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" placeholder="email@example.com"
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="Masukkan kata sandi"
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" required>
            </div>

            <button type="submit"
                class="w-full bg-orange-600 hover:bg-orange-700 text-white font-semibold py-2 rounded-lg transition duration-300">
                Masuk
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-4">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-orange-600 hover:underline font-medium">Daftar di sini</a>
        </p>
    </div>

</body>

</html>
