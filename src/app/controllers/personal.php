<?php
try {
    $ur = new UsuarioRepository();
    $currentUserSource = $_COOKIE['currentUser'];
    $currentUser = $ur->getWhere("email = '$currentUserSource'");
    $prestamos = $ur->getPrestamos($currentUser);
    //print_r($prestamos);
} catch (Exception $e) {
    $error = $e->getMessage();
}
require_once 'app/views/personal.view.php';