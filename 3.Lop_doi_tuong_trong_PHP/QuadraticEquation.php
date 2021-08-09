<?php

class QuadraticEquation
{
    private int $a;
    private int $b;
    private int $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function getDisciminant()
    {
        $delta = ($this->b ** 2) - 4 * $this->a * $this->c;
        return $delta;
    }

    public function getRoot1()
    {
        $r1 = (-$this->b + sqrt(($this->b ** 2) - (4 * $this->a * $this->c))) / 2 * $this->a;
        return $r1;
    }

    public function getRoot2()
    {
        $r2 = (-$this->b - sqrt(($this->b ** 2) - (4 * $this->a * $this->c))) / 2 * $this->a;
        return $r2;
    }
}

$a = 1;
$b = -4;
$c = -4;
$equation = new QuadraticEquation($a, $b, $c);
echo "Enter " . "<br>";
echo "a = " . $a . "<br>";
echo "b = " . $b . "<br>";
echo "c = " . $c . "<br>";

if ($equation->getDisciminant() > 0) {
    echo "The Equation has two roots: x1 = " . $equation->getRoot1() . " and x2 = " . $equation->getRoot2() . "<br>";
} else if ($equation->getDisciminant() == 0) {
    echo "The Equation has one root: -1";
} else {
    echo "The Equation has no real roots ";
}