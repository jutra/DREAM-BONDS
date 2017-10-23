<!DOCTYPE html>
<?php  session_start(); ?>
<html>
    <?php require_once "includes/head.php";?>
      <body>
        <div class="proyectos-container">
          <?php require_once "includes/header.php"; ?>
            <h2>Crea tu proyecto</h2>
            <form class="form_proyecto" action="proyectos.php" method="get">
                <h3>Contanos cuales son tus ideas!!!</h3>
                <legend>Elige un nombre para tu proyecto</legend>
                <input type="text" name="name_proyect" value="" placeholder="Ej: Desarrollo de Videojuego"><br>
                <label>¿Sobre que trata este proyecto?</label>
                <input type="textarea" name="descripcion-proyecto" value=""><br>
                <label>Cuales son tus objetivos a corto y largo plazo</label>
                <input type="textarea" name="objetivos-proyecto" value="">
            </form>
        </div>
        <?php include_once"includes/footer.php"; ?>
      </body>
</html>
