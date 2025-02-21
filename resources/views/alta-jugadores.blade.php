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
    <h1>Nuevo Jugador</h1>
    <form action="{{ route('addJugador') }}" method="post">
        @csrf
        <label for="team">Equipo</label>
        <select name="team" id="team" required>
            <option value="-1">Sin equipo</option>
            @foreach ($equipos as $e)
            <option value="{{ $e->id }}">{{ $e->nombre }}</option>
            @endforeach
        </select><br>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" required><br>
        <label for="apel">Apellidos</label>
        <input type="text" name="apel" id="apel" required><br>
        <label for="dorsal">Dorsal</label>
        <input type="number" name="dorsal" id="dorsal" required><br>
        <label for="f_nac">Fecha de nacimiento</label>
        <input type="date" name="f_nac" id="f_nac" required><br>
        <button type="submit">Guardar</button>
    </form>
    <footer>
        <a href="{{ route('inicio') }}">Volver al menu</a>
    </footer>
</body>
</html>
