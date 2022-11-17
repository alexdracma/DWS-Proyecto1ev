<?php
class App_Exception extends exception {

    public function __construct($msg)
    {
        parent::__construct($msg);
    }
}