<?php
session_start();
class loguer
{
public $user;



  /*public function __construct($usuario)
  {
    $this->user=$usuario;
  }*/

  public function loguear($user) {
    $_SESSION["idUser"] = $this->user->id;
  }

  public function estaLogueado() {
    return isset($_SESSION["idUser"]);
  }

  /*public function usuarioLogueado() {
    return buscarPorId($_SESSION["idUser"]);
  }*/


 public function logend(){
if ($this->estaLogueado()) {
     session_destroy();
     exit;


 }


}



}



 ?>
