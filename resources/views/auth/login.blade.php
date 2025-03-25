<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="max-w-sm w-full bg-white p-8 rounded-lg shadow-md">
        @if(Auth::check())
            <!-- Si el usuario está autenticado, mostramos el botón para volver a la página principal -->
            <h1 class="text-xl font-semibold text-center mb-4">Ya estás autenticado</h1>
            <a href="{{ route('index') }}">
                <button class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                    Volver a la página principal
                </button>
            </a>
        @else
            <!-- Si el usuario no está autenticado, mostramos el formulario de login -->
            <h1 class="text-2xl font-bold text-center mb-6">Login</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email" required class="w-full mt-2 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" required class="w-full mt-2 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Login
                </button>
            </form>
        @endif
    </div>

</body>
</html>
