<?php

namespace biblioteca\app\entities;

class Direccion implements \biblioteca\database\IEntity
{

    private $usuario;
    private $direccion;
    private $ciudad;
    private $provincia;
    private $cp;
    private $adicional;

    /**
     * @param $usuario
     * @param $direccion
     * @param $ciudad
     * @param $provincia
     * @param $cp
     * @param $adicional
     */
    public function __construct($usuario, $direccion, $ciudad, $provincia, $cp, $adicional)
    {
        $this->usuario = $usuario;
        $this->direccion = $direccion;
        $this->ciudad = $ciudad;
        $this->provincia = $provincia;
        $this->cp = $cp;
        $this->adicional = $adicional;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario): void
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion): void
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * @param mixed $ciudad
     */
    public function setCiudad($ciudad): void
    {
        $this->ciudad = $ciudad;
    }

    /**
     * @return mixed
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * @param mixed $provincia
     */
    public function setProvincia($provincia): void
    {
        $this->provincia = $provincia;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp): void
    {
        $this->cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getAdicional()
    {
        return $this->adicional;
    }

    /**
     * @param mixed $adicional
     */
    public function setAdicional($adicional): void
    {
        $this->adicional = $adicional;
    }

    public function toArray()
    {
        return [
            'usuario' => $this->getUsuario(),
            'direccion' => $this->getDireccion(),
            'ciudad' => $this->getCiudad(),
            'provincia' => $this->getProvincia(),
            'cp' => $this->getCp(),
            'adicional' => $this->getAdicional()
        ];
    }
}