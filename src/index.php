<?php

try {
    require 'core/bootstrap.php';
    require Router::load();
} catch (Exception $e) {
    die($e->getMessage());
}