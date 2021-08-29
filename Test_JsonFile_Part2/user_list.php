<?php
include_once "function.php";
$users = loadData();
//echo "<pre>";
//print_r($users);
?>


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
<form>
    <table>
        <thead>
        <tr>
            <th>
                NAME
            </th>
            <th>
                AGE
            </th>
            <th>
                ADDRESS
            </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($users as $user):?>
            <tr>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['age'] ?></td>
                <td><?php echo $user['address'] ?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</form>
</body>
</html>
