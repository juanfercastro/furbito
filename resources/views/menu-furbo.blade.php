<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a Furbito</h1>
        <nav>
            <ul>
                <li><a href="{{ route('nuevoEquipo') }}">Alta equipo</a></li>
                <li><a href="{{ route('listaEquipos') }}">Listar equipos</a></li>
                <li>Listar jugadores de un equipo</li>
                <li>Añadir un jugador a un equipo</li>
                <li>Añadir un equipo a un torneo</li>
                <li>Listar equipos de un torneo (anual)</li>
                <li>Añadir un equipo a un torneo</li>
            </ul>
        </nav>
</body>
</html>
