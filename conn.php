<?php

$host = 'localhost';
$db = 'muudb';
$user = 'root';
$password = '';

try {
	$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
	echo $e->getMessage();
	header('location: admin.php');
}
