<?php

class Circle
{
    public float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getRadius(): string
    {
        return $this->radius;
    }

    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    public function getArea(){
        return M_PI * ($this->radius ** 2);
    }

    public function getPerimeter(){
        return M_PI * $this->radius * 2;
    }
}