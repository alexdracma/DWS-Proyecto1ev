<?php

require 'exceptions/database_exception.php';

class Conexion{
    public static function make(){ //funcion estática!!
        try{
            $opciones = [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_PERSISTENT =>true
            ];
            
            $conexion = new PDO('mysql:host=localhost;dbname=alejandria','root','',$opciones);
        }
        
        catch (PDOException){ //las excepciones se muestran de manera automática
            //die($PDOExcepetion->getMessage());
            throw new database_exception("Error en la conexión con la base de datos");
        }

        return $conexion;
    }
}
//Conexion::make();
?>