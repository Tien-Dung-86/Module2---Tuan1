<?php

include_once "CircleComparator.php";

$cirleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($cirleOne, $circleTwo));
