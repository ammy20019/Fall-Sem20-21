<?php
require 'common.php';
session_start();
die();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>hello</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"> 
        <script type="text/javascript" src="jquery-3.4.0.min.js">
            </script>
            <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="phpstylesheet.css">   
    </head>
    <body>
        <?php
    $new_user_query="SELECT id FROM shop WHERE email='$emails'";
    $new_user_result= mysqli_query($con, $new_user_query);
    $new_user_available= mysqli_num_rows($new_user_result);
    if($new_user_available>0){
        echo "ERROR!"
        . "EMAIL ALREADY EXISTS!!!";
    }
    else{
        $users_registration_query="insert into users(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
        $user_registration_submit= mysqli_query($con, $users_registration_query) or die(mysqli_error($con));
        echo "user successfully registered";
        $new_id="SELECT id FROM shop WHERE email='$email'";
        $new_user_id=mysqli_query($con,$new_id);
        $_SESSION= mysqli_insert_id($con);
        header('location:products_page.php');
    }
 ?>
    </body>
</html>
