<?php

namespace biblioteca\app\exceptions;

class FileException extends \Exception
{

    public function __construct($msg)
    {
        parent::__construct($msg);
    }
}