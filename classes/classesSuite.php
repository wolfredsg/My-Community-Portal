<?php

/**
 * Static test suite.
 */
class classesSuite extends PHPUnit_Framework_TestSuite
{

    /**
     * Constructs the test suite handler.
     */
    public function __construct()
    {
        $this->setName('classesSuite');
    }

    /**
     * Creates the suite.
     */
    public static function suite()
    {
        return new self();
    }
}

