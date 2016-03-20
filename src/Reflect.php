<?php

namespace RadHam;

use RadHam\Reflect\ClassReflection;
use RadHam\Reflect\ConstantReflection;
use RadHam\Reflect\FunctionReflection;
use RadHam\Reflect\StringReflection;
use RuntimeException;

class Reflect
{
    use Reflect\Utility\Identifiable;

    public static function factory($name)
    {
        if (self::isClass($name)) {
            return new ClassReflection($name);
        }

        if (self::isConstant($name)) {
            return new ConstantReflection($name);
        }

        if (self::isFunction($name)) {
            return new FunctionReflection($name);
        }

        if (self::isString($name)) {
            return new StringReflection($name);
        }

        throw new RuntimeException("Unexpected parameter: \"{$name}\".");
    }
}
