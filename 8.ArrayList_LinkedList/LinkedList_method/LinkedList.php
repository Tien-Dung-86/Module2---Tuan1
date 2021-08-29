<?php
include_once "Link.php";
class LinkedList
{
    public int $count;
    private $firstNode;
    private $lastNode;

    function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function add(int $index)
    {
        $this->firstNode = $index;

    }

    public function addFirst($data)
    {
        $node = new Link($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;

        if (is_null($this->lastNode)) {
            $this->lastNode = $node;
        }
        $this->count++;
    }

    public function addLast($data)
    {
        if (!is_null($this->firstNode)) {
            $node = new Link($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->addFirst($data);
        }
    }

    public function remove($index)
    {
        $p = $this->firstNode;
        $c = $this->firstNode->next;

        for ($i = 1; $i < $index; $i++) {
            $p = $c;
            $c = $c->next;
        }
        $p->next = $c->next;
    }

}