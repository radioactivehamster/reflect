<?php

namespace RadHam\Reflect;

class FunctionReflection extends AbstractReflection
{
    /** @var string */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->type = 'function';
        $this->name = $name;
    }
}
