<?php

class PrimeFactorsTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $this->assertSame(array(), PrimeFactors::generate(1));
    }

    public function testTwo()
    {
        $this->assertSame(array(2), PrimeFactors::generate(2));
    }

    public function testThree()
    {
        $this->assertSame(array(3), PrimeFactors::generate(3));
    }

    public function testFour()
    {
        $this->assertSame(array(2,2), PrimeFactors::generate(4));
    }

    public function testSix()
    {
        $this->assertSame(array(2,3), PrimeFactors::generate(6));
    }

    public function testEight()
    {
        $this->assertSame(array(2,2,2), PrimeFactors::generate(8));
    }

    public function testNine()
    {
        $this->assertSame(array(3,3), PrimeFactors::generate(9));
    }

}