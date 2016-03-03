<?php

namespace RadHam\Reflect;

class FunctionReflection extends AbstractReflection
{
    protected $type = 'function';

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = trim($name);
    }
}
