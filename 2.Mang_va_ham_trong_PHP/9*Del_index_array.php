<?php
$arr = array(10, 4, 6, 7, 8, 6, 0);
$N = 7;
for ($i = 0; $i < count($arr); $i++) {
    if ($N === $arr[$i]) {
      array_splice($arr[$i], 1);
    }
}
echo $arr;