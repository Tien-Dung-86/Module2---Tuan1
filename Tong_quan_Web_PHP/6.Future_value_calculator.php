<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value Calculator</title>
    <style>
        .container{
            width: 200px;
            padding: 10px;
            border: 1px solid black;
        }
        input{
            margin: 2px;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="container">
        <h3>Future Value Calculator</h3>
        <label>
           Investment Amount:
            <input type="text" name="investmentAmount">
        </label>

        <label>
            Yearly Interest Rate:
            <input type="text" name="yearlyInterest">
        </label>
        <label>
            Number of Years:
            <input type="text" name="numberOfYear">
        </label>
        <br> <br>
        <input type="submit" value="Calculate">
    </div>
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $investmentAmount = $_POST["investmentAmount"];
    $yearlyInterest = $_POST["yearlyInterest"];
    $numberOfYear = $_POST["numberOfYear"];
};
$futureValue = $investmentAmount + ($investmentAmount * $yearlyInterest);
for($i = 1; $i <= $numberOfYear; $i++){
    if($i == $numberOfYear){
        $futureValue = $futureValue * $i;
    }
}
echo "The Future value is: ".$futureValue;
?>
