<?php
//include "Rectangle.php";

class Square extends Rectangle
{
    public int $width;
    public int $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name, $width, $height);
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter()
    {
        return (($this->height + $this->width) * 2);
    }
}
