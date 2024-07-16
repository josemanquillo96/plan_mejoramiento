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
    <h1>Lista de equipos</h1>
    <a href="{{ route('team.create') }}" class="btn btn-primary " style="backgrand-color:red;">registrar equipo</a>
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
            <h4>ciudad
        </td>
        <td>
            <h4>estadio
        </td>
        <td>
            <h4>aforo</h4>
        </td>
        <td>
            <h4>año</h4>
        </td>
        <td>
            <h3>id presidente</h3>
        </td>
        @foreach ($teams as $team)
            <tr>
                <td>{{ $team->id}}</td>
                <td>{{ $team->codigo}}</td>
                <td>{{ $team->nombre}}</td>
                <td>{{ $team->ciudad}}</td>
                <td>{{ $team->estadio}} </td>
                <td>{{ $team->aforo}} </td>
                <td>{{ $team->anio}} </td>
                <td>{{ $team->president_id}} </td>

                <td><a href="{{ route('team.show', $team->id) }}" style="text-decoration: none">Mostrar</a></td>
                <td><a href="{{ route('team.edit', $team->id) }}" style="text-decoration: none">Editar</a></td>
                
                <td>
                    <form action="{{ route('team.destroy', $team->id) }}" method="POST">
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
