<?php

namespace App;

class FigureCollection {
    public $figures = [];

    public function add(Figure $figure) {
        $this->figures[] = $figure;
    }

    public function countAreaSum() {
        $sum = 0;

        foreach ($this->figures as $figure) {
            $sum += $figure->getArea();
        }

        return $sum;
    }
}
