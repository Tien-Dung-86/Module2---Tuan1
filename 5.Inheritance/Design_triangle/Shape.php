<?php

class Shape
{
    public float $side1;
    public float $side2;
    public float $side3;

    public function __construct($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function __originTriangle()
    {
    }

    public function createTriangle($side1 = 1.0, $side2 = 1.0, $side3 = 1.0)
    {
        echo 'Triangle with 3 side: side1 = ' . $side1 . ", side2 = " . $side2 . ", side3 = " . $side3;
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

    public function toString(){

    }
}