<?php
include_once('baseDeDatos.php');


class bdSQL extends baseDeDatos{



public function connect(){
  $dsn = 'mysql:host=localhost; dbname=dreambonds';
  $db_user = 'root';
  $db_pass = '';
  $opciones = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION );
  try {
  $db = new PDO($dsn, $db_user, $db_pass, $opciones);
  }catch( PDOException $e ){
    echo $e->getMessage();
  }

}


  public function crearUsuario(){
          $user = [
            "nombre" => $this->nombre,
            "apellido" => $this->apellido,
            "correo" => $this->correo,
            "password" => password_hash($this->password, PASSWORD_DEFAULT)];
            return $user;
        }


  public function guardarUsuario(){
      $sql = "INSERT INTO `dreambonds`.`usuarios` (nombre,apellido,correo,password) VALUES( :nombre,:apellido,:correo,:password)";
      $stmt = $db->prepare($sql);
      $stmt->bindValue(":nombre", $this->nombre);
      $stmt->bindValue(":apellido", $this->apellido);
      $stmt->bindValue(":correo", $this->correo);
      $stmt->bindValue(":password", $this->password);
      $stmt->execute();
          }




  public function traerTodo(){
          $sql = "SELECT * FROM `dreambonds`.`usuarios`";
          $stmt = $db->prepare($sql);
          $usuariosTotales = [];

          foreach ($sql as $users){
            $usuariosTotales[] =($users);
          }
          return $usuariosTotales;
        }
  }

 ?>
