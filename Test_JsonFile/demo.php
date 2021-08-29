<?php
$myFile = fopen("demo.txt", "w");
//$read = file("demo.txt", "r");
//var_dump($read);
//echo $myFile;



fwrite($myFile, "Hello World");
fclose($myFile);