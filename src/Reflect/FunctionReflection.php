<?php

namespace RadHam\Reflect;

class FunctionReflection extends AbstractReflection
{
    protected $_type = 'function';

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->_name = trim($name);
    }

    public function __get($property)
    {
        if ($property == 'name') {
            return $this->_name;
        }

        if ($property == 'type') {
            return $this->_type;
        }
    }
}
