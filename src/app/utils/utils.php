<?php

namespace biblioteca\app\utils;

use biblioteca\core\App;

class Utils {
    public static function validateName($name):bool {
        if (!preg_match("/^\pL+(?>[- ']\pL+)*$/ui", $name)) {
            throw new Exception("Solo se permiten letras en el nombre");
        }
        return true;
    }

    public static function validateMail($mail): bool {
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Formato de correo no valido");
        }
        return true;
    }

    public static function validatePhone($phone): bool {
        if (!ctype_digit($phone)) {
            throw new Exception("El teléfono solo puede contener números");
        }
        if (strlen($phone) !== 9) {
            throw new Exception("El teléfono ha de tener 9 caracteres");
        }

        $firstNum = substr($phone,0,1);
        $allowedNums = ["6","7","8","9"];

        if (!in_array($firstNum, $allowedNums)) {
            throw new Exception("El teléfono ha de comenzar por 6,7,8 o 9");
        }
        return true;
    }

    public static function logInfo($message) {
        App::get('logger')->Add($message);
    }
}