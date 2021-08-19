<?php

function countValue($numbers, $value)
{
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($value == $numbers[$i]) {
            $count++;
        }
    }
    return $count;
}

$numbers = [10, 0, 5, 7, 9, 10, 30, 10];
$value = 10;

foreach ($numbers as $number) {
    echo $number . "<br>";
}
$countAppear = countValue($numbers, $value);
echo "The " . $value . " appear: " . $countAppear . " time";