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
    <fieldset>
        <h2>REGISTRATION</h2>
        <table>
            <tr>
                <td>Tên người dùng:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="mail"></td>
            </tr>
            <tr>
                <td>Điện thoại:</td>
                <td><input type="text" name="phone"></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>

<?php


$username = null;
$mail = null;
$phone = null;
if($_SERVER['REQUEST_METHOD'] == 'POST'){}
 $username = $_POST['username'];
 $mail = $_POST['mail'];
 $phone = $_POST['phone'];
?>