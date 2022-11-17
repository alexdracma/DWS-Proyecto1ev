<?php

require_once 'exceptions/database_exception.php';
require_once 'core/app.php';

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
            throw new database_exception("Error en la conexión con la base de datos");
        }

        return $conexion;
    }
}
?>