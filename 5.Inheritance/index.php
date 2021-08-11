<?php
include ("Shape.php");
include ("Rectangle.php");
include ("Square.php");
include ("Circle.php");
include ("Cylinder.php");

$rectangle = new Rectangle('Rectangle', 30, 20);
echo "Rectangle area: " . $rectangle->calculateArea() . "<br>";
echo "Rectangle perimeter: " . $rectangle->calculatePerimeter() . "<br>";

$square = new Square('Square', 30, 20);
echo "Square area: " . $square->calculateArea() . "<br>";
echo "Square perimeter: " . $square->calculatePerimeter() . "<br>";

$circle = new Circle('Circle 01', 30);
echo "Circle area: " . $circle->calculateArea() . "<br>";
echo "Circle perimeter: " . $circle->calculatePerimeter() . "<br>";

$cylinder = new Cylinder('Cylinder 01', 30, 20);
echo "Cylinder area: " . $cylinder->calculateArea() . "<br>";
echo "Cylinder perimeter: " . $cylinder->calculatePerimeter() . "<br>";