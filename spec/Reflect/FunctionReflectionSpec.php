<?php

namespace spec\RadHam\Reflect;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FunctionReflectionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('trim');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('RadHam\Reflect\FunctionReflection');
    }
}
