<?php

namespace RadHam;

use RadHam\Reflect\ClassReflection;
use RadHam\Reflect\FunctionReflection;
use RadHam\Reflect\ReflectionConstant;
use ReflectionClass;
use ReflectionFunction;
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
            return new ReflectionConstant($name);
        }

        if (self::isFunction($name)) {
            return new FunctionReflection($name);
        }

        throw new RuntimeException("Unexpected parameter: \"{$name}\".");
    }
}
