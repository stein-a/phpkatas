<?php namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CommentParserSpec extends ObjectBehavior {

    function it_is_initializable() {

        $this->shouldHaveType('CommentParser');
    }

    function it_parses_something() {

        $this->parse()->shouldReturn('five');
    }
}
