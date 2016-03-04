<?php

namespace RadHam\Reflect;

class FunctionReflection extends AbstractReflection
{
    protected $type = 'function';

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}
