<?php

require_once 'database/QueryBuilder.php';

class UsuarioRepository extends QueryBuilder {
    public function __construct($table='usuario', $entity = 'Usuario', $args = ['email','nombreCompleto','fechaNacimiento','telefono','imagen']) {
        parent::__construct($table, $entity, $args);
    }
}