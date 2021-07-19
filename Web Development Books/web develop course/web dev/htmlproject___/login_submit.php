<?php
require 'common.php';
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
 $emails= mysqli_real_escape_string($con, $_POST['email']);
$passwords= md5(mysqli_real_escape_string($con,$_POST['password']));
$user_query="SELECT id FROM shop WHERE email='$emails'";
$user_result= mysqli_query($con,$user_query);
$user_data= mysqli_num_rows($user_result);
if($user_data==0){
    echo "INCORRECT EMAIL/PASSWORD";
}
else{
    mysqli_fetch_array($user_result);
    $_SESSION['email']=$emails;
    $_SESSION['user_id']= mysqli_insert_id($con);
    header('location:products_page.php');
}
?>
        
         <?php
       include 'footer.php';
    ?>
    </body>
</html>

