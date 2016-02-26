<?php

namespace RadHam\Reflect;

use Reflector;

class ReflectionConstant implements Reflector
{
    public $class;

    public $name;

    public function __construct($name)
    {
        if (str_contains($name, '::')) {
            list($this->class, $this->name) = explode('::', string);

            return;
        }

        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getValue()
    {
        return constant($this->name);
    }

    /**
     * Factory method.
     *
     * @param string $name
     * @return ReflectionConstant
     */
    public static function export($name)
    {
        return new self($name);
    }
}
