<?php
include_once "File.php";
include "LinkedList.php";

$linkList = new LinkedPointList();
$linkList->insertFirst('Andy', 2);
$linkList->insertFirst('Bob', 5);
$linkList->insertFirst('James', 10);
$linkList->showList();

$linkList->insertFirst('zon', 8);
$linkList->showList();
