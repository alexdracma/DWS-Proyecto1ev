<?php

require_once 'core/App.php';
require_once 'exceptions/DatabaseException.php';

class QueryBuilder {

    private $connection;
    private $table;
    private $entity;
    private $constructor;

    public function __construct($table, $entity, $constructor) {
        $this->connection = App::getConexion();
        $this->table = $table;
        $this->entity = $entity;
        $this->constructor = $constructor;
    }

    public function getAll() {

        $sql = "SELECT * FROM $this->table";
        $pdoStatement = $this->connection->prepare($sql);

        if ($pdoStatement->execute() === false) {
            throw new DatabaseException("No se ha podido ejecutar la query solicitada");
        }

        $all = $pdoStatement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $this->entity, $this->constructor);

        return $all;
    }

}

?>