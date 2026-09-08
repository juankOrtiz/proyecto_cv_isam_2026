<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Proyecto CV</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen">
    <div class="min-h-screen flex">
        <div class="hidden lg:flex lg:w-1/2 bg-blue-900 text-white flex-col justify-center items-center p-12">
            <h1 class="text-4xl font-bold mb-4">Proyecto CV</h1>
            <p class="text-blue-100 text-lg text-center max-w-md">
                Gestiona tu CV virtual en un solo lugar.
            </p>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center p-6">
            <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Iniciar sesión</h2>

                @if ($errors->any())
                    <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-md text-sm">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('login.store') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        >
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        >
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition-colors font-medium cursor-pointer"
                    >
                        Iniciar sesión
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
