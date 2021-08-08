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
function isPrime($number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$N = 2;
$count = 0;
$aNumber = 20;
while ($count < $aNumber) {
    if (isPrime($N)) {
        echo $N . '<br>';
        $count++;
    }
    $N++;
}
?>
</body>
</html>
