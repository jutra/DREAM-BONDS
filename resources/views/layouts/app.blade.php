<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Audiowide|Comfortaa" rel="stylesheet">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
  <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  <link href="{{ asset('css/responsiveslides.css') }}" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
  <title>DREAMBONDS</title>
</head>
<body>
  <header class="header-login-signup">
<div class="header-limiter">
<h1><a href="/">Dream<span>bonds</span></a></h1>
<input type="checkbox" id="abre-nav">
    <label for="abre-nav" class="toggle-nav">
    <span class="ion-navicon-round"></span>
    </label>
    <nav class="main-nav">
    <ul>
      <li>
        <label for="abre-nav" class="cierra">
          <span class="ion-close-circled"></span>
        </label>
      </li>

      <li><a href="/">Home</a></li>
      <li><a href="proyectos">Proyectos</a></li>
      <li><a href="faq">FAQ</a></li>
      <li><a href="login">Iniciar sesion</a></li>
      <li><a href="register">Registrarse</a></li>
      <li><a href="perfil">Mi Perfil</a></li>
      <li><a href=""{{ route('logout') }}"">Cerrar Sesion</a></li>

    </ul>
    </nav>
    <nav class="secondary-nav">
      <ul>
        <li><a class="selected0" href="/">Home</a></li>
        <li><a class="selected1" href="proyectos">Proyectos</a></li>
        <li><a class="selected2" href="faq">FAQ</a></li>
      </ul>
    </nav>
    <?php
    $u = Auth::user();
    if (!$u) {?>
<ul class="log-in">
  <select>
        <option value="1" selected="selected">Tema principal</option>
        <option value="2">Negro</option>
        <option value="3">Rojo</option>
    </select>
  <li><a id="loginjs" href="login">Iniciar Sesion</a></li>
  <li><a id="regjs" href="register">Registrate</a></li>
</ul>
<?php  } ?>
<ul class="log-in-on">
  <?php $u = Auth::user();
if ($u) {?>
  <li><a href="perfil">Mi Perfil</a></li>
  <li><a href="logout">Cerrar Sesion</a></li>
<?php } ?>
</ul>
</div>
</header>
  @yield('estructura')
  <footer class="footer-dreambonds">
  <div class="footer-left">
    <p class="footer-links">
      <a href="/">Home</a>
      <a href="#">Contacto</a>
      <a href="#">About</a>
      <a href="faq">FAQ</a>
    </p>
    <p id="copyright">Dreambonds &copy; 2017</p>
  </div>
</footer>
<script src="{{ URL::asset("js/jquery-3.2.1.min.js") }}"></script>
<script src="{{ URL::asset("js/responsiveslides.js") }}"></script>
<script src="{{ URL::asset('js/theme.js') }}"></script>
<script src="{{ URL::asset('js/perfil.js') }}"></script>
<script src="{{ URL::asset('js/ajax.js') }}"></script>
<script src="{{ URL::asset('js/registro.js') }}"></script>
<script src="{{ URL::asset('js/login.js') }}"></script>
<script src="{{ URL::asset('js/slider.js') }}"></script>
<script src="{{ URL::asset('js/galeria.js') }}"></script>
<script src="{{ URL::asset('js/proyectos.js') }}"></script>
</body>
</html>
