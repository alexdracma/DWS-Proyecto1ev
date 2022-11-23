<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST')

require_once 'repositories/LibroRepository.php';
require_once 'repositories/UsuarioRepository.php';
require_once 'repositories/PrestamoRepository.php';
require_once 'repositories/ColaboradorRepository.php';

$numOfBooks = (new LibroRepository())->getCount();
$numOfUsers = (new UsuarioRepository())->getCount();
$numOfPrestamos = (new PrestamoRepository())->getNumOfPrestados();
$numOfColaboradores = (new ColaboradorRepository())->getCount();

require_once 'app/views/index.view.php';
?>