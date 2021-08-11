<?php
include "Father.php";
class Child extends Father
{
    private $speed = 20;

    public function run()
    {
        return $this->speed;
    }

    public function sing($music, $year, $age)
    {
        if ($music == "Yellow music" && $year == 80 && $age == 30) {
            echo "Grandfather sing a song ('xyz') <br>";
        }
        if ($music == "Red music" && $year == 90 && $age == 20) {
            echo "Grandfather sing a song ('abc') <br>";
        }
    }
}
