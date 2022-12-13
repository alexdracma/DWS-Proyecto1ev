<?php

namespace biblioteca\app\entities;

use biblioteca\database\IEntity;

class Mensaje implements IEntity
{

    private $nombreCompleto;
    private $email;
    private $telefono;
    private $asunto;
    private $mensaje;

    public function __construct($nombreCompleto, $email, $telefono, $asunto, $mensaje)
    {
        $this->nombreCompleto = $nombreCompleto;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->asunto = $asunto;
        $this->mensaje = $mensaje;
    }

    public function getNombreCompleto()
    {
        return $this->nombreCompleto;
    }

    public function setNombreCompleto($nombreCompleto)
    {
        $this->nombreCompleto = $nombreCompleto;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getAsunto()
    {
        return $this->asunto;
    }

    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;
    }

    public function getMensaje()
    {
        return $this->mensaje;
    }

    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    public function toArray()
    {
        return [
            'nombreCompleto' => $this->getNombreCompleto(),
            'email' => $this->getEmail(),
            'telefono' => $this->getTelefono(),
            'asunto' => $this->getAsunto(),
            'mensaje' => $this->getMensaje()
        ];
    }
}