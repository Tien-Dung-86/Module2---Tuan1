<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            width: 250px;
            border: 1px solid black;
            position: absolute;
        }

        input {
            padding: 2px;
            margin: 5px;
            position: relative;
        }
    </style>
</head>
<body>
<form action="display_discount.php" method="post">
    <div class="container">
        <h3>Product Discount Calculator</h3>
        <label>
            Product Description:
            <input type="text" name="product" placeholder="product's name">
        </label>
        <br><br>
        <label>
            List Price:
            <input type="text" name="price" placeholder="price">
        </label>
        <br><br>
        <label>
            Discount Percent:
            <input type="text" name="discount" placeholder="discount">
        </label>
        <br><br>
        <input type="submit" value="Calculate">
    </div>
</form>
</body>
</html>
<?php
include "Tong_quan_Web_PHP/display_discount.php";
?>


