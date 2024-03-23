<?php

namespace App;

class Square implements Figure {
    public $width;

    public function __construct(float $width)
    {
        $this->width = $width;
    }

    public function getArea(): float {
        return $this->width * $this->width;
    }
}