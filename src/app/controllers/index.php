<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST')

try {
    $numOfBooks = (new LibroRepository())->getCount();
    $numOfUsers = (new UsuarioRepository())->getCount();
    $numOfPrestamos = (new PrestamoRepository())->getNumOfPrestados();
    $numOfColaboradores = (new ColaboradorRepository())->getCount();

    $currentUserSource = $_COOKIE['currentUser'];
    $currentUser = (new UsuarioRepository())->getWhere("email = '$currentUserSource'");
    $currentUser = $currentUser[0];
} catch (Exception $e) {
    $error = $e->getMessage();
}

require_once 'app/views/index.view.php';