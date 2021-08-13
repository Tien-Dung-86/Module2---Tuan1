<?php
include "Abstractclass/Tiger.php";
include "Abstractclass/Chicken.php";
include_once "Abstractclass/Fruits/Apple.php";
include_once "Abstractclass/Fruits/Orange.php";


echo('---- Animals <br>');
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->makeSound() . "";
    if ($animal instanceof Chicken) {
        echo $animal->howToEat() . "";
    }
}

echo("---- Fruits <br>");
$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . "<br>";
}



