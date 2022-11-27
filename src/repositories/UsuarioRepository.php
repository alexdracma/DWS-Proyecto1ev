<?php

require_once 'entities/Usuario.php';

class UsuarioRepository extends QueryBuilder {
    public function __construct($table='usuario', $entity = 'Usuario', $args = ['email','fechaNacimiento','telefono','imagen','nombre','apellidos']) {
        parent::__construct($table, $entity, $args);
    }

    public function getPrestamos($usuario):array {
        $email = $usuario->getEmail();
        $sql = "SELECT l.id, l.nombre, p.fechaPrestamo, p.fechaMaxDevolucion, p.fechaDevolucion 
                FROM prestamo AS p, libro AS l WHERE p.libro = l.id AND p.usuario = '$email'; ";

        return parent::execNoParams($sql);
    }
}