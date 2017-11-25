<?php
  session_start();
require_once("funciones.php");
include_once("soporte.php");
$apellido=$user->apellido;
$correo=$user->correo;
$nombre=$user->nombre;
$foto=buscarMailPorI($_SESSION["idUser"]);
$archivos = glob("Foto/" . $foto . ".*");
$foto = $archivos[0];
$usuario = $user->id);

?>
<!DOCTYPE html>
<html>

  <?php require_once("./includes/head.php"); ?>
  <body>
    <?php require_once("./includes/header.php"); ?>
    <div class="container-perfil">
        <h2>Bienvenido <?=$nombre?></h2>
        <div class="container-fotoperfil">
          <img class="foto-perfil" src="<?=$foto ?>" alt="Foto de perfil">
          </div>
            <ul class="datos-perfil">
              <li>Nombre: <?=$nombre?></li>
              <li>ID: <?= $usuario["id"] ?> </li>
              <li>Apellido: <?=$apellido?></li>
              <li>Email: <?=$correo ?></li>
            </ul>

    </div>
    <?php if(!estaLogueado()) {
        header("location:salida.php");exit;
      } ?>
    <?php require_once("includes/footer.php"); ?>
  </body>
</html>
