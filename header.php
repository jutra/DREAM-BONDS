<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Comfortaa" rel="stylesheet">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgistro</title>
  </head>
  <header class="main-header">
    <h1 class="logo">Dreambonds</h1>

    <form class=action="home.html"  method="get">
    </form>



    <input type="checkbox" id="abre-nav">

    <label for="abre-nav" class="toggle-nav">
      <span class="ion-navicon-round"></span>
    </label>

    <input type="checkbox" id="abre-search">

    <label for="abre-search" class="toogle-search">
      <span class="ion-ios-search-strong"></span>
    </label>

    <input type="checkbox" id="abre-options">

    <label for="abre-options" class="toogle-options">
      <span class="ion-ios-lightbulb-outline"></span>
    </label>

    <nav class="main-nav">
      <ul>
        <li>
          <label for="abre-nav" class="cierra">
            <span class="ion-close-circled"></span>
          </label>
          <a class="active" href="home.html">Home</a>
        </li>
        <li><a href="#proyectos">Tus proyectos</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="index.html">Cerrar sesion</a></li>
      </ul>
    </nav>
    <div class="div-buscar">
      <form  class="mobileform" action="home.html" method="get">

      <label for="abre-search" class="cierra">
        <span class="ion-close-circled"></span>
      </label>
      <input class="buscador" type="search" name="input-buscar" placeholder="Buscar">
      <input type="submit" name="enviar" value="OK" id="enviar">
      <label for="enviar" class="enviar">
        <span class="ion-checkmark-circled"></span>
      </label>
      </form>
    </div>
    <div class="div-options">
      <label for="abre-options" class="cierra">
        <span class="ion-close-circled"></span>
      </label>
      <ul>
        <li><a class="ion-ios-plus-outline" href="#"></a></li>
        <li><a class="ion-android-upload" href="#"></a></li>
        <li><a class="ion-edit" href="#"></a></li>
        <li><a class="ion-android-folder" href="#"></a></li>
      </ul>
    </div>
  </header>
