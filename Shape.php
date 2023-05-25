<?php

class Shape {
    private $height;
    private $width;
    private $diameter;
    private $length;
    
    public function __construct($height, $width, $diameter, $length) {
        $this->height = $height;
        $this->width = $width;
        $this->diameter = $diameter;
        $this->length = $length;
    }
    
    public function getHeight() {
        return $this->height;
    }
    
    public function getWidth() {
        return $this->width;
    }
    
    public function getDiameter() {
        return $this->diameter;
    }
    
    public function getLength() {
        return $this->length;
    }
    
    public function getArea() {
        if ($this->diameter !== null) {
            $radius = $this->diameter / 2;
            return pi() * $radius * $radius;
        } else {
            return null;
        }
    }
}

class Triangle extends Shape {
    private $base;
    
    public function __construct($height, $base) {
        parent::__construct($height, null, null, null);
        $this->base = $base;
    }
    
    public function getBase() {
        return $this->base;
    }
}

// Example usage
$rectangle = new Shape(10, 20, null, null);
$circle = new Shape(null, null, 10, null);
$cylinder = new Shape(10, null, 10, 20);
$triangle = new Triangle(5, 8);

echo "Rectangle height: " . $rectangle->getHeight() . "\n";
echo "Rectangle width: " . $rectangle->getWidth() . "\n";
echo "Circle diameter: " . $circle->getDiameter() . "\n";
echo "Circle area: " . $circle->getArea() . "\n";
echo "Cylinder height: " . $cylinder->getHeight() . "\n";
echo "Cylinder diameter: " . $cylinder->getDiameter() . "\n";
echo "Cylinder length: " . $cylinder->getLength() . "\n";
echo "Triangle height: " . $triangle->getHeight() . "\n";
echo "Triangle base: " . $triangle->getBase() . "\n";

?>
