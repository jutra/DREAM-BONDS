<?php
  abstract class baseDeDatos {

    protected $nombre;
    protected $apellido;
    protected $correo;
    protected $password;

    function __construct()
    {

    }
    public function setNombre($name){
      $this->nombre = $name;
    }
    public function setApellido($lastname){
      $this->apellido = $lastname;
    }
    public function setCorreo($email){
      $this->correo = $email;
    }
    public function setPassword($pass){
      $this->password = $pass;
    }
    public function getNombre(){
      return $this->nombre; }

    public function getApellido(){
      return $this->apellido; }

   public function getCorreo(){
     return $this->correo; }

   public function getPass(){
     return $this->password;
   }



public function crearUsuario(){}
public function guardarUsuario(){}
public function traerTodo(){}













  }

 ?>
