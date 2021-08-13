<?php
include_once "Resizeable.php";
include "Circle.php";

class ResizeCircle extends Circle implements Resizeable
{
    public function resize($percent)
    {
        echo "New Area = " . ($this->getArea() * $percent / 100) . "<br>";
        echo "New Perimeter = " . ($this->getPerimeter() * $percent / 100) . "<br>";
    }
}