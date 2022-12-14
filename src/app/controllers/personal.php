<?php

namespace biblioteca\app\controllers;

use biblioteca\app\repositories\MensajeRepository;
use biblioteca\app\repositories\UsuarioRepository;
use biblioteca\app\utils\Utils;

try {
    $ur = new UsuarioRepository();
    $currentUserEmail = $_COOKIE['currentUser'];
    $currentUser = $ur->getWhere("email = '$currentUserEmail'");
    $prestamos = $ur->getPrestamos($currentUser);
    $mensajes = (new MensajeRepository())->getWhere("email = '$currentUserEmail'");
} catch (Exception $e) {
    $error = $e->getMessage();
    Utils::logInfo($e->getMessage());
} catch (Error $e) {
    $error = $e->getMessage();
    Utils::logInfo($e->getMessage());
}
require_once 'app/views/personal.view.php';