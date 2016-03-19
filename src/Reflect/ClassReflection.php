<?php

namespace RadHam\Reflect;

class ClassReflection extends AbstractReflection
{
    /** @var string */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->type = 'class';
    }
}
