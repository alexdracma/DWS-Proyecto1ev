<?php

namespace biblioteca\app\repositories;

use biblioteca\app\entities\Mensaje;
use biblioteca\database\QueryBuilder;

class MensajeRepository extends QueryBuilder
{
    public function __construct($table = 'mensaje', $entity = Mensaje::class, $args = ['nombreCompleto', 'email', 'telefono', 'asunto', 'mensaje'])
    {
        parent::__construct($table, $entity, $args);
    }
}