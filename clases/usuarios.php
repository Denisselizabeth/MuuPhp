<?php

  class users  {

    public static $quantity;
    public static $allUsers;

    public static function getAllusers() {

      //Me fijo si la lista había sido obtenida previamente, para no hacerlo de nuevo.
      if (!isset(self::$allUsers)) {

        //Me conecto a la base de data
        require_once("db_connection.php");

        //Ejecuto la lectura
        $CadenaDeBusqueda = "SELECT * FROM MuuDB.usuarios";
        $ConsultaALaBase = $db->prepare($CadenaDeBusqueda);
        $ConsultaALaBase->execute();

        //Declaro el array de objetos User
        $UsersADevolver=array();

        //INCOMPLETO
      }
    }
  }
?>
