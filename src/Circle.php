<?php

namespace App;

class Circle implements Figure {
    public $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return 3.14 * $this->radius * $this->radius;
    }
}