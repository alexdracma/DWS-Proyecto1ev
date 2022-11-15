<?php
class database_exception extends exception {

    public function __construct($msg)
    {
        parent::__construct($msg);
    }
}