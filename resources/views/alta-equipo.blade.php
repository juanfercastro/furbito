<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <title>Añadir un equipo</title>
</head>
<body>
    <h1>Nuevo Equipo</h1>
    <form action="{{ route('addEquipo') }}" method="post">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name"><br>
        <label for="socios">Nª de socios</label>
        <input type="number" name="socios" id="socios"><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>