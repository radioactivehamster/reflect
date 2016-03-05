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

    function it_should_have_a_property_named_name_with_a_value_of_pdo()
    {
        $this->name->shouldBe('PDO');
    }

    function it_should_have_a_property_named_type_with_a_value_of_class()
    {
        $this->type->shouldBe('class');
    }

    function it_should_serialize_to_json()
    {
        $this->toJson()->shouldBe('{"name":"PDO","type":"class"}');
    }
}
