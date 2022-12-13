<?php

require __DIR__ . '/../vendor/autoload.php';
use biblioteca\core\App;
use biblioteca\core\Router;
use biblioteca\app\utils\Mylog;

$config = require 'app/config.php';
$routes = require 'app/routes.php';
$logger = MyLog::load('logs/biblioteca.log');
App::bind('config',$config);
App::bind('routes',$routes);
App::bind('logger',$logger);

App::getConexion();

//set current user to admin
if (!isset($_COOKIE['currentUser'])) {
    setcookie('currentUser',"administrador@gmail.com",0);
    $_COOKIE['currentUser'] = "administrador@gmail.com";
}