<?php
include_once "Colorable.php";
include "Square.php";

class ColorableSquare extends Square implements Colorable
{
    public function howToColor()
    {
        echo "Color: ". $this->getColor(). " all four sides of Square";
    }
}