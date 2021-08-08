<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $product = $_POST['product'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
}
$discountAmount = $price * $discount * 0.1;
$discountPrice = $price - $discountAmount;
echo "Product's name: ".$product."<br/>";
echo "Discount Amount: ".$discountAmount."<br/>";
echo "The Product's price after disount: ".$discountPrice."<br/>";
?>
