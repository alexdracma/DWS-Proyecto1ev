<?php

namespace biblioteca\app\controllers;

use biblioteca\app\repositories\LibroRepository;
use biblioteca\app\utils\Utils;
use biblioteca\core\App;

try {
    $allBooks = (App::getRepository(LibroRepository::class))->getAll();
} catch (Exception $e) {
    $error = $e->getMessage();
    Utils::logInfo($e->getMessage());
} catch (Error $e) {
    $error = $e->getMessage();
    Utils::logInfo($e->getMessage());
}

require_once __DIR__ . '/../views/books.view.php'
?>