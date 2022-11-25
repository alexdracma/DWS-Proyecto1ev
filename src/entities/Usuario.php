<?php

require_once 'database/IEntity.php';

class Usuario implements IEntity {

    private $email;
    private $nombre;
    private $apellidos;
    private $fechaNacimiento;
    private $telefono;
    private $imagen;
    const RUTA_IMAGEN = 'assets/images/usuarios/';

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }
    public function getUrlImagen() {
        return self::RUTA_IMAGEN . $this->imagen;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getNombreCompleto() {
        return $this->nombre . " " . $this->apellidos;
    }

    public function setNombreCompleto($nombreCompleto) {
        $this->nombreCompleto = $nombreCompleto;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function toArray() {
        return [
            'email' => $this->getEmail(),
            'nombre' => $this->getNombre(),
            'apellidos' => $this->getApellidos(),
            'fechaNacimiento' => $this->getFechaNacimiento(),
            'telefono' => $this->getTelefono(),
            'imagen' => $this->getImagen()
        ];
    }
}