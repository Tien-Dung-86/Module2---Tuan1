<?php
include_once "Shape.php";

class Triangle extends Shape
{
    public float $side1;
    public float $side2;
    public float $side3;

    public function __construct($name, $side1, $side2, $side3)
    {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function createTriangle()
    {
        echo 'Triangle with 3 side: side1 = ' . $this->side1 . ", side2 = " . $this->side2 . ", side3 = " . $this->side3 . "<br>";
    }

    public function getPerimeter()
    {
        return ($this->side1 + $this->side2 + $this->side3);
    }

    public function getArea()
    {
        $p = $this->getPerimeter() / 2;
        return sqrt($p * ($p - $this->side1) * ($p - $this->side2) * ($p - $this->side3));
    }

    public function toString()
    {
        $this->createTriangle();
        echo "Triangle's Area =  " . $this->getArea() . "(m2) <br>";
        echo "Triangle's Perimeter = " . $this->getPerimeter() . "(m) <br>";
    }
}