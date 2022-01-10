<?php

namespace Davidlane\UnitTestingDemo\Tests;

use Davidlane\UnitTestingDemo\App\Calculator;
use PHPUnit\Framework\TestCase;

/**
 * @covers Calculator;
 */
class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator;
    }

    public function testOneAddOneEqualsTwo()
    {
        $this->assertEquals(2, $this->calculator->add(1, 1));
    }

    public function testTwoMinusOneEqualsOne()
    {
        $this->assertEquals(1, $this->calculator->subtract(2, 1));
    }

    public function testTwoMinusTwoEqualsZero()
    {
        $this->assertEquals(0, $this->calculator->subtract(2, 2));
    }
}
