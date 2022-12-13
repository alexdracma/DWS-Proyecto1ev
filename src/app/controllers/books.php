<?php

namespace biblioteca\app\controllers;

use biblioteca\app\repositories\LibroRepository;

try {
    $allBooks = (new LibroRepository())->getAll();
} catch (Exception $e) {
    $error = $e->getMessage();
} catch (Error $e) {
    $error = $e->getMessage();
}

require_once 'app/views/books.view.php'
?>