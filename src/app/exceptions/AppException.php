<?php

namespace biblioteca\app\exceptions;

class AppException extends \Exception
{

    public function __construct($msg)
    {
        parent::__construct($msg);
    }
}