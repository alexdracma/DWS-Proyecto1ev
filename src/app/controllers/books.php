<?php

require_once 'repositories/LibroRepository.php';

$allBooks = (new LibroRepository())->getAll();

require_once 'app/views/books.view.php'
?>