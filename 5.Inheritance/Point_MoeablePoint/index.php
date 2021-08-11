<?php
include "Point.php";
include "MoveablePoint.php";

$point = new Point(1.2, 2.5);
$point->toString();

$moveablePoint = new MoveablePoint(1.5, 2.8, 3, 3);
$moveablePoint->toString();