<?php

class ArrayList
{
    public array $arrayList;

    public function __construct($arr = "")
    {
        if (is_array($arr)) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = [];
        }
    }

    public function add($obj): void
    {
        array_push($this->arrayList, $obj);
    }

    public function clear(): void
    {
        $this->arrayList = [];
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    public function isEmpty()
    {
        return count($this->arrayList) == 0;
    }

    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = [];
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index != $i) {
                    $newArrayList[] = $this->get($i);
                }
            }
            $this->arrayList = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }

    public function size()
    {
        return count($this->arrayList);
    }

    public function sort()
    {
        sort($this->arrayList);
    }

    public function toArray(): array
    {
        return $this->arrayList;
    }

    public function isInteger($toCheck): bool
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}