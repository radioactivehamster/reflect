<?php

namespace RadHam\Reflect\Utility;

trait Identifiable
{
    public static function isFunction($name)
    {
        $functions = get_defined_functions();

        return in_array($name, $functions['internal'])
            || in_array($name, $functions['user']);
    }
}
