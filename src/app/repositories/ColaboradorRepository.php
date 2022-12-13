<?php

namespace biblioteca\app\repositories;

use biblioteca\app\entities\Colaborador;
use biblioteca\database\QueryBuilder;

class ColaboradorRepository extends QueryBuilder
{
    public function __construct($table = 'colaborador', $entity = Colaborador::class, $args = ['nombre', 'descripcion', 'imagen'])
    {
        parent::__construct($table, $entity, $args);
    }
}