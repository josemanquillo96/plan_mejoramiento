<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data" >
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
            ciudad
            <br>
            <input class="form-control" type="text" name="ciudad"  class="form-control" required>
        </label><br><br>
        <label  class="form-label">
            estadio
            <br>
            <input class="form-control" type="text" name="estadio"  class="form-control" required>
        </label><br><br>
        <label  class="form-label">
            aforo
            <br>
            <input class="form-control" type="text" name="aforo"  class="form-control" required>
        </label>
        <br><br>
        <label  class="form-label">
            año
            <br>
            <input class="form-control" type="text" name="anio"  class="form-control" required>
        </label><br><br>
        <div >
            <h1>presidente</h1>
            <select  name="president_id">
                @foreach ($presidents as $president)
                    <option value="{{ $president->id }}">{{ $president->id }} - {{ $president->id }}
                    </option>
                @endforeach
            </select>
        </div>
        <br>
        <button class="btn btn-primary" type="submit" >Enviar Formulario:</button>
    </form>
</body>
</html>