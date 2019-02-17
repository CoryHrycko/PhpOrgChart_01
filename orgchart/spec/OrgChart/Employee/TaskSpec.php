<?php

namespace spec\OrgChart\Employee;

use OrgChart\Employee\Task;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TaskSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Task::class);
    }
}
