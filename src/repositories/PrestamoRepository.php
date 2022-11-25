<?php

require_once 'entities/Prestamo.php';

class PrestamoRepository extends QueryBuilder {
    public function __construct($table='prestamo', $entity = 'Prestamo', $args = ['libro','usuario','fechaPrestamo','fechaMaxDevolucion','fechaDevolucion']) {
        parent::__construct($table, $entity, $args);
    }

    public function getNumOfPrestados() {
        return parent::getCount("fechaDevolucion IS NULL");
    }
}