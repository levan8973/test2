<?php

namespace App\Tests;

use App\Circle;
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    public function testSum()
    {
                                
        $circle = new Circle(5);
        
        $this->assertEquals(5 * 5 * 3.14, $circle->getArea());
    }
}