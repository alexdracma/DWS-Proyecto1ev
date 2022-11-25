<?php
class AppException extends exception {

    public function __construct($msg)
    {
        parent::__construct($msg);
    }
}