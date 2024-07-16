<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('player.store') }}" method="POST" enctype="multipart/form-data" >

        @csrf {{-- token o seguridad  --}}

        <label  class="form-label">
            codigo
            <br>
            <input class="form-control" type="text" name="codigo"  class="form-control" required>
        </label><br><br>
        <label  class="form-label">
            Nombre:
            <br>
            <input class="form-control" type="text" name="nombre"  class="form-control" required>
        </label><br><br>
        <label  class="form-label">
            fecha nacimiento
            <br>
            <input class="form-control" type="text" name="fecha_nacimiento"  class="form-control" required>
        </label><br><br>
        <label  class="form-label">
            posicion
            <br>
            <input class="form-control" type="text" name="posicion"  class="form-control" required>
        </label>
        <br><br>
        
        <br>
        <button class="btn btn-primary" type="submit" >Enviar Formulario:</button>
    </form>
    
</body>
</html>