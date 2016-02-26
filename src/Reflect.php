<?php

namespace RadHam;

use RadHam\Reflect\ReflectionConstant;
use ReflectionFunction;
use RuntimeException;

class Reflect
{
    use Reflect\Utility\Identifiable;

    public static function factory($name)
    {
        if (self::isConstant($name)) {
            return new ReflectionConstant($name);
        }

        if (self::isFunction($name)) {
            return new ReflectionFunction($name);
        }

        throw new RuntimeException("Unexpected parameter: \"{$name}\".");
    }
}
