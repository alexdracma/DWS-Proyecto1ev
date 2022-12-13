<?php

namespace biblioteca\app\exceptions;

class DatabaseException extends \Exception
{

    public function __construct($msg)
    {
        parent::__construct($msg);
    }
}