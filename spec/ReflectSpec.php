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
        $this::function()->shouldHaveType('RadHam\Reflect\FunctionReflection');
    }
}
