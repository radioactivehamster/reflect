<?php

namespace RadHam\Reflect;

use JsonSerializable;

abstract class AbstractReflection
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $type;

    /**
     * @param  string $name
     * @return void
     */
    abstract public function __construct($name);

    /**
     * @param  string $property
     * @return mixed
     */
    public function __get($property)
    {
        $properties = get_class_vars(__CLASS__);

        if (in_array($property, $properties)) {
            return $this->$property;
        }
    }
}
