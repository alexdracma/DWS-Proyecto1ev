<?php

require_once 'core/App.php';
require_once 'core/Request.php';
require_once 'core/Router.php';
require_once 'exceptions/AppException.php';
require_once 'exceptions/DatabaseException.php';
require_once 'exceptions/FileException.php';
require_once 'exceptions/NotFoundException.php';

$config = require 'app/config.php';
$routes = require 'app/routes.php';
App::bind('config',$config);
App::bind('routes',$routes);

$conexion = App::getConexion();

//set current user to admin