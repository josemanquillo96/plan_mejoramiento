<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Actualizar jugadores</h1>

    <form action="{{ route('player.update', $player) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label>
            codigo:
            <br>
            <input type="text" name="codigo" value="{{ old('codigo', $player->codigo) }}">
        </label>
        <br>
        <label>
            nombre
            <br>
            <input type="text" name="nombre" value="{{ old('nombre', $player->nombre) }}">
        </label><br>
        <label>
            fecha nacimiento
            <br>
            <input type="text" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $player->fecha_nacimiento) }}">
        </label><br>
        <label>
            posicion
            <br>
            <input type="text" name="posicion" value="{{ old('posicion', $player->posicion) }}">
        </label>

        <br>

        <button type="submit">Enviar Formulario:</button>
    </form>

</body>

</html>
