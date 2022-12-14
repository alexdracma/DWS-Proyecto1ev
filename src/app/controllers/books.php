<?php

namespace biblioteca\app\controllers;

use biblioteca\app\repositories\LibroRepository;
use biblioteca\app\utils\Utils;

try {
    $allBooks = (new LibroRepository())->getAll();
} catch (Exception $e) {
    $error = $e->getMessage();
    Utils::logInfo($e->getMessage());
} catch (Error $e) {
    $error = $e->getMessage();
    Utils::logInfo($e->getMessage());
}

require_once 'app/views/books.view.php'
?>