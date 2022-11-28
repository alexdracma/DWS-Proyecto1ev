<?php

require_once 'entities/Libro.php';

class LibroRepository extends QueryBuilder {
    public function __construct($table='libro', $entity = 'Libro', $args = ['id','isbn13','nombre','autor','genero']) {
        parent::__construct($table, $entity, $args);
    }

    public function isPrestado($libro):bool {
        $pr = new PrestamoRepository();
        $id = $libro->getId();

        $registros = $pr->getWhere("libro = $id AND fechaDevolucion IS NULL");

        //si es de tipo array es que no ha encontrado ninguno
        if (gettype($registros) === "array") {
            return false;
        }
        return true;
    }

    public function getLibres() {
        $sql = "SELECT * FROM libro WHERE id NOT IN (SELECT libro FROM prestamo where fechaDevolucion is null);";
        return parent::exec($sql);
    }

    public function getPrestados() {
        $sql = "SELECT * FROM libro WHERE id IN (SELECT libro FROM prestamo where fechaDevolucion is null);";
        return parent::exec($sql);
    }
}