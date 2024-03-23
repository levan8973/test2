<?php

namespace App\Tests;

use App\Square;
use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{
    public function testSum()
    {
        $square = new Square(5.6);

        $this->assertEquals(5.6 * 5.6 , $square->getArea());
    }
}
