<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vacation Rentals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="p-4 bg-white shadow">
        <h1 class="text-xl font-bold">🏡 Vacation Rentals</h1>
    </header>

    <main class="p-6">
        @yield('content')
    </main>

    <footer class="p-4 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} Santiago SACCC. Todos los derechos reservados.
    </footer>
</body>
</html>
