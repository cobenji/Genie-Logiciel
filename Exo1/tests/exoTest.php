<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class exoTest extends TestCase
{
    public function testLeapYears()
    {
        $this->assertEquals(true, Exo::isLeapYear(2016));
        $this->assertEquals(true, Exo::isLeapYear(2000));
    }

    public function testNonLeapYears()
    {
        $this->assertEquals(false, Exo::isLeapYear(2015));
        $this->assertEquals(false, Exo::isLeapYear(1900));
    }
}