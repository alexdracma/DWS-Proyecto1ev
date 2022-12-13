<?php

namespace biblioteca\database;

use biblioteca\app\exceptions\DatabaseException;
use biblioteca\core\App;
use PDO;

class Conexion{
    public static function make(){ //funcion estática!!
        try{
            $config = App::get('config')['database'];
            $conexion = new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        }

        catch (PDOException){
            throw new DatabaseException("Error en la conexión con la base de datos");
        }

        return $conexion;
    }
}
?>