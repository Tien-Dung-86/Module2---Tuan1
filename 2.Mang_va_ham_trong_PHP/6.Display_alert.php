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
</body>
</html>

<?php
function calculate($x, $y)
{
    $operator = '';
    if ($operator == '+') {
        $calculation = $x + $y;
        echo "<h3>Result:</h3>" . "<br/>";
        echo $x . $operator . $y . "=" . $calculation;
    } else if ($operator == '-') {
        $calculation = $x - $y;
        echo "<h3>Result:</h3>" . "<br/>";
        echo $x . $operator . $y . "=" . $calculation;
    } else if ($operator == '*') {
        $calculation = $x * $y;
        echo "<h3>Result:</h3>" . "<br/>";
        echo $x . $operator . $y . "=" . $calculation;
    } else if ($operator == '/') {
        try {
            $calculation = $x / $y;
            echo "The second operand must > 0";
        } catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();
        }
        echo "<h3>Result:</h3>" . "<br/>";
        echo $x . $operator . $y . "=" . $calculation;
    }
}
$operator = '*';
calculate(2, 5);
?>
