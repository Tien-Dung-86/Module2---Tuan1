<?php
include "grandFather.php";
use grandFather;
class Father extends GrandFather
{
    private $speed = 10;

    public function run()
    {
        return $this->speed;
    }

    public function sing($music, $year)
    {
        if ($music == "Yellow music" && $year == 80) {
            echo "Father sing a song ('xyz') <br>";
        }
        if ($music == "Red music" && $year == 90) {
            echo "Father sing a song ('abc') <br>";
        }
    }
}