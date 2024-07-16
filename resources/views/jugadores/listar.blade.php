<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body style="padding: 10% ;">
    <center>
    <h1>Lista de jugadores:</h1>
    <a href="{{ route('player.create') }}" class="btn btn-primary " style="backgrand-color:red;">registrar jugador</a>
    <br>
    <br>
    <br>
    <table class="table" >
        <td>
            <h4>Id
        </td>
        <td>
            <h4>codigo
        </td>
        <td>
            <h4>nombre
        </td>
        <td>
            <h4>fecha de nacimiento
        </td>
        <td>
            <h4>posicion
        </td>
        <td></td>
        <td></td>
        <td></td>
        @foreach ($players as $player)
            <tr>
                <td>{{ $player->id }}</td>
                <td>{{ $player->codigo }}</td>
                <td>{{ $player->nombre }}</td>
                <td>{{ $player->fecha_nacimiento }}</td>
                <td>{{ $player->posicion }} </td>
                <td><a href="{{ route('player.show', $player->id) }}" style="text-decoration: none">Mostrar</a></td>
                <td><a href="{{ route('player.edit', $player->id) }}" style="text-decoration: none">Editar</a></td>
                <td>
                    <form action="{{ route('player.destroy', $player->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</center>
</body>
</html>
