<?php

class Circle
{
    public int $radius;
    public string $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function calculateArea()
    {
        return M_PI * ($this->radius ** 2);
    }
    public function calculatePerimeter(){
        return M_PI * 2 * $this->radius;
    }
    public function toString(){
        echo "Circle: radius = " . $this->getRadius() . ", color = " . $this->getColor() . "<br>";
    }
}