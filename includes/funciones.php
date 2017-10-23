<?php

// function de validacion
  function validacion($data){
    // Array vacio de errrores
      $errores = [];

      $nombre = trim($data["name"]);
      $apellido = trim($data["lastname"]);
      $mail = $data["correo"];
      $pass = $data["pass"];
      $repass = $data["repass"];

      if(strlen($nombre) == 0){
        $errores["name"] = "Debes ingresar un nombre <br />";
      }
      if(strlen($apellido) == 0){
        $errores["lastname"] = "Debes ingresar un apellido <br />";
      }
      if(strlen($mail) == 0){
        $errores["correo"] = "Debes ingresar un correo <br />";
      }
      else if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $errores["correo"] = "El formato del correo es incorrecto <br />";
      }

      if($pass == ""){
         $errores["pass"] = "Debes ingresar una contraseña <br />";
      }

      if($pass != $repass){
         $errores["repass"] = "Las contraseñas no coinciden <br />";
      }
      return $errores;
  }

    // subida de archivos

    function SubirImagen($foto, $errores) {
  		if($_FILES[$foto]["error"] == UPLOAD_ERR_OK){
  			$nombreDeLaFoto = $_FILES[$foto]["name"];
  			$carpetaTemporal = $_FILES[$foto]["tmp_name"];
  			$exten = pathinfo($nombreDeLaFoto, PATHINFO_EXTENSION);
        if ($exten == "jpg" || $exten == "jpeg" || $exten == "png") {
    			$ubicacionDelArchivo = dirname(__FILE__);
    			$ubicacionDelArchivo = $ubicacionDelArchivo . "../../Foto/";
    			$ubicacionDelArchivo = $ubicacionDelArchivo . $_POST["correo"] . "." . $exten;
    			move_uploaded_file($carpetaTemporal, $ubicacionDelArchivo);
        }
        else {
          $errores["file"] = "El formato de la foto es incorrecto, debe ser jpg, jpeg o png <br />";
        }
  		} else {
        $errores["file"] = "No se pudo subir la foto, intenta de nuevo";
      }
      return $errores;
  	}


    // funcion creo al usuario, los datos se reciben por POST

    function creaUsuarios($data){
      $user = [
        "nombre" => $data["name"],
        "apellido" => $data["lastname"],
        "correo" => $data["correo"],
        "password" => password_hash($data["pass"],
        PASSWORD_DEFAULT)];
        $user["id"] = nuevoId();

        return $user;
    }

    // funcion para guardar en json
    function guardarUsario($user){
      $json = json_encode($user);
      $json = $json . PHP_EOL;
      file_put_contents("users.json", $json, FILE_APPEND);
    }

    // funcion para saber todos los usuarios que estan en el json
    function traerUsuarios(){
      $archivoJson = file_get_contents("users.json");
      $usersJson = explode(PHP_EOL, $archivoJson);
      array_pop($usersJson);
      $usuariosTotales = [];

      foreach ($usersJson as $json){
        $usuariosTotales[] = json_decode($json, true);
      }
      return $usuariosTotales;
    }

    // funcion para obtener el ultimo id

    function nuevoId(){
      $users = traerUsuarios();
    if (count($users) == 0) {
      return 1;
    }
     else
    {
    $ultimoUser = array_pop($users);
    $id = $ultimoUser["id"];
    return $id + 1;
    }
}




function buscarPorMail($mail) {
  $todos = traerUsuarios();
  foreach ($todos as $usuario) {
    if ($usuario["correo"] == $mail) {
      return $usuario;
    }
  }
  return false;
}
function buscarPorId($id) {
  $todos = traerUsuarios();
  foreach ($todos as $usuario) {
    if ($usuario["id"] == $id) {
      return $usuario;
    }
  }
    return false;
}
function validarLogin($datos) {
  $errores = [];
  $mail = trim($datos["correo"]);
  if (strlen($mail) == 0) {
    $errores["correo"] = "No has ingresado el Mail :(";
  } else if (! filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $errores["correo"] = "El mail debe ser un mail";
  }
  else if (buscarPorMail($mail) == false) {
    $errores["correo"] = "No existe el usuario";
  } else {
    $usuario = buscarPorMail($mail);
    if (password_verify($datos["pass"], $usuario["password"]) == false) {
      $errores["correo"] = "Error de login";
    }
  }
  return $errores;
}
function loguear($usuario) {
  $_SESSION["idUser"] = $usuario["id"];
}

function estaLogueado() {
  return isset($_SESSION["idUser"]);
}

function usuarioLogueado() {
  return buscarPorId($_SESSION["idUser"]);
}


function buscarUsuarioPorMail($mail) {
  $todos = traerUsuarios();
  foreach ($todos as $usuario) {
    if ($usuario["correo"] == $mail) {
      return $usuario["nombre"];
    }
  }
  return false;
}
?>