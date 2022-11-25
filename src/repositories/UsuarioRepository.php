<?php

require_once 'entities/Usuario.php';

class UsuarioRepository extends QueryBuilder {
    public function __construct($table='usuario', $entity = 'Usuario', $args = ['email','fechaNacimiento','telefono','imagen','nombre','apellidos']) {
        parent::__construct($table, $entity, $args);
    }
}