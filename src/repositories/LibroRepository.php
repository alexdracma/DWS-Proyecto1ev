<?php

require_once 'database/QueryBuilder.php';

class LibroRepository extends QueryBuilder {
    public function __construct($table='libro', $entity = 'Libro', $args = ['id','isbn13','nombre','autor','genero']) {
        parent::__construct($table, $entity, $args);
    }

    //crear función que mire si el libro esta prestado
}