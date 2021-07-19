<?php
require 'common.php';
if($_SESSION['email']==0){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Success</title>
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"> 
        <script type="text/javascript" src="jquery-3.4.0.min.js">
            </script>
            <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="phpstylesheet.css">
        
    </head>
    <body>
        <div class="container">
            <?php
            $status=$_GET['status'];
            $update_status="UPDATE users SET status='$status' WHERE id='$user_id' AND item_id='$item_id'";
            $update_status_result=mysqli_query($con,$update_status) or die(mysqli_error($con));
            ?>
            <h4> Your order is confirmed. <span class="glyphicon glyphicon-ok-sign"></span></h4>
            <p> Thank you for shopping with us. <a href="products_page.php"> Click here</a> to purchase any other item. </p>
        </div>
    </body>
</html>
