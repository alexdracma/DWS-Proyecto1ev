<?php

namespace biblioteca\app\repositories;

use biblioteca\app\entities\Usuario;
use biblioteca\database\QueryBuilder;

class UsuarioRepository extends QueryBuilder
{
    public function __construct($table = 'usuario', $entity = Usuario::class, $args = ['email', 'fechaNacimiento', 'telefono', 'imagen', 'nombre', 'apellidos'])
    {
        parent::__construct($table, $entity, $args);
    }

    public function userExists($email): bool
    {
        $res = parent::getWhere("email = '$email'");
        if (empty($res)) {
            return false;
        }
        return true;
    }

    public function getPrestamos($usuario): array
    {
        $email = $usuario->getEmail();
        $sql = "SELECT l.id, l.nombre, p.fechaPrestamo, p.fechaMaxDevolucion, p.fechaDevolucion 
                FROM prestamo AS p, libro AS l WHERE p.libro = l.id AND p.usuario = '$email'; ";

        return parent::fetchNoParams($sql);
    }
}