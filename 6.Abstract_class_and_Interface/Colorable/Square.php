<?php

class Square
{
    public string $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getColor():string
    {
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }
}