<?php

namespace RadHam\Reflect\Utility;

use RadHam\Yaml;

trait Identifiable
{
    private static function _path($file)
    {
        return realpath(__DIR__ . "/../../../data/{$file}");
    }

    public static function isFunction($name)
    {
        $filename  = self::_path('functions.yml');
        $functions = Yaml::parseFile($filename);

        return in_array($name, $functions);
    }
}
