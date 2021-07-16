<?php
namespace Exceptions;

use InvalidArgumentException;

class MathException extends InvalidArgumentException{

    protected $message = "Les paramètres attendus doivent être des nombres";
    protected $code = 1;


    public function __construct()
    {
        parent::__construct($this->message, $this->code);
    }

    public function __toString()
    {
        return $this->message;
    }
}