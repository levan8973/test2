<?php

namespace App\Tests;

use App\Rect;
use PHPUnit\Framework\TestCase;

class RectTest extends TestCase
{
    public function testSum()
    {
                                
        $rect = new Rect(10,5);
        
        $this->assertEquals(10 * 5 , $rect->getArea());
    }
}