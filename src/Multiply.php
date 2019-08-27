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
}
