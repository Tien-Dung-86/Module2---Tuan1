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

$number = 2;
$count = 0;
while ($count < 50) {
    if ($number < 100) {
        if (isPrime($number)) {
            echo $number . '<br>';
            $count++;
        }
        $number++;
    } else {
        break;
    }
}
?>
</body>
</html>
