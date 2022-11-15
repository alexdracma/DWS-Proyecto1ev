<?php

class QueryBuilder {

    private $conection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    public function getAll($table, $entity, $args) {

        $sql = "SELECT * FROM '$table'";
        $pdoStatement = $this->conection->prepare($sql);

        if ($pdoStatement->execute() === false) {
            throw new Exception("No se ha podido ejecutar la query solicitada");
        }

        $all = $pdoStatement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $entity, $args);

        return $all;
    }
    
}

?>