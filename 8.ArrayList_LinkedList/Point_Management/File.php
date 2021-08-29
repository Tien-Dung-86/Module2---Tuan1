<?php

class File
{
    public string $name;
    public int $score;
    public $next;

    function __construct($name, $score)
    {
        $this->name = $name;
        $this->score = $score;
        $this->next = null;
    }

    function readInfo()
    {
        echo $this->name." - ".$this->score." point <br>";
    }
}