<?php

class Cylinder extends Circle
{
    public int $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function calculateArea()
    {
        return parent::calculatePerimeter() * $this->height;
    }
    public function calculatePerimeter()
    {
        return parent::calculateArea() + parent::calculatePerimeter() * $this->height;
    }
}