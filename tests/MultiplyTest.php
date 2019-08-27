<?php

namespace Tests;

use App\Multiply;
use PHPUnit\Framework\TestCase;


class MultiplyTest extends TestCase
{
    private $multiply;

    public function setUp()
    {
        parent::setUp();
        $this->multiply = new Multiply();
    }

    public function testMultiply5BY5()
    {
        $this->assertSame(25, $this->multiply->multiplyBy5(5));
    }

    public function testMultiply5BY4()
    {
        $this->assertEquals(20, $this->multiply->multiplyBy5(4));
    }

    public function testMultiply10BY2()
    {
        $this->assertEquals(20, $this->multiply->multiplyBy10(2));
    }

    public function testMultiply10BY15()
    {
        $this->assertEquals(150, $this->multiply->multiplyBy10(15));
    }
}
