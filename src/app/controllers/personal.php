<?php

namespace biblioteca\app\controllers;

use biblioteca\app\repositories\MensajeRepository;
use biblioteca\app\repositories\UsuarioRepository;
use biblioteca\app\utils\Utils;
use biblioteca\core\App;

try {
    $ur = App::getRepository(UsuarioRepository::class);
    $currentUserEmail = $_COOKIE['currentUser'];
    $currentUser = $ur->getWhere("email = '$currentUserEmail'");
    $prestamos = $ur->getPrestamos($currentUser);
    $mensajes = (App::getRepository(MensajeRepository::class))->getWhere("email = '$currentUserEmail'");
} catch (Exception $e) {
    $error = $e->getMessage();
    Utils::logInfo($e->getMessage());
} catch (Error $e) {
    $error = $e->getMessage();
    Utils::logInfo($e->getMessage());
}
require_once __DIR__ . '/../views/personal.view.php';