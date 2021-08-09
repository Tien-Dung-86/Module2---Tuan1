<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$number1 = array(1, 2, 3, 4, 5);
$number2 = array(6, 7, 8, 9, 10);
$number = array();
for ($i = 0; $i <= count($number1) - 1; $i++) {
    $number = array_push($number1[$i]);
}
echo "The Array after add array number1: ".$number."<br>";

for ($j = 0; $j <= count($number2) - 1; $j++) {
    $number = array_push($number2[$j]);
}
echo "The Array after add array number2: ".$number;

?>
</body>
</html>
