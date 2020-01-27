<?php

// Open Closed Principle Violation
class Rectangle {
    public $width;
    public $height;
}

class Board {
    public $rectangles = [];
    public function calculateArea() {
        $area = 0;
        foreach ($this->rectangles as $rectangle) {
            $area += $rectangle->width * $rectangle->height;
        }
    }
}

class Circle {
    public $radius;
}

class Square {
    public $length;
}

// Refactored
interface Shape {
    public function area();
}

class Rectangle implements Shape {
    public function area() {
        return $this->width * $this->height;
    }
}

class Circle implements Shape {
    public function area() {
        return $this->radius * $this->radius * pi();
    }
}

class Square implements Shape {
    public function area() {
        return pow($this->length, 2);
    }
}

class Board {
    public $shapes;

    public function calculateArea() {
        $area = 0;
        foreach ($this->shapes as $shape) {
            $area+= $shape->area();
        }
        return $area;
    }
}
