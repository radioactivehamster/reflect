<?php

namespace RadHam\Reflect;

use JsonSerializable;
use stdClass;

abstract class AbstractReflection implements JsonSerializable
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

        if (array_key_exists($property, $properties)) {
            return $this->{$property};
        }
    }

    public function jsonSerialize()
    {
        $json       = new stdClass;
        $properties = array_keys(get_class_vars(__CLASS__));

        foreach ($properties as $property) {
            $json->{$property} = $this->{$property};
        }

        return $json;
    }

    public function toJson()
    {
        return json_encode($this);
    }
}
