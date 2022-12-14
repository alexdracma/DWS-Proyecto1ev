<?php

namespace biblioteca\app\repositories;

use biblioteca\app\entities\Prestamo;
use biblioteca\database\QueryBuilder;
use DateTime;

class PrestamoRepository extends QueryBuilder
{
    public function __construct($table = 'prestamo', $entity = Prestamo::class, $args = ['libro', 'usuario', 'fechaPrestamo', 'fechaMaxDevolucion', 'fechaDevolucion'])
    {
        parent::__construct($table, $entity, $args);
    }

    public function prestar($libro, $usuario)
    {
        $date = new DateTime();
        parent::save(new Prestamo($libro, $usuario, $date->format('Y-m-d')));
    }

    public function devolver($libro)
    {
        $date = (new DateTime())->format('Y-m-d');
        $sql = "UPDATE prestamo set fechaDevolucion = $date WHERE libro = $libro AND fechaDevolucion IS NULL";
        parent::voidExec($sql);
    }

    public function getNumOfPrestados()
    {
        return parent::getCount("fechaDevolucion IS NULL");
    }

    public function getNumOfUserPrestados($user)
    {
        return parent::getCount("usuario = '$user' AND fechaDevolucion IS NULL");
    }
}