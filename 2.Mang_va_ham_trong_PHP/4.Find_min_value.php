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
function findMinValue($arr)
{
    $min = $arr[0];
    for ($i = 0; $i <= count($arr) - 1; $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
    echo "Min valuable is: " . $min;
}

$array = [1, 2, 3, 6, 8];
findMinValue($array);

?>
</body>
</html>
