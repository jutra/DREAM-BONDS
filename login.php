<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <?php
  require_once"includes/head.php";
//Verifica si el usuarios esta logueado y de ser asi lo redirige al index
if(estaLogueado()) {
    header("location:index.php");exit;
  }
if ($_POST) {
    $errores = validarLogin($_POST);
    if(empty($errores)) {
      $usuario = buscarPorMail($_POST["correo"]);
      print_r($usuario);
      loguear($usuario);
      if (isset($_POST["recordame"])) {
              setcookie("idUser", $usuario["id"], time() + 60 * 60 * 24 * 30);
            }

            header("location:index.php");
          }
    if(isset($errores["pass"])){echo $errores["pass"];}
    if(isset($errores["correo"])){echo $errores["correo"];}
        }
  ?>
      <body>
        <div class="bo-body">
            <div class="container-login">

                    <?php include_once"includes/header.php"; ?>
                  <form class="login" action="login.php" method="post">
                    <input type="text" name="correo" placeholder="Email" class="campos">
                    <input type="password" name="pass"  placeholder="Contraseña"value="" class="campos">
                    <div class="recordar">
                      <input class="in-input"type="checkbox" name="recordarme"  id="recordar" value="">
                      <label for="recordar">
                        <span>Recordarme</span>
                      </label>
                    </div>
                    <input type="submit" name="login" value="Iniciar Sesion" id="btn-login">
                    <a href="#" class="olvidaste-contraseña">¿Olvidaste tu contraseña?</a>
                  </form>
                  <div class="register">
                    <ul>
                      <li class "registrate-li"><a href="registro.php">Registrate</a></li><span>¿Aún no tenes cuenta?</span>
                    </ul>
                  </div>
            </div>
            <?php include_once"includes/footer.php"; ?>
          </div>
      </body>
</html>
