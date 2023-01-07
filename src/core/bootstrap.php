<?php

require __DIR__ . '/../vendor/autoload.php';
use biblioteca\core\App;
use biblioteca\core\Router;
use biblioteca\app\utils\Mylog;
use biblioteca\app\utils\MyMail;
use biblioteca\app\utils\MyPdf;

$config = require __DIR__ . '/../app/config.php';
App::bind('config',$config);

$routes = require __DIR__ . '/../app/' . $config['routes']['filename'];
App::bind('routes',$routes);

$logger = MyLog::load(__DIR__ . '/../app/' . $config['logs']['filename']);
App::bind('logger',$logger);

$mailer = new MyMail();
App::bind('mailer', $mailer);

$pdf = new MyPdf();
App::bind('pdf', $pdf);

App::getConexion();

//set current user to admin
if (!isset($_COOKIE['currentUser'])) {
    setcookie('currentUser',"administrador@gmail.com",0);
    $_COOKIE['currentUser'] = "administrador@gmail.com";
}