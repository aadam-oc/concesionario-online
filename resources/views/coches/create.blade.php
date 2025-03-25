<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Coche</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans antialiased">
    <div class="container mx-auto p-6 max-w-lg bg-white shadow-lg rounded-lg mt-8">
        <h1 class="text-3xl font-semibold text-center mb-6">Agregar Coche</h1>

        <form action="{{ route('coches.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="marca" class="block text-sm font-medium text-gray-700">Marca:</label>
                <input type="text" name="marca" id="marca" 
                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="modelo" class="block text-sm font-medium text-gray-700">Modelo:</label>
                <input type="text" name="modelo" id="modelo" 
                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="año" class="block text-sm font-medium text-gray-700">Año:</label>
                <input type="number" name="año" id="año" 
                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="precio" class="block text-sm font-medium text-gray-700">Precio (€):</label>
                <input type="text" name="precio" id="precio" 
                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción:</label>
                <textarea name="descripcion" id="descripcion" 
                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>

            <div class="flex justify-between items-center">
                <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Guardar</button>
                <a href="{{ route('coches.index') }}" class="text-blue-500 hover:text-blue-700">Volver al listado</a>
            </div>
        </form>
    </div>
</body>

</html>
