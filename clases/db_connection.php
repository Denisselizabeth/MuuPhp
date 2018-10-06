<?php
	$ruta = 'mysql:host=localhost; dbname=muudb';
	$usuario = 'root';
	$password = '';
	$opciones = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

	try {
		$db = new PDO($ruta, $usuario, $password, $opciones);
  }
	catch( PDOException $Exception ) {
		echo $Exception->getMessage();
		header('location: admin.php');
	}
?>
