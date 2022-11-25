<?php

try {
    require 'core/bootstrap.php';
    require Router::load();
} catch (Exception $e) {
    $error = $e->getMessage();
    require 'app/controllers/error.php';
}