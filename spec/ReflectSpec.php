<?php

namespace spec\RadHam;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ReflectSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RadHam\Reflect');
    }

    function it_should_factory_a_class_reflection()
    {
        self::factory('PDO')->shouldHaveType('RadHam\Reflect\ClassReflection');
    }

    function it_should_factory_a_constant_reflection()
    {
        self::factory('E_ERROR')->shouldHaveType('RadHam\Reflect\ConstantReflection');
    }

    function it_should_factory_a_function_reflection()
    {
        self::factory('trim')->shouldHaveType('RadHam\Reflect\FunctionReflection');
    }

    function it_should_factory_a_string_reflection()
    {
        self::factory('Hello world!')->shouldHaveType('RadHam\Reflect\StringReflection');
    }

    function it_should_throw_a_runtime_exception_if_an_invalid_parameter_is_supplied_to_the_factory()
    {
        $invalidParameter = null;

        $this->shouldThrow('RuntimeException')->duringFactory($invalidParameter);
    }
}
