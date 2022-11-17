<?php

require_once('core/app.php');

class QueryBuilder {

    private $connection;

    public function __construct() {
        $this->connection = App::getConexion();
    }

    public function getAll($table, $entity, $args) {

        $sql = "SELECT * FROM $table";
        $pdoStatement = $this->connection->prepare($sql);

        if ($pdoStatement->execute() === false) {
            throw new Database_exception("No se ha podido ejecutar la query solicitada");
        }

        $all = $pdoStatement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $entity, $args);

        return $all;
    }

}

?>