<?php
try {
    $ur = new UsuarioRepository();
    $currentUserEmail = $_COOKIE['currentUser'];
    $currentUser = $ur->getWhere("email = '$currentUserEmail'");
    $prestamos = $ur->getPrestamos($currentUser);
    $mensajes = (new MensajeRepository())->getWhere("email = '$currentUserEmail'");
} catch (Exception $e) {
    $error = $e->getMessage();
} catch (Error $e) {
    $error = $e->getMessage();
}
require_once 'app/views/personal.view.php';