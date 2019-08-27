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

    public function testA()
    {
        $this->assertSame(25, $this->multiply->multiplyBy5(5));
    }

    public function testB()
    {
        $this->assertEquals(20, $this->multiply->multiplyBy5(4));
    }

    public function testMultiply5By3()
    {
        $this->assertSame(15, $this->multiply->multiplyBy3(5));
    }

    public function testMultiply4By3()
    {
        $this->assertEquals(12, $this->multiply->multiplyBy3(4));
    }
}
