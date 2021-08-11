<?php

include "child.php";

$grand = new GrandFather();
echo "GrandFather speed: ".$grand->run()."<br>";
$grand->sing('Yellow music');

$father = new Father();
echo "Father speed: ".$father->run()."<br>";
$father->sing("Red music", 80);
$father->sing("Yellow music", 80);

$child = new Child();
echo "Child speed: ".$child->run()."<br>";
$child->sing("Red music", 90, 20);