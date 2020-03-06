<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
<!-----------------BootstrapCDN------------------------------>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('Bootstrap/css/bootstrap.css') }}">
  <!---<script src="{{ asset('Bootstrap/js/bootstrap.js') }}"></script>-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="icon" type="image/png" href="{{ asset('/Bootstrap/images/perfil.ico1.ico')  }}">

</head>

<body>
   
  
   <img class="img-fluid" src = "{{ asset('/Bootstrap/images/encabezado.jpg')}}" />

  
  <!-----------------Header con barra de menu------------------------------>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/soy/')}}">Quien soy</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="{{url('/arbol/')}}">Mi Arbol Familiar</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="{{url('/hobbies/')}}">Mis Hobbies</a>
      </li><li class="nav-item active">
        <a class="nav-link " href="{{url('/experiencia/')}}">Experiencia Profesional</a>
      </li>
      </li><li class="nav-item active">
        <a class="nav-link " href="{{url('/contactame/')}}">Contacto</a>
      </li>
    </ul>
    </div>
</nav>
<!-----------------Seccion de contenido------------------------------>
	<div class="container">
		@yield('contenido')

	</div>
  @yield('TP')  
<!-----------------Footer de pagina------------------------------>
  <nav   class="fixed-bottom navbar-light bg-light">
      <div class="text-center">
        <div class="socials">
          <div class="socials-inner">
            <h5>Redes sociales</h5>
            
              <a href="#" class="facebook-ico"><span></span>Facebook</a>
              <a href="#" class="twitter-ico"><span></span>Twitter</a>
              <a href="#" class="rss-feed-ico"><span></span>Rss-feed</a>
              <a href="#" class="myspace-ico"><span></span>myspace</a>
              
            </ul>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
       © Derechos reservados
      </div>
  </nav>

</body>
</html>