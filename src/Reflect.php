<?php

namespace RadHam;

use ReflectionFunction;
use RuntimeException;

class Reflect
{
    use Reflect\Utility\Identifiable;

    public static function factory($name)
    {
        switch ($name) {
            case self::isFunction($name):
                return new ReflectionFunction($name);

            default:
                throw new RuntimeException("Unexpected parameter: \"{$name}\".");
        }
    }
}
