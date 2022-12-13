<?php

namespace biblioteca\core;

use biblioteca\app\exceptions\AppException;
use biblioteca\database\Conexion;

class App {

    private static $container = [];

    public static function bind($key, $value) {
        static::$container[$key] = $value;
    }

    public static function get($key) {
        if (!array_key_exists($key, static::$container)) {
            throw new AppException("No se ha encontrado la clave $key en el contenedor");
        }
        return static::$container[$key];
    }

    public static function getConexion() {
        if(! array_key_exists('conexion', static::$container)) {
            require_once 'database/conexion.php';
            static::$container['conexion'] = Conexion::make();
        }

        return static::$container['conexion'];
    }
}