<?PHP
	$servidor = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'sesion';

	$conectar = mysql_connect($servidor, $user, $pass);

	if (!$conectar){
     echo "Error al conectar a la base de datos.";
} else {
    mysql_select_db($db);
}
return $conectar; 
?>