<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Animales</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans antialiased">
    <header class="bg-emerald-700 text-white shadow-md py-6 mb-8">
        <div class="container mx-auto px-4 max-w-4xl">
            <h1 class="text-3xl font-bold">Sistema de Gestión de Animales</h1>
        </div>
    </header>
    <main class="container mx-auto px-4">
        @yield('content')
    </main>
</body>
</html>