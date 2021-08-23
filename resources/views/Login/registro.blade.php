<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container"> 
    <form class="form-inline" method="POST" action="{{url('/registro.store')}}">
        @csrf

        <label class="sr-only" for="inlineFormInputName2">Nombre</label>
        <input type="text" name="nombre" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Nombre" required>
        <br>

        <label class="sr-only" for="inlineFormInputName2">Apellido</label>
        <input type="text" name="apellido" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Apellido" required>
        <br>
 
        <label class="sr-only" for="inlineFormInputName2">Usuario</label>
        <input type="text" name="usuario"  class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="user" required>
        <br>
        
        <label class="sr-only" for="inlineFormInputName2">Contraseña</label>
        <input type="password" name="pass1" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Pass" required>              
        <br>

        <label class="sr-only" for="inlineFormInputName2">Confirmar contraseña</label>
        <input type="password" name="pass2" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Pass2" required>
        <br>



        <button type="submit" class="btn btn-success mb-2">Registrarse</button>

        </div> 

      </form>

    </div>

    <div id="app">
        @include('flash-message')


        @yield('content')
    </div>
</body>
</html>