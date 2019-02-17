<?php

namespace spec\OrgChart\Employee;

use OrgChart\Employee\EID;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EIDSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(EID::class);
    }
}
