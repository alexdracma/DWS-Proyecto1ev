<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST')

$numOfBooks = (new LibroRepository())->getCount();
$numOfUsers = (new UsuarioRepository())->getCount();
$numOfPrestamos = (new PrestamoRepository())->getNumOfPrestados();
$numOfColaboradores = (new ColaboradorRepository())->getCount();

$currentUserSource = $_COOKIE['currentUser'];
$currentUser = (new UsuarioRepository())->getWhere("email = '$currentUserSource'");
$currentUser = $currentUser[0];

require_once 'app/views/index.view.php';