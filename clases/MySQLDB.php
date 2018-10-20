<?php
namespace Database;

require_once ('DB.php');

use Database\DB;
use \PDO;

class MySQLDB extends DB
{
  private $pdo;

  public function __construct()
	{
		$host = 'localhost';
		$db = 'muudb';
		$user = 'root';
		$password = '';

		try {
			$this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

  public function insert($data, $model)
  {
    $columnas = '';
		$placeholders = '';

		foreach ($data as $columna => $valor) {
      // $columnas = $columnas . "$columna,";
      // $columnas = 'title, ';
      // $columnas = 'title, description, ';
      $columnas .= "$columna,";
			$placeholders .= ":$columna,";
		}

		$columnas = trim($columnas, ',');
		$placeholders = trim($placeholders, ',');

    // INSERT INTO ice_creams (size, flavour) VALUES (:size, :flavour)
		$stmt = $this->pdo->prepare("INSERT INTO $model->table ($columnas) VALUES ($placeholders)");
		$stmt->execute($data);
  }

  public function update($data, $model)
  {
  	$set = '';

  	foreach ($data as $columna => $valor) {
  		$set .= "$columna=:$columna,";
  	}

  	$set = trim($set, ',');

    // MySQL "UPDATE ice_creams SET size = '1' WHERE id = 32"
    // PDO "UPDATE ice_creams SET size = '1' WHERE id = :id"
    // $data['id'] = 32;
  	$stmt = $this->pdo->prepare("UPDATE {$model->table} SET $set WHERE id = :id");
  	$data['id'] = $model->id;

  	$stmt->execute($data);
  }

  public function select($data, $model)
  {
    $set = '';

  	foreach ($data as $columna => $valor) {
  		$set .= "$columna=:$columna,";
  	}

  	$set = trim($set, ',');

  	$stmt = $this->pdo->prepare("SELECT {$model->table} SET $set WHERE id = :id");
  	$data['id'] = $model->id;
  	$stmt->execute($data);
  }

  public function delete($data, $model)
  {
    $set = '';

  	foreach ($data as $columna => $valor) {
  		$set .= "$columna=:$columna,";
  	}

  	$set = trim($set, ',');

  	$stmt = $this->pdo->prepare("DELETE {$model->table} SET $set WHERE id = :id");
  	$data['id'] = $model->id;
  	$stmt->execute($data);
  }
}
