<?php

try {
    require 'core/bootstrap.php';

    

    require Router::load();
} catch (Error $e) {
    die($e->getMessage());
}