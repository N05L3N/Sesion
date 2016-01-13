<meta charset = "UTF-8" />
<?PHP
	session_start();

	require("conectar.php");

	$usuario = $_POST['user'];
	$pass = crypt($_POST['pass'], "sesion");

	$res = mysql_query("SELECT * FROM usuarios WHERE user = '$usuario' AND pass = '$pass';");
		if ($row = mysql_fetch_array($res)) {

			$perfil = $row['perfil'];


			switch ($perfil) {
				case 'webmaster':
					$_SESSION['logeado'] = 1;
					$_SESSION['id'] = $row['id_usuario'];
					$_SESSION['nombre'] = $row['nombre'];
					echo "<script type='text/javascript'>window.location.href='../webmaster/index.php'</script>";
					break;

				case 'admin':
					$_SESSION['logeado'] = 1;
					$_SESSION['id'] = $row['id_usuario'];
					$_SESSION['nombre'] = $row['nombre'];
					echo "<script type='text/javascript'>window.location.href='../admin/index.php'</script>";
					break;

				case 'normal':
					$_SESSION['logeado'] = 1;
					$_SESSION['id'] = $row['id_usuario'];
					$_SESSION['nombre'] = $row['nombre'];
					echo "<script type='text/javascript'>window.location.href='../normal/index.php'</script>";
					break;

				case 'cajero':
					$_SESSION['logeado'] = 1;
					$_SESSION['id'] = $row['id_usuario'];
					$_SESSION['nombre'] = $row['nombre'];
					echo "<script type='text/javascript'>window.location.href='../cajero/index.php'</script>";
					break;

				case 'inactivo':
					$_SESSION['logeado'] = 1;
					$_SESSION['id'] = $row['id_usuario'];
					$_SESSION['nombre'] = $row['nombre'];
					echo "<script type='text/javascript'>window.location.href='../inactivo/index.php'</script>";
					break;
				
				
			}
		}
	else
			{
				//header('location: ../error/error.html');
				echo "<script>alert('Usuario no Registrado, Verifique sus Datos')</script>";
				echo "<script>location.href='../index.html'</script>";
			}

	
?>