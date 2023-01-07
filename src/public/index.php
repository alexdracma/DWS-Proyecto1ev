<?php

use biblioteca\core\Router;

try {
    require __DIR__ . '/../core/bootstrap.php';
    require Router::load();
} catch (Exception $e) {
    $error = $e->getMessage();
    require __DIR__ . '/../app/controllers/error.php';
}