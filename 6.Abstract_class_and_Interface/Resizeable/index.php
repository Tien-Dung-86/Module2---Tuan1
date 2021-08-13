<?php

include "ResizeCircle.php";
include "ResizeSquare.php";


$circle = new ResizeCircle(5);
$percent = rand(1,100);
echo "CIRCLE <br>";
echo "The size of Circle <br>";
echo "Area =".$circle->getArea()."<br>";
echo "Perimeter =".$circle->getPerimeter()."<br>";
echo "<br> After resize: <br>";
$circle->resize($percent);

$square = new ResizeSquare(5, 10);
$percent = rand(1,100);
echo "<br> SQUARE <br>";
echo "The size of Square <br>";
echo "Area =".$circle->getArea()."<br>";
echo "Perimeter =".$circle->getPerimeter()."<br>";
echo "<br> After resize: <br>";
$square->resize($percent);