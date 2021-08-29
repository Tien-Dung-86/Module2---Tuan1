<?php
//$myFile = fopen("demo.txt", "w");
////fwrite($myFile, "Hello World");
////fclose($myFile);
////
////$content = file_get_contents("demo.txt");
////echo $content;
//
//file_put_contents("demo.txt", "Dragon");
//$content = file_get_contents("demo.txt");
//echo $content;

$arr = array(
    "name" => "TTD",
    "age" => "25",
    "address" => "Ha Noi"
);

$dataJson = json_encode($arr);
file_put_contents("demo.json", $dataJson);

$data = file_get_contents("demo.json");
//var_dump($data);

$result = json_decode($data, true);
echo "<pre>";
var_dump($result);
