<!DOCTYPE html>
<html lang="en">
  
<head>
  
  <title>Ver Archivos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="/css/subtitulos.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/datatable.min.css"/>

</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('inicio')}}">Inicio</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{route('cargarArchivos')}}">Cargar Archivo</a></li>
      <li><a href="{{ route('verArchivo') }}">Ver Archivos</a></li>
      <li><a href="{{ route('usuarios') }}">Usuarios</a></li>
    </ul>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="#">
    <svg width="1em" height="1em" viewBox="0 0 16 12" class="bi bi-person-check-fill"  fill="currentColor" >
      <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9.854-2.854a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
    </svg> Usuario
  </a></li>  
    
    <li><a href="#"><svg width="1em" height="1em" viewBox="2 0 16 15" class="bi bi-door-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M1 15.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM11.5 2H11V1h.5A1.5 1.5 0 0 1 13 2.5V15h-1V2.5a.5.5 0 0 0-.5-.5z"/>
      <path fill-rule="evenodd" d="M10.828.122A.5.5 0 0 1 11 .5V15h-1V1.077l-6 .857V15H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117z"/>
      <path d="M8 9c0 .552.224 1 .5 1s.5-.448.5-1-.224-1-.5-1-.5.448-.5 1z"/>
    </svg> Salir</a></li>
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
<script type="text/javascript" src="js/datatable.min.js"></script>
</html>

   
 
