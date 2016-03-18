<?php

namespace RadHam\Reflect;

class StringReflection extends AbstractReflection
{
    /** @var string */
    protected $value;

    /**
     * @param string $value
     */
    public function __construct($value)
    {
        $this->type  = 'string';
        $this->value = $value;
    }
}
