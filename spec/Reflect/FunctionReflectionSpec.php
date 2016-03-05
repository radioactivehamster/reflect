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

    function it_should_have_a_property_named_name_with_a_value_of_trim()
    {
        $this->name->shouldBe('trim');
    }

    function it_should_have_a_property_named_type_with_a_value_of_function()
    {
        $this->type->shouldBe('function');
    }

    function it_should_serialize_to_json()
    {
        $this->toJson()->shouldBe('{"name":"trim","type":"function"}');
    }
}
