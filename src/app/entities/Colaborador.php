<?php

namespace biblioteca\app\entities;

use biblioteca\database\IEntity;

class Colaborador implements IEntity
{
    private $nombre;
    private $descripcion;
    private $imagen;
    const RUTA_IMAGEN = 'assets/images/colaboradores/';

    public function __construct($nombre, $descripcion, $imagen)
    {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
    }

    public function getUrlImagen()
    {
        return self::RUTA_IMAGEN . $this->imagen;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getNombreArchivo()
    {
        return $this->imagen;
    }

    public function setNombreArchivo($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function toArray()
    {
        return ['nombre' => $this->getNombre(),
            'descripcion' => $this->getDescripcion(),
            'imagen' => $this->imagen];
    }
}