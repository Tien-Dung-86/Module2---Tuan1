<?php

class Point2D
{
    public float $x;
    public float $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        $xy = [$this->x, $this->y];
        return "(" . $xy[0] . ", " . $xy[1] . ")";
    }

    public function toString()
    {
        echo "XY: " . $this->getXY(). "<br>";
    }

}