<?php

class Point
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

    public function getY(): float
    {
        return $this->y;
    }

    public function setX($x)
    {
        $this->x = $x;
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
        return "(".$this->x.", ".$this->y.")";
    }
    public function toString(){
        echo "Co-ordinate XY: ".$this->getXY()."<br>";
    }
}