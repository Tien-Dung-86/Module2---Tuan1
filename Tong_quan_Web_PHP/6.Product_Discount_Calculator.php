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
<form action="display_discount.php" method="post">
    <div>
        <h3>Product Discount Calculator</h3>
        <label>
            Product Description:
            <input type="text" name="product" placeholder="product's name">
        </label>
        <label>
            List Price:
            <input type="text" name="price" placeholder="price">
        </label>
        <label>
            Discount Percent:
            <input type="text" name="discount" placeholder="discount">
        </label>
        <br>
        <input type="submit" value="Calculate">
    </div>
</form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
?>
