<?php

namespace spec\RadHam\Reflect;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringReflectionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Hello world!');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('RadHam\Reflect\StringReflection');
    }

    function it_should_have_a_property_named_type_with_a_value_of_string()
    {
        $this->type->shouldBe('string');
    }

    function it_should_have_a_property_named_value_with_a_value_of_hello_world()
    {
        $this->value->shouldBe('Hello world!');
    }
}
