<?php
include "Circle.php";
include "Cylinder.php";

$circle = new Circle(5, 'black');
echo "Circle: radius = " . $circle->getRadius() . ", color = " . $circle->getColor() . "<br>";
echo "Circle area: " . $circle->calculateArea() . " (m2) <br>";
echo "Circle perimeter: " . $circle->calculatePerimeter() . " (m) <br>";

$cylinder = new Cylinder(5, 'black', 10);
echo "<br>";
echo "Cylinder: radius = " . $cylinder->getRadius() . ", color = " . $cylinder->getColor() . ", height = " . $cylinder->getHeight() . "<br>";
echo "Cylinder area: " . $cylinder->calculateArea() . " (m2) <br>";
echo "Cylinder perimeter: " . $cylinder->calculatePerimeter() . " (m) <br>";