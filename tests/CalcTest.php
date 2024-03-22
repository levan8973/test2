<?php

namespace App\Tests;

use App\Calc;
use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{
    public function testSum()
    {
        $calc = new Calc();

        $this->assertEquals(3, $calc->sum(1, 2));
    }
}
