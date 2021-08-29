<?php
include "MyList.php";

$myList = new MyList();
$myList->add(2);
$myList->add("on Bush");
$myList->add(3);
echo "Array size: " . $myList->size() . "<br>";
$myList->indexOf("on Bush");
$myList->remove(1);
echo "New array size after remove index: " . $myList->size() . "<br>";

//$myList->reset();
//echo "Array after reset: ".$myList->reset();

$myList->add(4);
$myList->add(5);
$myList->add(10);
$myList->add(5);
$myList->add(8);
$myList->add(9);
$myList->add(12);

echo "<br>Array size: " . $myList->size() . "<br>";
$myList->sort();

$myList->insert(3, 10);
$myList->indexOf( 10);

echo "<br>";


