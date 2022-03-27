<?php

namespace SouthCoast\Pipeline;

use Error as InternalError;

class Error extends InternalError
{
    public $data;
    
    public function __construct(string $message, $data = null, int $code = 0, ?Throwable $previous = null)
    {
        $this->data = $data;
        parent::__construct($message, $code, $previous);
    }
}