<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST')

require_once 'repositories/LibroRepository.php';
require_once 'repositories/UsuarioRepository.php';
require_once 'repositories/PrestamoRepository.php';
require_once 'repositories/ColaboradorRepository.php';

$config = require_once 'app/config.php';
App::bind('config',$config);

$numOfBooks = (new LibroRepository())->getNumberOf();
$numOfUsers = (new UsuarioRepository())->getNumberOf();
$numOfPrestamos = (new PrestamoRepository())->getNumOfPrestados();
$numOfColaboradores = (new ColaboradorRepository())->getNumberOf();

require_once 'views/index.view.php'
?>