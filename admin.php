<?php

	$dsn = "mysql:host=localhost; dbname=muudb; port:3306; charset=utf8mb4;";
	$username = "root";
	$pass = "";
	$opt = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

	try {
	  $dbase = new PDO($dsn, $username, $pass, $opt);
	}
	catch (PDOException $e)  {
	  $mensajemigrar = "Hey! Muu Database does not exist. Create it!";
	  // $mensajemigrar = $e->getMessage();
	}

	if (isset($_POST['crear-base'])){
		$dsn = "mysql:host=localhost";
		try {
			$dbase = new PDO($dsn, $username, $pass, $opt);
			if ($dbase) {
				$sql = "CREATE SCHEMA `muudb`;";
				$query = $dbase->prepare($sql);
				$query->execute();
				$mensajemigrar = "Muu Database successfully created!";
			}
		}
		catch (PDOException $e)  {
			// $mensajemigrar = $e->getMessage();
			$mensajemigrar = 'Problemas de permisos con la base de datos';
		}
	}

	if (isset($_POST['crear-tabla-usuarios'])){
		// global $dbase;

		$sql = "CREATE TABLE `muudb`.`usuarios` (
		  `id` INT NOT NULL AUTO_INCREMENT,
			`created_at` timestamp null default null,
      `updated_at` timestamp null default null,
		  `name` VARCHAR(45) NOT NULL,
		  `gender` VARCHAR(45) NOT NULL,
			`address` VARCHAR(45) NOT NULL,
			`telephone` INT(45) NOT NULL,
		  `email` VARCHAR(45) NOT NULL,
		  `pass` VARCHAR(100) NOT NULL,
			`avatar` VARCHAR(100) NOT NULL,
		  PRIMARY KEY (`id`),
		  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
		  UNIQUE INDEX `email_UNIQUE` (`email` ASC));";

		$query = $dbase->prepare($sql);
		$query->execute();
		$mensajemigrar = "Usuarios Table successfully created!";

    $data="INSERT INTO `usuarios`(`id`,`name`, `email`,`pass`)VALUES(1,'administrador', 'admin@hotmail.com','admin')";
		$query = $dbase->prepare($data);
		$query->execute();
		if(!$query){
    echo 'Error to inser Admin info';
    }else{
    echo 'Admin info was succesfully input';
    }
  }


  if (isset($_POST['crear-tabla-ice_creams'])){
		// global $dbase;

		$sql = "CREATE TABLE `muudb`.`ice_creams` (
      `id` int(10) not null auto_increment,
      `created_at` timestamp null default null,
      `updated_at` timestamp null default null,
      `flavour` varchar(50) not null,
      `calories` int(25) not null,
			`size_id` int(25) not null,
			`image` int(25) not null,
			`price` int(25) not null,
  	  PRIMARY KEY (`id`),
		  UNIQUE INDEX `id_UNIQUE` (`id` ASC));";

		$query = $dbase->prepare($sql);
		$query->execute();
		$mensajemigrar = "Ice_cream Table successfully created!";
	}


  if (isset($_POST['crear-tabla-sizes'])){
    // global $dbase;

    $sql = "CREATE TABLE `muudb`.`sizes` (
      `id` int(10) not null auto_increment,
      `created_at` timestamp null default null,
      `updated_at` timestamp null default null,
      `size` decimal (25) not null,
      PRIMARY KEY (`id`),
      UNIQUE INDEX `id_UNIQUE` (`id` ASC));";

    $query = $dbase->prepare($sql);
    $query->execute();
    $mensajemigrar = "Sizes Table successfully created!";
  }


		// $mensajemigrar = "Migración realizada con éxito.";
		//header('Location: index.php'); exit;



 ?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<title>Crear DB Muu==> MySql</title>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="css/master.css">
	</head>

	<body>

		<div class="fondo_migrar">
			<div class="mensaje_migrar">
				<div class="mensajito_migrar">
					<p><?= isset($mensajemigrar) ? $mensajemigrar : NULL?></p>
				</div>

			</div>
			<h2>Follow steps below to create MUU database and tables</h2>
			<form class="migrar_datos" method="post">
				<li>Step 1</li>
				<input type="submit" name="crear-base" value="¡Create Database!">
				<br>
				<br>
				<li>Step 2</li>
				<input type="submit" name="crear-tabla-usuarios" value="¡Create  Usuarios Table!">
				<br>
				<br>
				<li>Step 3</li>
				<input type="submit" name="crear-tabla-ice_creams" value="¡Create  ice_cream Table!">
				<br>
				<br>
				<li>Step 4</li>
			  <input type="submit" name="crear-tabla-sizes" value="¡Create  Sizes Table!">
				<br>
				<br>
				<li>You already did all these stuff?</li>
				<br>
			  <a href="index.php">Yeah, take to the Muu Webpage!</a>
			</form>

		</div>

	</body>

	</html>
