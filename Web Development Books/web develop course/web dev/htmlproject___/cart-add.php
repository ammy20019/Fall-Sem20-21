<?php
require 'common.php';
$current_id=$_GET['id'];
$cart="INSERT INTO user_item(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$cart_adding=mysqli_query($con,$cart) or die(mysqli_error($con));
 echo "Added to cart successfully!!";
 header('location:products_page.php');
?>
