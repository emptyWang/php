<?php namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LifeToTimeSpec extends ObjectBehavior {

    function it_touch_44_when_after_6_hours()
    {
        $this->howManyAtThatTime(6)->shouldReturn(floatval(44));
    }

    function it_touch_1_when_after_1_hours()
    {
        $this->howManyAtThatTime(6)->shouldReturn(floatval(44));
    }

    function it_got_1_when_get_1()
    {
        $this->getOne(6)->shouldNotReturn(61);
    }
}
