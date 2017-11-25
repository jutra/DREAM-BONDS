<?php
/**
 *
 */
class bdJSON extends baseDeDatos
{

  public function creaUsuarios($data){
    $user = [
      "id" => nuevoId(),
      "nombre" => $data["name"],
      "apellido" => $data["lastname"],
      "correo" => $data["correo"],
      "password" => password_hash($data["pass"], PASSWORD_DEFAULT)];

      return $user;
  }

public function guardarUsario($user){
      $json = json_encode($user);
      $json = $json . PHP_EOL;
      file_put_contents("users.json", $json, FILE_APPEND);
    }



  public function traerTodo(){
        $archivoJson = file_get_contents("users.json");
        $usersJson = explode(PHP_EOL, $archivoJson);
        array_pop($usersJson);
        $usuariosTotales = [];

        foreach ($usersJson as $json){
          $usuariosTotales[] = json_decode($json, true);
        }
        return $usuariosTotales;
      }

}



 ?>
