<?php

class Fan
{
    public const SLOW = 1;
    public const MEDIUM = 2;
    public const FAST = 3;

    private $speed = self::SLOW;
    private $on = false;
    private $radius = 5.0;
    private $color = 'blue';

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getOn(){
        return $this->on;
    }

    public function setTurnOn($on){
        $this->on = $on;
    }

    public function getRadius(){
        return $this->radius;
    }

    public function setRadius($radius){
        $this->radius = $radius;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function toString()
    {
        echo "<br>";
        if ($this->on) {
            echo "Fan is on <br>";
            echo "Speed: " . $this->speed. "<br>";
            echo "Radius: " . $this->radius . "<br>";
            echo "Color: " . $this->color . "<br>";
        } else {
            echo "Fan is off <br>";
            echo "Radius: " . $this->radius . "<br>";
            echo "Color; " . $this->color . "<br>";
        }
    }
}

$fan1 = new Fan();
$fan1->setSpeed($fan1::FAST);
$fan1->setRadius(10);
$fan1->setColor('yellow');
$fan1->setTurnOn(true);
$fan1->toString();

$fan2 = new Fan();
$fan2->setSpeed($fan2::MEDIUM);
$fan2->setRadius(5);
$fan2->setColor('blue');
$fan2->setTurnOn(false);
$fan2->toString();