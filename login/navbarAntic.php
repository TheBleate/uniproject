<header class="header">
  <div class="header-container">

	<?php switch($navtype):
		case 0:

			require_once('./php/database.php');

			$nomusuari = $_POST['usuari'] ?? null;
			$contraseña = $_POST['contraseña'] ?? null;

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

		<div class="header-menu">
		  <h2>Menú</h2>
		  <img class="header-menu-icon" src="./img/bars-solid.svg"/>
		  <ul class="header-menu-list" data-state="hidden">
			<li><a href="./index.php"><i class="fas fa-home"></i> Inici</a></li>
			<li><a href="./contacte.php"><i class="fas fa-map-marker-alt"></i> Contacte</a></li>
		  </ul>
		</div>
		<form class="header-form" action="#" method="post">

		<?php
			//Validació, comprova usuari i contrasenya a la BD
			if ($usuariactual) {
				header('Location: ./perfil.php');
			}

			//Realitza la connexió a la base de dades
			//
			if ($nomusuari || $contraseña) {
				$user = $DB->validar($nomusuari,$contraseña);
				if ($user) {
					//$hash = md5(uniqid());
					//setcookie('projekt-cat', $user['idUsuari']);
					$_SESSION['current-user'] = $user;
					header('Location: ./perfil.php');
				} else {
					echo '<p>Nom d\'usuari o contrasenya incorrectes!</p>';
				}
			}
		?>

			<input type="text" name="usuari" placeholder="Usuari"/>
			<input type="password" name="contraseña" placeholder="Contraseña"/>

			<button type="submit" data-button="entrada">Entra</button>
			<button type="submit" data-button="registre">Registra't</button>
		</form>

		<?php break; ?>
		<?php case 1: ?>

		<div class="header-menu">
		  <h2>Menú</h2>
		  <img class="header-menu-icon" src="./img/bars-solid.svg"/>
		  <ul class="header-menu-list" data-state="hidden">
			  <!-- Es plenara automaticament en js en responsive mostrant les opcions de sortida i modificacio del perfil -->
		  </ul>
		</div>
		<div class="header-profile" id="profile">
		  <img src="./img/perfil.png" />
		  <p id="desplegablePerfil" class="estilsdespleg">Hola, <?php echo $currentuser['Username']; ?></p>
		  <div id="myDropdown" class="desplegable-contingut">
			<a href="#">Modificar</a>
			<a href="./index.php?logout">Sortir</a>
		  </div>
		</div>

		<?php break; ?>
		<?php case 2: ?>

		<div class="header-menu">
		  <h2>Menú</h2>
		  <img class="header-menu-icon" src="./img/bars-solid.svg"/>
		  <ul class="header-menu-list" data-state="hidden">
              <li><a href="./perfil.php?tab=<?php echo $profiletab; ?>"><i class="fas fa-chevron-left"></i></a></li>
		  </ul>
		</div>
		<div class="header-profile" id="profile">
		  <img src="./img/perfil.png" />
		  <p id="desplegablePerfil" class="estilsdespleg">Hola, <?php echo $currentuser['Username']; ?></p>
		  <div id="myDropdown" class="desplegable-contingut">
			<a href="#">Modificar</a>
			<a href="./index.php?logout">Sortir</a>
		  </div>
		</div>

		<?php break; ?>
		<?php endswitch; ?>

  </div>
</header>
