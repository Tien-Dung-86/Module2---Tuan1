<?php

class MoveablePoint extends Point
{
    public float $xSpeed;
    public float $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed(): float
    {
        return $this->xSpeed;
    }

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function getYSpeed(): float
    {
        return $this->ySpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function move()
    {
    echo "Point move from ".parent::getXY()." with (Xspeed: ".$this->xSpeed.", Yspeed: ".$this->ySpeed.") <br>";
    }

    public function toString()
    {
        parent::toString();
        $this->move();
        echo "(".($this->x + $this->getXSpeed()).", ".($this->y + $this->getYSpeed()).") <br>";
    }
}