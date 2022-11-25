<?php

require_once 'core/App.php';
require_once 'core/Request.php';
require_once 'core/Router.php';
require_once 'exceptions/AppException.php';
require_once 'exceptions/DatabaseException.php';
require_once 'exceptions/FileException.php';
require_once 'exceptions/NotFoundException.php';
require_once 'database/QueryBuilder.php';
require_once 'repositories/LibroRepository.php';
require_once 'repositories/UsuarioRepository.php';
require_once 'repositories/PrestamoRepository.php';
require_once 'repositories/ColaboradorRepository.php';

$config = require 'app/config.php';
$routes = require 'app/routes.php';
App::bind('config',$config);
App::bind('routes',$routes);

App::getConexion();

//set current user to admin
if (!isset($_COOKIE['currentUser'])) {
    setcookie('currentUser',"administrador@gmail.com",0);
    $_COOKIE['currentUser'] = "administrador@gmail.com";
}