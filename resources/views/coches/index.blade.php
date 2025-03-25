<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Coches</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans antialiased">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold text-center mb-6">Listado de Coches</h1>

        <div class="text-center mb-6">
            <a href="{{ route('coches.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Añadir Nuevo Coche</a>
        </div>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto border-collapse">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Marca</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Modelo</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Año</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Precio</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Descripción</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coches as $coche)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-800">{{ $coche->marca }}</td>
                        <td class="px-4 py-2 text-sm text-gray-800">{{ $coche->modelo }}</td>
                        <td class="px-4 py-2 text-sm text-gray-800">{{ $coche->año }}</td>
                        <td class="px-4 py-2 text-sm text-gray-800">{{ $coche->precio }}€</td>
                        <td class="px-4 py-2 text-sm text-gray-800">{{ $coche->descripcion }}</td>
                        <td class="px-4 py-2 text-sm">
                            <a href="{{ route('coches.edit', $coche->id) }}" class="text-yellow-500 hover:text-yellow-700">Editar</a>
                            |
                            <form action="{{ route('coches.destroy', $coche->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('¿Estás seguro de que quieres eliminar este coche?')"
                                    class="text-red-500 hover:text-red-700">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
