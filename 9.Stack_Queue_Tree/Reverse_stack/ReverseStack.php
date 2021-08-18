<?php

class ReverseStack
{
    public array $stack;
    public int $limit;

    public function __construct()
    {
        $this->stack = [];
        $this->limit = 10;

    }

    public function push()
    {
    if(count($this->stack) < $this->limit){
        array_unshift($this->stack)
    }
    }
}