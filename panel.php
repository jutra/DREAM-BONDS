<?php
	include_once("funciones.php");

if ($_POST){

if (isset($_POST["base"])) {
	crearBase();
}
if (isset($_POST['tablas'])) {
	crearTabla();
}
if (isset($_POST['migrar'])) {
	migrarDatos();
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Panel de control</title>
</head>
<body>
	<form action="panel.php" method="post">
		<button name="base">Crear base de datos</button>
		<button name="tablas">Crear tabla</button>
		<button name="migrar">Migrar datos a la base de datos</button>
	</form>
</body>
</html>
