<?php

class Stack
{
    protected array $stack;
    protected int $limit;

    public function __construct(int $limit = 10)
    {
        $this->limit = $limit;
        $this->stack = [];
    }
    public function push($item): void{
        if(count($this->stack) < $this->limit){
            array_unshift($this->stack, $item);
        }
    }
}