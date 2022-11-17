<?php

require_once 'exceptions/app_exception.php';

class App {

    private static $container = [];

    public static function bind($key, $value) {
        static::$container[$key] = $value;
    }

    public static function get($key) {
        if (!array_key_exists($key, static::$container)) {
            throw new App_Exception("No se ha encontrado la clave $key en el contenedor");
        }
    }

    public static function getConexion() {
        if(! array_key_exists('conexion', static::$container)) {
            require_once 'database/conexion.php';
            static::$container['conexion'] = Conexion::make();
        }

        return static::$container['conexion'];
    }
}