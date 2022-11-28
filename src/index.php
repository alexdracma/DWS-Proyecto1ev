<?php

try {
    require 'core/bootstrap.php';
    require Router::load();
} catch (Exception $e) {
    $error = $e->getMessage();
    require 'app/controllers/error.php';
}

//TODO Requisitos
//FIXME Requisitos
//-Ver que pongo en la pagina de inicio
//-hacer popup de mensajes
//-cambiar ancho del div de mensajes