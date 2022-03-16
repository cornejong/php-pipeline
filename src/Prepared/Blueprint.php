<?php

namespace Southcoast\Pipeline\Prepared;

use SouthCoast\Pipeline\Abstracted\Blueprint as AbstractBlueprint;


class Blueprint extends AbstractBlueprint
{
    public function __construct(array $pipes = null)
    {
        if(!is_null($pipes)) {
            $this->pipes = $pipes;
        }
    }
}