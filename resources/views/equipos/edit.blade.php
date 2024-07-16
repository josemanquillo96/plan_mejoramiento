<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Actualizar jugadores</h1>

    <form action="{{ route('team.update', $team) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label>
            codigo:
            <br>
            <input type="text" name="codigo" value="{{ old('codigo', $team->codigo) }}">
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
            <input type="text" name="estadio" value="{{ old('estadio', $team->estadio) }}">
        </label><br>
        <label>
            posicion
            <br>
            <input type="text" name="aforo" value="{{ old('aforo', $team->aforo) }}">
        </label>
        <label>
            posicion
            <br>
            <input type="text" name="anio" value="{{ old('anio', $team->anio) }}">
        </label>
        <br>
        <button type="submit">Enviar Formulario:</button>
    </form>
</body>

</html>
