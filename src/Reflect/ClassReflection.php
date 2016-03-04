<?php

namespace RadHam\Reflect;

class ClassReflection extends AbstractReflection
{
    protected $type = 'class';

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}
