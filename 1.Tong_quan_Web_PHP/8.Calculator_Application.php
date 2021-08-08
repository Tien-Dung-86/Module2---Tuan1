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
<form method="post">
    <div class="container">
        <h3>Simple Calculator</h3>
        <fieldset>
            <legend>Calculator</legend>
            <table>
                <tr>
                    <td>First operand:</td>
                    <td><input type="text" name="firstOperand"></td>
                </tr>
                <tr>
                    <td>Operator:</td>
                    <td><select name="operator">
                            <option value="+">Addition</option>
                            <option value="-">Subtraction</option>
                            <option value="*">Multiply</option>
                            <option value="/">Divide</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Second operand:</td>
                    <td><input type="text" name="secondOperand"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Calculate"><span>&nbsp</span><input type="reset" value="Reset"></td>

                </tr>
            </table>
        </fieldset>
    </div>
</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstOperand = $_POST['firstOperand'];
    $operator = $_POST['operator'];
    $secondOperand = $_POST['secondOperand'];
}
switch ($operator) {
    case '+':
        $calculation = $firstOperand + $secondOperand;
        echo "<h3>Result:</h3>" . "<br/>";
        echo $firstOperand . $operator . $secondOperand . "=" . $calculation;
        break;
    case '-':
        $calculation = $firstOperand - $secondOperand;
        echo "<h3>Result:</h3>" . "<br/>";
        echo $firstOperand . $operator . $secondOperand . "=" . $calculation;
        break;
    case '*':
        $calculation = $firstOperand * $secondOperand;
        echo "<h3>Result:</h3>" . "<br/>";
        echo $firstOperand . $operator . $secondOperand . "=" . $calculation;
        break;
    case '/':
        try {
            $calculation = $firstOperand / $secondOperand;
            echo "The second operand must > 0";
        } catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();
        }
        echo "<h3>Result:</h3>" . "<br/>";
        echo $firstOperand . $operator . $secondOperand . "=" . $calculation;
        break;
}
?>
