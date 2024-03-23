<?php











$circle = new Circle(5);
$this->assertEquals(5 * 5 * 3.14, $circle->getArea());


class TestFigure implements Figure {
    public function getArea(): float {
        return 1;
    }
}

$collection = new FigureCollection();
$this->assertEquals(0, $collection->countAreaSum());

$collection->add(new TestFigure());
$this->assertEquals(1, $collection->countAreaSum());

$collection->add(new TestFigure());
$this->assertEquals(2, $collection->countAreaSum());
