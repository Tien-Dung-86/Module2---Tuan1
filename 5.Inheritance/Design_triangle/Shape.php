<?php
class Shape
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo "I'm a shape. My name is: $this->name";
    }
}