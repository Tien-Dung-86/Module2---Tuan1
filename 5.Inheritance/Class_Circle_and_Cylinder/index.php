<?php
include "Circle.php";
include "Cylinder.php";

$circle = new Circle(5, 'black');
$circle->toString();
echo "Circle area: " . $circle->calculateArea() . " (m2) <br>";
echo "Circle perimeter: " . $circle->calculatePerimeter() . " (m) <br>";


$cylinder = new Cylinder(5, 'black', 10);
echo "<br>";
$cylinder->toString();
echo "Cylinder area: " . $cylinder->calculateArea() . " (m2) <br>";
echo "Cylinder perimeter: " . $cylinder->calculatePerimeter() . " (m) <br>";