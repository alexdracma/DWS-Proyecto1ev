<?php

require __DIR__ . '/../vendor/autoload.php';
use biblioteca\core\App;
use biblioteca\core\Router;
use biblioteca\app\utils\Mylog;
use biblioteca\app\utils\MyMail;

$config = require 'app/config.php';
App::bind('config',$config);

$routes = require 'app/routes.php';
App::bind('routes',$routes);

$logger = MyLog::load('logs/biblioteca.log');
App::bind('logger',$logger);

$mailer = new MyMail();
App::bind('mailer', $mailer);

App::getConexion();

//set current user to admin
if (!isset($_COOKIE['currentUser'])) {
    setcookie('currentUser',"administrador@gmail.com",0);
    $_COOKIE['currentUser'] = "administrador@gmail.com";
}