<?php

namespace spec\RadHam\Reflect;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClassReflectionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('PDO');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('RadHam\Reflect\ClassReflection');
    }
}
