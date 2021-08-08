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
function findMaxValue($arr)
{
    $max = $arr[0][0];
    for ($i = 0; $i <= count($arr) - 1; $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];
            }
        };
    }
    echo "Max valuable is: " . $max;
}

$arr = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10],
    [11, 19, 13, 14, 15],
];
findMaxValue($arr);
?>
</body>
</html>
