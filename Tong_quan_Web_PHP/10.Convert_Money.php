<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        form {
            border: 1px solid black;
            width: 250px;
        }

        h3 {
            text-align: center;
        }
    </style>
</head>
<body>
<form method="post">
    <h3>Currency converter</h3>
    <table>
        <tr>
            <td>Amount</td>
            <td><input type="text" name="amount" placeholder="inputMoney"></td>
        </tr>
        <tr>
            <td>From</td>
            <td><select name="from">
                    <option value="VN">Vietnam</option>
                    <option value="US">United Stage</option>
                </select></td>
        </tr>
        <tr>
            <td>To</td>
            <td><select name="to">
                    <option value="VN">Vietnam</option>
                    <option value="US">United Stage</option>
                </select></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="convert"></td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputMoney = $_POST['amount'];
    $from = $_POST['from'];
    $to = $_POST['to'];
};
if (($from == 'VN') && ($to == 'US')) {
    $convert = $inputMoney / 23000;
    echo 'Convert money: ' . "$inputMoney " . $from . " to " . $to . " = " . $convert;
} else if (($from == 'US') && ($to == 'VN')) {
    $convert = $inputMoney * 23000;
    echo 'Convert money: ' . "$inputMoney " . $from . " to " . $to . " = " . $convert;
}

?>
