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

    function it_should_factory_a_function_reflection()
    {
        $this::factory('trim')->shouldHaveType('ReflectionFunction');
    }

    function it_should_throw_a_runtime_exception_if_an_invalid_parameter_is_supplied_to_the_factory()
    {
        $invalidParameter = '?!?!?!';

        $this->shouldThrow('RuntimeException')->duringFactory($invalidParameter);
    }
}
