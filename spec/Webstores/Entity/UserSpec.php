<?php

namespace spec\Webstores\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Webstores\Entity\User');
    }

    function it_user_should_be_able_to_set_name()
    {
        $this->setFirstName("Frank");
        $this->setLastName("Klein Koerkamp");
        $this->getFirstName()->shouldReturn("Frank");
        $this->getFullName()->shouldReturn("Frank Klein Koerkamp");
    }
}
