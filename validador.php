<?php
require_once('users.php');
 class validator // validación de login/registro
 {
   public $user ;


/*  function __construct(user $usuario){
   $this->user=$usuario;

 }*/

   public function validarInfo(){
         // Array vacio de errrores
           $errores = [];

           $nombre = trim($this->user->getNombre());
           $apellido = trim($this->user->getApellido());
           $mail = $this->user->getCorreo();
           $pass = $this->user->getPass();
           $repass = $_POST["repass"];

           if(strlen($nombre) == 0){
             $errores["name"] = "Debes ingresar un nombre <br />";           }
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

   public function validarLogin(){
       $errores = [];
       $mail = trim($this->user->getCorreo());
       if (strlen($mail) == 0) {
         $errores["correo"] = "No has ingresado el Mail :(";
       } else if (! filter_var($mail, FILTER_VALIDATE_EMAIL)) {
         $errores["correo"] = "El mail debe ser un mail";
       }/*
       else if (buscarPorMail($mail) == false){
         $errores["correo"] = "No existe el usuario";
       } else {
         $usuario = buscarPorMail($mail);
         if (password_verify($datos["pass"], $usuario["password"]) == false) {
           $errores["correo"] = "Error de login";
         }
       }*/
       return $errores;
     }
 }
 ?>
