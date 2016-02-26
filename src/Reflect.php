<?php

namespace RadHam;

use ReflectionFunction;
use RuntimeException;

class Reflect
{
    use Reflect\Utility\Identifiable;

    public static function factory($name)
    {
        if (self::isFunction($name)) {
            return new ReflectionFunction($name);
        }

        throw new RuntimeException("Unexpected parameter: \"{$name}\".");
    }
}
