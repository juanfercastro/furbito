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
    @if (count($equipos)>0)
    <h1>Lista de equipos existentes</h1>
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
            <td><a href="{{ route('listaJugadores', $e->id) }}">Ver jugadores</a></td>
        </tr>
        @endforeach
    </table>
    @else
    <h1>No hay equipos registrados</h1>
    @endif
    <footer>
        <a href="{{ route('inicio') }}">Volver al menu</a>
    </footer>
</body>

</html>