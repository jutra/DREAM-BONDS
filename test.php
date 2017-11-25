<?php
  include_once('soporte.php');


$u1= new user("alan","gaia","alan@live.com",123123);
print_r($u1);
$v1= new validator($u1);


$e= $v1->validarInfo();
print_r($e);




 ?>
