<?php

namespace spec\RadHam\Reflect;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConstantReflectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RadHam\Reflect\ConstantReflection');
    }
}
