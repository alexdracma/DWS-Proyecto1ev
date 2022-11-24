<?php

try {
    require 'core/bootstrap.php';
    require Router::load();
} catch (Error $e) {
}

// $router = new Router();
// require 'app/routes.php';
// require $router->redirect(Request::uri());

//preguntar alejandro que le parece como he corregido las urls amigables, la clase router