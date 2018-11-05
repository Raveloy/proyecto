<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="ejemplo de descripcion">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>test</title>
	</head>
	<body>


		<header>
			<nav>
				<a href="">
					<img src="img/precaucion.png" alt="logo">
				</a>
				<ul>
					<li>
						<a href="index.php">
							Inicio
						</a>
					</li>
					<li>
						<a href="#">
							Acerca de
						</a>
					</li>
					<li>
						<a href="#">
							Contenido
						</a>
					</li>
				</ul>
				<div>
					<?php
						if (isset($_SESSION['userId'])) {
							echo '<form action="includes/logout.inc.php" method="post">
						<button type="submit" name="logout-submit">Cerrar Sesion</button>
						</form>';
						}
						else{
							echo '<form action="includes/login.inc.php" method="post">
						<input type="text" name="mailuid" placeholder="Usuario o Email...">
						<input type="password" name="pwd" placeholder="Contraseña">
						<button type="submit" name="login-submit">Ingresar</button>
					</form>';
						}

					?>
					
					<a href="signup.php">Registrarse</a>
					
				</div>
			</nav>
		</header>