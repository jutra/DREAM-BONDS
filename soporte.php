<?php
include_once('users.php');
include_once('validador.php');
include_once('baseSQL.php');
include_once('baseJSON.php');
include_once('logueador.php');
$db = new bdSQL;
$db->connect();
$log= new loguer;
$val= new validator;



 ?>
