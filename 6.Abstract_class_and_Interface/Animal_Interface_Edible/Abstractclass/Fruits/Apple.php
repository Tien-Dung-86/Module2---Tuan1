<?php
include_once "Abstractclass/Fruits.php";

class Apple extends Fruits
{
    public function howToEat(): string
    {
        return "Apple could be slided";
    }
}