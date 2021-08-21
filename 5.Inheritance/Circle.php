<?php
//include "Triangle.php";

class Circle extends Triangle
{
    public int $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return (pow($this->radius, 2) * pi());
    }

    public function calculatePerimeter()
    {
        return (2 * pi() * $this->radius);
    }
}