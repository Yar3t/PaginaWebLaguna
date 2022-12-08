<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion</title>
</head>
<body>

    <!-- Si todos los campos están validados, mostramos un mensaje de EXITO -->
    @if(Session::has('success'))
    <strong>
        {{Session::get('success')}}
    </strong>
    @endif

    <form method="post" action="guardar">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" class="" name="nombre" id="nombre" value="{{ old('nombre') }}">
        @error('nombre')
            <small>
                <strong>{{ $message }}</strong>
            </small>
        @enderror


        <br><br>
        <label for="email">Email</label>
        <input type="email" class="" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            <small>
                <strong>{{ $message }}</strong>
            </small>
        @enderror


        <br><br>
        <label for="edad">Edad</label>
        <input type="edad" class="" name="edad" id="edad" value="{{ old('edad') }}">
        @error('edad')
            <small>
                <strong>{{ $message }}</strong>
            </small>
        @enderror


        <br><br>
        <label for="telefono">Telefono</label>
        <input type="telefono" class="" name="telefono" id="telefono" value="{{ old('telefono') }}">
        @error('telefono')
            <small>
                <strong>{{ $message }}</strong>
            </small>
        @enderror


        <br><br>
        <input type="submit" name="send" value="Enviar">
    </form>
</body>
</html>
