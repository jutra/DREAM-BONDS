<?php
session_start();
  require_once"includes/head.php";


  //Verifica si el usuarios esta logueado y de ser asi lo redirige al index
  if(estaLogueado()) {
      header("location:index.php");exit;
    }

// variables vacias para persistir despues
 $nombre = "";
 $apellido = "";
 $mail = "";

 // $errores = [];

// verifico si existe post para ver que no tire errores
  if($_POST){
    $errores = validacion($_POST);
    if(!isset($errores["name"])){
      $nombre = $_POST["name"];
    }
    if(!isset($errores["lastname"])){
      $apellido = $_POST["lastname"];
    }
    if(!isset($errores["correo"])){
      $mail = $_POST["correo"];
    }
  }
if($_POST){
    if(count($errores) == 0){
    $errores = SubirImagen("file", $errores);
    $usuario = creaUsuarios($_POST);
    guardarUsario($usuario);
    if(count($errores) == 0){
    header("location:registrado.php");exit;
    }
  }
}

// Muestra de errores

 if(isset($errores["name"])){echo $errores["name"];}
 if(isset($errores["lastname"])){echo $errores["lastname"];}
 if(isset($errores["correo"])){echo $errores["correo"];}
 if(isset($errores["pass"])){echo $errores["pass"];}
 if(isset($errores["repass"])){echo $errores["repass"];}
 if(isset($errores["file"])){echo $errores["file"];}
?>
<!DOCTYPE html>
<html>
  <body>
    <div class="container-registro">
        <?php require_once"includes/header.php"; ?>

      <h2>Registrate ya!</h2>

		<form class="reg" action="registro.php" method="post" enctype="multipart/form-data" novalidate>

        <input type="text" name="name" value="<?=$nombre?>" placeholder="Nombre">
        <input type="text" name="lastname" value="<?=$apellido?>" placeholder="Apellido">
        <input type="email" name="correo" value="<?=$mail?>" placeholder="email@mail.com">
        <input type="password" name="pass" value="" placeholder="Contraseña">
        <input type="password" name="repass" value="" placeholder="Confirme su contraseña">
        <input type="file" name="file" value="">

        <div class="terminos">
            <span>Al registrarse aceptas todos los <a href="#acepto">términos y condiciones</a></span>
        </div>

        <input type="submit" name="enviar" value="Registrarse">
		</form>
    <?php include_once"includes/footer.php"?>
</div>
  </body>
</html>