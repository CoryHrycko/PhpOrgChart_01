<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use PhpSpec\Exception\Example\PendingException;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }
    /** This is a major test of a test
    * @Given there is a(n) :arg1, which costs £:arg2
    */
    public function thisIsATest($arg1, $arg2)
    {
        throw new PendingException();
        # code...
    }
}
