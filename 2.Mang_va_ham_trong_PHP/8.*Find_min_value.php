<?php
$arr = [5, 2, 3, 2, 6, 8, 10];
$min = $arr[0];
for ($i = 2; $i < count($arr); $i++) {
    if ($min > $arr[$i]) {
        $min = $arr[$i];
    }
}
echo "Min valuable is: " . $min;
