<?php

class MyList
{
    public int $size;
    public array $element;

    public function __construct()
    {
        $this->element = [];
    }

    public function insert($index, $obj): void
    {
        array_splice($this->element, $index, 0, $obj);
    }

    public function add($obj)
    {
        array_push($this->element, $obj);
    }

    public function remove($index)
    {
        array_splice($this->element, $index, 1);
    }

    public function get($index)
    {
        if ($this->element[$index] && $index < $this->size()) {
            return $this->element[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    public function clear()
    {
         return $this->size() == 0;
    }

    public function size()
    {
        return $this->size = count($this->element);
    }

    public function isEmpty()
    {
        if (count($this->element) == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function sort()
    {
        sort($this->element);
        $length = count($this->element);
        for($i = 0; $i < $length; $i++){
            echo $this->element[$i];
            echo "<br>";
        }
    }

    public function indexOf($obj)
    {
        echo "Object position: ".array_search($obj, $this->element)."<br>";
    }

    public function addAll($arr)
    {
        array_push($this->element, $arr);
    }

    public function reset()
    {
        $this->element = [];
        return $this->size();
    }
}