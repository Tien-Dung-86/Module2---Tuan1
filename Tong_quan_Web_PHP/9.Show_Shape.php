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
<?php
// create square
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 7; $j++) {
        echo '*' . ' ';
    }
    echo "<br>";
}
?>


<?php
// create triangle
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo '*' . '';
    }
    echo "<br>";
}
?>

<?php
echo '<br>';
?>

<?php
// reverse triangle
for ($i = 1; $i <= 6; $i++) {
    for ($j = 6; $j >= $i; $j--) {
        echo '*' . '';
    }
    echo "<br>";
}
?>

</body>
</html>
