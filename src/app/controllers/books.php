<?php

require_once 'repositories/LibroRepository.php';

try {
    $allBooks = (new LibroRepository())->getAll();
} catch (Exception $e) {
    $error = $e->getMessage();
}

require_once 'app/views/books.view.php'
?>