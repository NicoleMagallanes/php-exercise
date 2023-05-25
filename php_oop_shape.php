<?php
abstract class Shape implements IShape {
    protected $name;
    abstract public function description();
 public function __construct() {
        // Constructor for the Shape class
    }
    public function getArea($params) {
        // Implement the getArea() method in the abstract Shape class.
    }

    public function getPerimeter($params) {
        // Implement the getPerimeter() method in the abstract Shape class.
    }
}


interface IShape {
  public function getArea($params);
  public function getPerimeter($params);
}


class Square extends Shape {
    public function description() {
        return "Square has four equal sides.";
    }

    public function getArea($params) {
        $length = $params['length'];
        $width = $params['width'];

        if ($length != $width) {
            return "invalid";
        }
        return $length * $width;
    }

    public function getPerimeter($params) {
        $length = $params['length'];
        $width = $params['width'];

        if ($length != $width) {
            return "invalid";
        }
        return 4 * $length;
    }
}


class Rectangle extends Shape {
    public function description() {
        return "Rectangle has two equal sides.";
    }

    public function getArea($params) {
        $length = $params['length'];
        $width = $params['width'];

        return $length * $width;
    }

    public function getPerimeter($params) {
        $length = $params['length'];
        $width = $params['width'];

        return 2 * ($length + $width);
    }
}


class Triangle extends Shape {
    public function description() {
        return "Triangle has three sides.";
    }

    public function getArea($params) {
        $base = $params['base'];
        $height = $params['height'];

        return ($base * $height) / 2;
    }

    public function getPerimeter($params) {
        $side1 = $params['side1'];
        $side2 = $params['side2'];
        $side3 = $params['side3'];

        return $side1 + $side2 + $side3;
    }
}


class Circle extends Shape {
    public function description() {
        return "Circle has no sides, only a curve.";
    }

    public function getArea($params) {
        $radius = $params['radius'];

        return pi() * pow($radius, 2);
    }

    public function getPerimeter($params) {
        $radius = $params['radius'];

        return 2 * pi() * $radius;
    }
}


$shape1 = new Square();
echo $shape1->description() . "\n"; // Output: "Square has four equal sides."
echo $shape1->getArea(['length' => 4, 'width' => 4]) . "\n"; // Output: 16
echo $shape1->getArea(['length' => 4, 'width' => 3]) . "\n"; // Output: "invalid" as length and width need to be equal
echo $shape1->getPerimeter(['length' => 4, 'width' => 4]) . "\n"; // Output: 16
echo $shape1->getPerimeter(['length' => 4, 'width' => 3]) . "\n"; // Output: "invalid" as length and width need to be equal


$shape2 = new Rectangle();
echo $shape2->description() . "\n"; // Output: "Rectangle has two equal sides."
echo $shape2->getArea(['length' => 4, 'width' => 6]) . "\n"; // Output: 24
echo $shape2->getPerimeter(['length' => 4, 'width' => 6]) . "\n"; // Output: 20


$shape3 = new Triangle();
echo $shape3->description() . "\n"; // Output: "Triangle has three sides."
echo $shape3->getArea(['base' => 4, 'height' => 6]) . "\n"; // Output: 12
echo $shape3->getPerimeter(['side1' => 4, 'side2' => 6, 'side3' => 7]) . "\n"; // Output: 17


$shape4 = new Circle();
echo $shape4->description() . "\n"; // Output: "Circle has no sides, only a curve."
echo $shape4->getArea(['radius' => 5]) . "\n"; // Output: 78.54, considering the first parameter as the radius value
echo $shape4->getPerimeter(['radius' => 5]) . "\n"; // Output: 31.416, considering the first parameter as the radius value
?>
