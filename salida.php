<!DOCTYPE html>
<html>
  <?php
  session_start();
  require_once("./includes/head.php");
   ?>
  <body>
      <div class="container-logout">
        <h2>No puedes acceder sin loguearte</h2>
          <div class="logo-logout">
            <h1><a href="index.php">Dream</a><span>Bonds</span></a></h1>
          </div>
      </div>
      <div class="footer-absolute">
        <?php include_once("./includes/footer.php");  ?>
      </div>
  </body>
</html>
<?php   session_destroy(); ?>