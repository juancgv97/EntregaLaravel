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
    <form class="form-inline" method="POST" action="{{url('/login')}}">
      @csrf
        <label class="sr-only" for="inlineFormInputName2">Usuario</label>
        <input type="text" name="usuario" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
        <br>
        <label class="sr-only" for="inlineFormInputGroupUsername2">Contraseña</label>
        <div class="input-group mb-2 mr-sm-2">
          <div class="input-group-prepend">
            <div class="input-group-text">@</div>
          </div>
          <input type="password" name = "pass" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
        </div>
      
        
        <button type="submit" class="btn btn-primary mb-2">Entrar</button>
        <a href="Vregistro"><button type="button" class="btn btn-danger mb-2">Registrarse</button></a>

      </form>

    </div>
</body>
<div id="app">
  @include('flash-message')


  @yield('content')
</div>
</html>