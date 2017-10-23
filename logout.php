<!DOCTYPE html>
<html>
  <?php
  session_start();
  require_once("./includes/head.php");
   ?>
  <body>
      <div class="container-logout">
        <h2>Has Cerrado Sesion Correctamente</h2>
          <h3>Nos vemos Pronto</h3>
          <div class="logo-logout">
            <h1><a href="#">Dream</a><span>Bonds</span></h1>
          </div>
      </div>
      <div class="footer-absolute">
        <?php include_once("./includes/footer.php");  ?>
      </div>
  </body>
</html>
<?php   session_destroy(); ?>
