<?php

require_once 'database/IEntity.php';

class Prestamo implements IEntity {
    
    private $libro;
    private $usuario;
    private $fechaPrestamo;
    private $fechaMaxDevolucion;
    private $fechaDevolucion;

    public function __construct($libro, $usuario, $fechaPrestamo, $fechaMaxDevolucion, $fechaDevolucion) {
        $this->libro = $libro;
        $this->usuario = $usuario;
        $this->fechaPrestamo = $fechaPrestamo;
        $this->fechaMaxDevolucion = $fechaMaxDevolucion;
        $this->fechaDevolucion = $fechaDevolucion;
    }

    public function getLibro() {
        return $this->libro;
    }

    public function setLibro($libro) {
        $this->libro = $libro;

        return $this;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;

        return $this;
    }

    public function getFechaPrestamo() {
        return $this->fechaPrestamo;
    }

    public function setFechaPrestamo($fechaPrestamo) {
        $this->fechaPrestamo = $fechaPrestamo;

        return $this;
    }

    public function getFechaMaxDevolucion() {
        return $this->fechaMaxDevolucion;
    }

    public function setFechaMaxDevolucion($fechaMaxDevolucion) {
        $this->fechaMaxDevolucion = $fechaMaxDevolucion;

        return $this;
    }

    public function getFechaDevolucion() {
        return $this->fechaDevolucion;
    }

    public function setFechaDevolucion($fechaDevolucion) {
        $this->fechaDevolucion = $fechaDevolucion;

        return $this;
    }

    public function toArray() {
        return [
            'libro' => $this->getLibro(),
            'usuario' => $this->getUsuario(),
            'fechaPrestamo' => $this->getFechaPrestamo(),
            'fechaMaxDevolucion' => $this->getFechaMaxDevolucion(),
            'fechaDevolucion' => $this->getFechaDevolucion()
        ];
    }
}