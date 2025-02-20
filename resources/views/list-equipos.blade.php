<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <title>Listado equipos</title>
</head>
<body>
    <h1>Lista de Equipos existentes</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Socios</th>
            <th>Plantilla</th>
        </tr>
        @foreach ($equipos as $e)
        <tr>
            <td>{{ $e->nombre }}</td>
            <td>{{ $e->num_socios }}</td>
        </tr>
        @endforeach
    </table>
    <footer>
        <a href="{{ route('inicio') }}">Volver al menu</a>
    </footer>
</body>
</html>