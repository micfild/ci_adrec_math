<?php

namespace App;

use Moontoast\Math\BigNumber;

class Multiply
{
    public function multiplyBy5(int $number)
    {
        $number = new BigNumber($number);
        $number->multiply(5);
        return intval($number->getValue());
    }

    public function multiplyBy2(int $number) {
        $number = new BigNumber($number);
        $number->multiply(2);
        return intval($number->getValue());
    }

    public function multiplyBy1(int $number){
        $number = new BigNumber($number);
        $number->multiply(1);
        return intval($number->getValue());
    }

    public function multiplyBy10(int $number)
    {
        $number = new BigNumber($number);
        $number->multiply(10);
        return intval($number->getValue());
    }

    public function multiplyBy3(int $number)
    {
        $number = new BigNumber($number);
        $number->multiply(3);
        return intval($number->getValue());
     }

    public function multiplyBy8(int $number)
    {
        $number = new BigNumber($number);
        $number->multiply(8);
        return intval($number->getValue());
    }

    public function multiplyBy9(int $number)
    {
        $number = new BigNumber($number);
        $number->multiply(9);
        return intval($number->getValue());
    }

    public function multiplyBy7(int $number)
    {
        $number = new BigNumber($number);
        $number->multiply(7);
        return intval($number->getValue());
    }

    public function multiplyBy100(int $number)
    {
        $number = new BigNumber($number);
        $number->multiply(100);
        return intval($number->getValue());
    }
  
    public function multiplyBy16(int $number)
    {
        $number = new BigNumber($number);
        $number->multiply(16);
        return intval($number->getValue());
    }

    public function multiplyBy42(int $number)
    {
        $number = new BigNumber($number);
        $number->multiply(42);
        return intval($number->getValue());
    }
  
    public function multiplyBy69(int $number)
    {
        $number = new BigNumber($number);
        $number->multiply(69);
        return intval($number->getValue());
    }
}
