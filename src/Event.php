<?php

namespace SouthCoast\Pipeline;

use \Error;
use SouthCoast\Pipeline\MagicObjectAccess;

class Event
{
    use MagicObjectAccess;
    
    /**
     * The event type
     *
     * @var string
     */
    public $type = null;
    
    /**
     * The status of the pipeline
     *
     * @var boolean
     */     
    public $status = true;

    /**
     * An array of errors that occurred in the pipeline
     *
     * @var array
     */
    public $errors = [];
    
    /**
     * The shared data accessible to the pipes
     *
     * @var array
     */
    public $_data = [];

    /**
     * The reference to the data container for the MagicObjectAccess trait
     *
     * @var string
     */
    protected $containerPointer = "_data";

    public function error(Error $error)
    {
        $this->errors[] = $error;
    }
    
    public function errors()
    {
        return $this->errors;
    }

    public function hasErrors() : bool
    {
        return !empty($this->errors);
    }
}
