<?php

  class users extends modelo  {

    public static $quantity;
    public static $allUsers;

    public static function getAllusers() {

      //Me fijo si la lista había sido obtenida previamente, para no hacerlo de nuevo.
      if (!isset(self::$allUsers)) {

        //Me conecto a la base de data
        require_once("MySQLDB.php");

        //Ejecuto la lectura
        $CadenaDeBusqueda = "SELECT * FROM muudb.users";
        $ConsultaALaBase = $db->prepare($CadenaDeBusqueda);
        $ConsultaALaBase->execute();

        //Declaro el array de objetos User
        $UsersADevolver=array();
        var_dump ($UsersADevolver);

        //INCOMPLETO
      }
    }
  }
?>
