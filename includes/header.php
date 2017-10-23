<header class="header-login-signup">
	<div class="header-limiter">
		<h1><a href="index.php">Dream<span>bonds</span></a></h1>
		<input type="checkbox" id="abre-nav">
        <label for="abre-nav" class="toggle-nav">
        <span class="ion-navicon-round"></span>
        </label>
        <nav class="main-nav">
        <ul>
          <li>
            <label for="abre-nav" class="cierra">
              <span class="ion-close-circled"></span>
            </label>
          </li>
          <li><a href="index.php">Home</a></li>
          <li><a href="proyectos.php">Proyectos</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="login.php">Iniciar sesion</a></li>
          <li><a href="registro.php">Registrarse</a></li>
        </ul>
        </nav>
				<nav class="secondary-nav">
					<ul>
						<li><a class="selected0" href="index.php">Home</a></li>
						<li><a class="selected1" href="proyectos.php">Proyectos</a></li>
						<li><a class="selected2" href="faq.php">FAQ</a></li>
					</ul>
				</nav>
				<?php if (!estaLogueado()) {?>
		<ul class="log-in">
			<li><a href="login.php">Iniciar Sesion</a></li>
			<li><a href="registro.php">Registrate</a></li>
		</ul>
	<?php } else { ?>
		<ul class="log-in-on">
			<li><a href="perfil.php">Mi Perfil</a></li>
			<li><a href="logout.php">Cerrar Sesion</a></li>
		</ul>
	<?php } ?>
	</div>
</header>
