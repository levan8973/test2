<?php

namespace App\Tests;

use App\FigureCollection;
use PHPUnit\Framework\TestCase;

class FigureCollectionTest extends TestCase
{
    public function testSum()
    {
       
        $collection = new FigureCollection();
        
        $this->assertEquals(0, $collection->countAreaSum());
    }
}