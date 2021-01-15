<!doctype html>
<html lang="en" class="h-100">

  <!-- Header | additionally you can specify a custom css file by adding ( $style=file.css ) before the requirement -->
<?php require_once('./template/header.php') ?>

  <body class="d-flex flex-column h-100">

    <!-- Navigation bar | additionally you can specify the type of the navigation bar adding ( $navbar=type ) before the requirement -->
    <?php $tab=0; $navbar=0; require_once('./template/navbar.php') ?>

	<?php
		require_once('./php/database.php');
		$nomusuari = $_POST['user'] ?? null;
		$contraseña = $_POST['pass'] ?? null;
		//Creem un nou objecte de Database
		$DB = new Database();
		//array_key_exists Comprova que dintre de Get existeix el valor
		if (array_key_exists('logout', $_GET)) {
			session_destroy();
			unset($_SESSION['current-user']);
		}
		//$_SESSION Guarda el usuari de la sessió, en cas de no tindre una sessió, serà null
		//la variable guarda la sessió al servidor fins que és tanca la sessio
		$usuariactual = $_SESSION['current-user'] ?? null;
	?>




    <!-- Begin page content -->
    <main class="flex-grow-1">
      <div class="container d-flex flex-column py-5 h-100 login-container">
		<div class="login-form">
			<form action="./login.php" method="post">
				<h2 class="text-center">Log in</h2>
				<div class="form-group">
					<input type="text" name="user" class="form-control" placeholder="Nom d'usuari" required="required">
				</div>
				<div class="form-group">
					<input type="password" name="pass" class="form-control" placeholder="Contrasenya" required="required">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Log in</button>
				</div>
				<div class="clearfix">
					<!--<label class="float-left form-check-label"><input type="checkbox"> Remember me</label>-->
					<?php
						//Validació, comprova usuari i contrasenya a la BD
						if ($usuariactual) {
							header('Location: ./gestor.php');
						}

						//Realitza la connexió a la base de dades
						if ($nomusuari || $contraseña) {
							$user = $DB->validar($nomusuari,$contraseña);
							if ($user) {
								//$hash = md5(uniqid());
								//setcookie('projekt-cat', $user['idUsuari']);
								$_SESSION['current-user'] = $user;
								header('Location: ./gestor.php');

							} else {
								echo '<a href="#" class="float-right">Nom d\'usuari o contrasenya incorrectes!</p>';
							}
						}
					?>
				</div>
			</form>
			<p class="text-center"><a href="#">Create an Account</a></p>
		</div>
	  </div>
    </main>

    <!-- Footer | additionally you can specify the type of the navigation bar adding ( $footer=type ) before the requirement -->
    <?php require_once('./template/footer.php') ?>

    <script src="./js/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
