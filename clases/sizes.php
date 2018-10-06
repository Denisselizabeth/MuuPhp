<?php

  class sizes {

    public static $quantity;
    public static $AllSizes;

    public static function getAllsizes() {

      //Me fijo si la lista había sido obtenida previamente, para no hacerlo de nuevo.
      if (!isset(self::$AllSizes)) {

        //Me conecto a la base de data
        require_once("db_connection.php");

        //Ejecuto la lectura
        $CadenaDeBusqueda = "SELECT * FROM MuuDB.sizes";
        $ConsultaALaBase = $db->prepare($CadenaDeBusqueda);
        $ConsultaALaBase->execute();

        //Declaro el array de objetos User
        $UsersADevolver=array();

        //INCOMPLETO
      }
    }
  }
?>
