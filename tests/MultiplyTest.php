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

    public function testC()
    {
        $this->assertEquals(20, $this->multiply->multiplyBy10(2));
    }

    public function testD()
    {
        $this->assertEquals(150, $this->multiply->multiplyBy10(15));
    }
}
