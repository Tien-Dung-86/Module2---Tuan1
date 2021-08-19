<?php
$num = 86;

function random($min, $max)
{
    return rand($min, $max);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $computerGuess = (int) $_POST['result'];

    $answer = $_POST['so'];
    if ($answer == 'more') {
        $max = $computerGuess;
        $min = (int) $_POST['min'];
        $computerGuess = random($min, $max);
        echo "min: " . $min . "<br />";
        echo "max: " . $max . "<br />";
        echo "Computer take number:: " . $computerGuess;
    } else {
        $min = $computerGuess;
        $max = (int) $_POST['max'];
        $computerGuess = random($min, $max);
        echo "min: " . $min . "<br />";
        echo "max: " . $max . "<br />";
        echo "Computer take number:: " . $computerGuess;
    }

} else {
    $min = 1;
    $max = 100;
    $computerGuess = random(1, 100);
    echo "Computer take number:: " . $computerGuess;
}

echo "<br /> Personal pick: " . $num;

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<form method="post">
    <input name="so" type="radio" value="more"> More
    <input name="so" type="radio" value="less"> Less
    <input name="result" type="hidden" value="<?php echo $computerGuess ?>">
    <input name="min" type="hidden" value="<?php echo $min ?>">
    <input name="max" type="hidden" value="<?php echo $max ?>">
    <input name="so1" type="submit" value="submit">
</form>
</body>

</html>