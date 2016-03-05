<?php

namespace RadHam\Reflect;

class ConstantReflection extends AbstractReflection
{
    protected $type = 'constant';

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}
