<?php

namespace biblioteca\app\entities;

use biblioteca\database\IEntity;

class Libro implements IEntity
{

    private $id;
    private $isbn13;
    private $nombre;
    private $autor;
    private $genero;

    public function __construct($id, $isbn13, $nombre, $autor, $genero)
    {
        $this->id = $id;
        $this->isbn13 = $isbn13;
        $this->nombre = $nombre;
        $this->autor = $autor;
        $this->genero = $genero;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getIsbn13()
    {
        return $this->isbn13;
    }

    public function setIsbn13($isbn13)
    {
        $this->isbn13 = $isbn13;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'isbn13' => $this->getIsbn13(),
            'nombre' => $this->getNombre(),
            'autor' => $this->getAutor(),
            'genero' => $this->getGenero()
        ];
    }
}