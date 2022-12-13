<?php

namespace biblioteca\app\repositories;

use biblioteca\app\entities\Libro;
use biblioteca\database\QueryBuilder;
//use biblioteca\app\repositories\PrestamoRepository;

class LibroRepository extends QueryBuilder
{
    public function __construct($table = 'libro', $entity = Libro::class, $args = ['id', 'isbn13', 'nombre', 'autor', 'genero'])
    {
        parent::__construct($table, $entity, $args);
    }

    public function isPrestado($libro): bool
    {
        $pr = new PrestamoRepository();
        $id = $libro->getId();

        $registros = $pr->getWhere("libro = $id AND fechaDevolucion IS NULL");

        //si es de tipo array es que no ha encontrado ninguno
        if (gettype($registros) === "array") {
            return false;
        }
        return true;
    }

    public function getLibres()
    {
        $sql = "SELECT * FROM libro WHERE id NOT IN (SELECT libro FROM prestamo where fechaDevolucion is null);";
        return parent::exec($sql);
    }

    public function getPrestados()
    {
        $sql = "SELECT * FROM libro WHERE id IN (SELECT libro FROM prestamo where fechaDevolucion is null);";
        return parent::exec($sql);
    }
}