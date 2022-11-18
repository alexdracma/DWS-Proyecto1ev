<?php

require_once 'database/QueryBuilder.php';

class MensajeRepository extends QueryBuilder {
    public function __construct($table='mensaje', $entity = 'Mensaje', $args = ['nombreCompleto','email','telefono','asunto','mensaje']) {
        parent::__construct($table, $entity, $args);
    }
}