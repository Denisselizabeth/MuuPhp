<?php
namespace DB;

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
			$columnas .= "$columna,";
			$placeholders .= ":$columna,";
		}

		$columnas = trim($columnas, ',');
		$placeholders = trim($placeholders, ',');

		$stmt = $this->pdo->prepare("INSERT INTO $model->entidad ($columnas) VALUES ($placeholders)");
		$stmt->execute($data);
  }

  public function update($data, $model)
  {
  	$set = '';

  	foreach ($data as $columna => $valor) {
  		$set .= "$columna=:$columna,";
  	}

  	$set = trim($set, ',');

  	$stmt = $this->pdo->prepare("UPDATE {$model->entidad} SET $set WHERE id = :id");
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

  	$stmt = $this->pdo->prepare("SELECT {$model->entidad} SET $set WHERE id = :id");
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

  	$stmt = $this->pdo->prepare("DELETE {$model->entidad} SET $set WHERE id = :id");
  	$data['id'] = $model->id;
  	$stmt->execute($data);
  }
}
