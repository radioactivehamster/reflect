<?php

namespace RadHam\Reflect;

use JsonSerializable;
use stdClass;

abstract class AbstractReflection implements JsonSerializable
{
    /** @var string */
    protected $type;

    /**
     * @param string $name
     */
    abstract public function __construct($name);

    /**
     * @param  string $property
     * @return mixed
     */
    public function __get($property)
    {
        $properties = get_class_vars(static::class);

        if (array_key_exists($property, $properties)) {
            return $this->{$property};
        }
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize()
    {
        $json       = new stdClass;
        $properties = array_keys(get_class_vars(static::class));

        foreach ($properties as $property) {
            $json->{$property} = $this->{$property};
        }

        return $json;
    }

    /**
     * @return string
     */
    public function toJson()
    {
        return json_encode($this);
    }
}
