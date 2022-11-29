<?php

require_once 'core/App.php';
require_once 'exceptions/DatabaseException.php';

abstract class QueryBuilder {

    private $connection;
    private $table;
    private $entity;
    private $constructor;

    public function __construct($table, $entity = '', $constructor = '') {
        $this->connection = App::getConexion();
        $this->table = $table;
        $this->entity = $entity;
        $this->constructor = $constructor;
    }

    public function getAll() {

        $sql = "SELECT * FROM $this->table";
        return $this->exec($sql);
    }

    public function getCount($where = true) {
        
        $sql = "SELECT COUNT(*) FROM $this->table WHERE $where";
        
        $pdoStatement = $this->connection->prepare($sql);

        if ($pdoStatement->execute() === false) {
            throw new DatabaseException("No se ha podido ejecutar la query solicitada");
        }

        return $pdoStatement->fetchColumn();
    }

    public function getWhere($where) {

        $sql = "SELECT * FROM $this->table WHERE $where";

        return $this->exec($sql);
    }

    public function save($entity) {

        try {
            $params = $entity->toArray();
            $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)',
                $this->table,
                implode(',', array_keys($params)),
                ':' . implode(', :', array_keys($params))
            );

            $statement = $this->connection->prepare($sql);
            $statement->execute($params);
        } catch (PDOException) {
            throw new DatabaseException("No se ha podido ejecutar la query solicitada");
        }
    }

    protected function transaction($executeQuerys) {
        try {
            $this->connection->beginTransaction();
            $executeQuerys();
            $this->connection->commit();
        } catch (PDOException $e) {
            $this->connection->rollback();
            throw new DatabaseException('No se ha podido realizar la query');
        }
    }

    protected function voidExec($sql):void {
        $pdoStatement = $this->connection->prepare($sql);

        if ($pdoStatement->execute() === false) {
            throw new DatabaseException("No se ha podido ejecutar la query solicitada");
        }
    }

    protected function exec($sql) {

        $pdoStatement = $this->connection->prepare($sql);

        if ($pdoStatement->execute() === false) {
            throw new DatabaseException("No se ha podido ejecutar la query solicitada");
        }

        $all = $pdoStatement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $this->entity, $this->constructor);

        if (count($all) === 1) {
            return $all[0];
        }

        return $all;
    }

    protected function fetchNoParams($sql) {
        $pdoStatement = $this->connection->prepare($sql);

        if ($pdoStatement->execute() === false) {
            throw new DatabaseException("No se ha podido ejecutar la query solicitada");
        }

        $all = $pdoStatement->fetchAll();

        return $all;
    }
}