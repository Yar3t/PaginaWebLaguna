<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">


    <link rel="stylesheet" href="{{ mix('/css/Relative.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/style.css') }}">
    <title>Bienvenidos!!</title>
  </head>
  <body>

    <style>
        body {
            background-color:rgb(245,245,245);
        }

        header .logo{
            margin: 0;
            padding: 15px 20px;
            font-weight: bold;
            color: cadetblue;
            font-size: 1.5em;
        }

        header nav{
            padding-bottom: 15px;
        }

        header a{
            padding: 5px 12px;
            text-decoration: none;
            font-weight: bold;
            color: black;
        }

        header a:hover{
            color: cadetblue
        }

        header .container{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: -50px;
        }

        header nav{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

    @media (min-width: 650px){
        header{
            position: fixed;
            width: 100%;
        }

        header .container{
            flex-direction: row;
            justify-content: space-between;

        }

        header nav{
            flex-direction: row;
            padding-bottom: 0;
            padding-right: 20px;
        } }
    </style>


    <header>
        <div class="container">
            <p class="logo">Aventurate en la selva</p>
            <nav>
                <a href="http://127.0.0.1:5500/index.html">Pagina principal</a>
            </nav>
        </div>
    </header>

    <div class="container mt-5">
        <div class="row">
            <h2 class="text-center text-black mt-4">Formulario de Registro - Bienvenidos!!</h2>
            <!-- Con esta variable traemos un arreglo con  todos los mensajes de error -->
            <!-- {{$errors}} -->
            <div class="col-lg-6 col-12 mx-auto">
                <!-- Si todos los campos están validados, mostramos un mensaje de EXITO -->
                @if(Session::has('success'))
                    <div class="alert alert-success text-center">
                        {{Session::get('success')}}
                    </div>
                @endif

                <div class="p-5 bg-white rounded shadow-lg">
                    <form  method="post" action="guardar" novalidate>
                        @csrf


                        <div class="form-group mb-2">
                            <label>Nombre</label>
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{ old('nombre') }}">
                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group mb-2">
                            <label>Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group mb-2">
                            <label>Edad</label>
                                <input type="edad" class="form-control @error('edad') is-invalid @enderror" name="edad" id="edad" value="{{ old('edad') }}">
                                @error('pass')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        <div class="form-group mb-2">
                            <label>Telefono</label>
                                <input type="telefono" class="form-control @error('telefono') is-invalid @enderror" name="telefono" id="telefono" value="{{ old('telefono') }}">
                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        <div class="d-grid mt-3">
                        <input type="submit" name="send" value="Enviar" class="btn btn-primary btn-lg w-100 shadow-lg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
