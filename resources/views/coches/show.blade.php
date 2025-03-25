<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $coche->marca }} {{ $coche->modelo }}</title>
</head>
<body>
    <h1>{{ $coche->marca }} {{ $coche->modelo }} ({{ $coche->año }})</h1>
    <p>Precio: ${{ number_format($coche->precio, 2) }}</p>
    <p>{{ $coche->descripcion }}</p>
    <a href="/">Volver</a>
</body>
</html>

