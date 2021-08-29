<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form method="POST">
    <table>
        <tr>
            <td>
                Name:
            </td>
            <td>
                <input type="text" name="name" placeholder="Name">
            </td>
        </tr>
        <tr>
            <td>
                Age:
            </td>
            <td>
                <input type="text" name="age" placeholder="Age">
            </td>
        </tr>
        <tr>
            <td>
                Address:
            </td>
            <td>
                <input type="text" name="address" placeholder="Address">
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                <input type="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>
</body>
</html>


<?php
include_once "function.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $user = array("name" => $name, "age" => $age, "address" => $address);
    addUser($user);
    header("location: user_list.php");
}

?>
