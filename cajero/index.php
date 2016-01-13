<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Nelson ALejandro Soto Durán" />
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="shortcut icon" href="img/favicon/favicon.png" type="image/png"/>
		<title>Web Máster</title>
	</head>
	<body>
		<header>
			<ul>
				<li><a href="">Inicio</a></li>
				<li><a href="">Otra cosa</a></li>
				<li><a href="">Soy Cajero</a></li>
				<li>
					<?php
						session_start();
						if ($_SESSION['logeado']) {
							echo "Bienvenido  ". $_SESSION['nombre'];
						}else
						{
							header("Location: ../index.html");
							session_destroy();
							exit;
						}
					?>
				</li>
				<li><a href="../php/cerrarSesion.php">Cerrar sesión</a></li>
			</ul>
		</header>
	</body>
</html>