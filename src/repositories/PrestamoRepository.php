<?php

require_once 'database/QueryBuilder.php';

class PrestamoRepository extends QueryBuilder {
    public function __construct($table='prestamo', $entity = 'Prestamo', $args = ['libro','usuario','fechaPrestamo','fechaMaxDevolucion','fechaDevolucion']) {
        parent::__construct($table, $entity, $args);
    }

    public function getNumOfPrestados() {
        return parent::getNumberOf("fechaDevolucion IS NULL");
    }
}