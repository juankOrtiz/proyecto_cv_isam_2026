<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Proyecto CV')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <x-menu />

    <main class="flex-grow max-w-6xl w-full mx-auto p-6">
        @yield('contenido')
    </main>

    @stack('scripts')
</body>
</html>