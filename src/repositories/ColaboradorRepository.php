<?php

require_once 'entities/Colaborador.php';

class ColaboradorRepository extends QueryBuilder {
    public function __construct($table='colaborador', $entity = 'Colaborador', $args = ['nombre','descripcion','imagen']) {
        parent::__construct($table, $entity, $args);
    }
}