<?php

namespace spec\RadHam\Reflect;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConstantReflectionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('E_ERROR');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('RadHam\Reflect\ConstantReflection');
    }

    function it_should_have_a_property_named_name_with_a_value_of_e_error()
    {
        $this->name->shouldBe('E_ERROR');
    }

    function it_should_have_a_property_named_type_with_a_value_of_constant()
    {
        $this->type->shouldBe('constant');
    }
}
