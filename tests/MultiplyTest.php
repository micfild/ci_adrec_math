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

    public function testMultiply2BY5()
    {
        $this->assertSame(10, $this->multiply->multiplyBy2(5));
    }

    public function testMultiply2BY4()
    {
        $this->assertEquals(8, $this->multiply->multiplyBy2(4));
    }

    public function testMultiply1BY1()
    {
        $this->assertSame(1, $this->multiply->multiplyBy1(1));
    }

    public function testMultiply1BY4()
    {
        $this->assertSame(4, $this->multiply->multiplyBy1(4));
    }

    public function testMultiply10BY2()
    {
        $this->assertEquals(20, $this->multiply->multiplyBy10(2));
    }

    public function testMultiply10BY15()
    {
        $this->assertEquals(150, $this->multiply->multiplyBy10(15));
    }

    public function testMultiply3By5()
    {
        $this->assertSame(15, $this->multiply->multiplyBy3(5));
    }

    public function testMultiply3By4()
    {
        $this->assertEquals(12, $this->multiply->multiplyBy3(4));
    }

    public function testMultiply8BY5()
    {
        $this->assertSame(40, $this->multiply->multiplyBy8(5));
    }

    public function testMultiply7BY5()
    {
        $this->assertSame(35, $this->multiply->multiplyBy7(5));
    }

    public function testMultiply8BY9()
    {
        $this->assertEquals(72, $this->multiply->multiplyBy8(9));
    }

    public function testMultiply7BY6()
    {
        $this->assertSame(42, $this->multiply->multiplyBy7(6));
    }

    public function testMultiply100BY5()
    {
        $this->assertSame(500, $this->multiply->multiplyBy100(5));
    }

    public function testMultiply100BY4()
    {
        $this->assertEquals(400, $this->multiply->multiplyBy100(4));
    }
  
    public function testMultiply16BY6()
    {
        $this->assertSame(96, $this->multiply->multiplyBy16(6));
    }

    public function testMultiply16BY9()
    {
        $this->assertSame(144, $this->multiply->multiplyBy16(9));
    }
  
    public function testMultiply9BY9()
    {
        $this->assertSame(81, $this->multiply->multiplyBy9(9));
    }

    public function testMultiply9BY5()
    {
        $this->assertSame(45, $this->multiply->multiplyBy9(5));
    }
  
    public function testMultiply42BY5()
    {
        $this->assertSame(210, $this->multiply->multiplyBy42(5));
    }

    public function testMultiply42BY4()
    {
        $this->assertEquals(168, $this->multiply->multiplyBy42(4));
    }

    public function testMultiply69BY1()
    {
        $this->assertSame(69, $this->multiply->multiplyBy69(1));
    }
    public function testMultiply69BY2()
    {
        $this->assertSame(138, $this->multiply->multiplyBy69(2));
    }

}
