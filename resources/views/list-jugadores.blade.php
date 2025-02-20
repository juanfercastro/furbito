<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <title>Listado jugadores</title>
</head>

<body>
    @if (count($jugadores)>0)
    <h1>Lista de jugadores</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Dorsal</th>
            <th>Fecha de nacimiento</th>
        </tr>
        @foreach ($jugadores as $j)
        <tr>
            <td>{{ $j->nombre }}</td>
            <td>{{ $j->apellidos }}</td>
            <td>{{ $j->dorsal }}</td>
            <td>{{ $j->f_nac }}</td>
        </tr>
        @endforeach
    </table>
    @else
    <h1>No hay jugadores</h1>
    @endif
</body>

</html>