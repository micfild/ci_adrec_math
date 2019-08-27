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

    public function testMultiply1BY1()
    {
        $this->assertSame(1, $this->multiply->multiplyBy1(1));
    }

    public function testMultiply1BY4()
    {
        $this->assertSame(4, $this->multiply->multiplyBy1(4));
    }
}
