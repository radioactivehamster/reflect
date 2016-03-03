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
    abstract public function __construct(string $name);

    /**
     * @param  string $property
     * @return mixed
     */
    public function __get(string $property)
    {
        $properties = get_class_vars(__CLASS__);

        if (array_key_exists($property, $properties)) {
            return $this->{$property};
        }
    }
}
