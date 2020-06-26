<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('inicio') }}">Inicio</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('cargarArchivos') }}">Cargar Archivo</a></li>
      <li><a href="{{ route('verArchivo') }}">Ver Archivos</a></li>
      <li><a href="{{ route('usuario') }}">Crear usuarios</a></li>
    </ul>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="#"><span class="glyphicon glyphicon-user"></span> usuario</a></li>
    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
  </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar" name="search">
      </div>
      <button type="submit" class="btn btn-default">Buscar</button>
    </form>
  </div>
</nav>

<div class="container">

  @yield('pagina')

</div>
</body>
</html>

   
 
