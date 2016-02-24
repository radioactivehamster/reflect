<?php

namespace RadHam;

use RuntimeException;

class Reflect
{
    use Reflect\Utility\Identifiable;

    public static function factory($name)
    {
        switch ($name) {
            case self::isFunction($name):
                return new Reflect\FunctionReflection($name);

            default:
                throw new RuntimeException("Unexpected parameter: \"{$name}\".");
        }
    }
}
