<?php

namespace biblioteca\app\exceptions;

class NotFoundException extends \Exception
{
    public function __construct($msg)
    {
        parent::__construct($msg);
    }
}