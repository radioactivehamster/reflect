<?php

namespace RadHam\Reflect\Utility;

trait Identifiable
{
    public static function isClass($name)
    {
        $classes = get_declared_classes();

        return in_array($name, $classes);
    }

    public static function isConstant($name)
    {
        $constants = get_defined_constants();

        return array_key_exists($name, $constants);
    }

    public static function isFunction($name)
    {
        $functions = get_defined_functions();

        return in_array($name, $functions['internal'])
            || in_array($name, $functions['user']);
    }
}
